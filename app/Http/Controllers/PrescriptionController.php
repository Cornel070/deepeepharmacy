<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prescription;
use App\Drug;
use App\Item;
use PDF;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'All Prescriptions';
        $prescs = Prescription::all();

        return view('admin.presc.index', compact('title','prescs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add Prescription';
        $drugs = Drug::all();
        return view('admin.presc.add', compact('title','drugs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create prescription first with the provided title
        //then use the ID while creating a pivot table for prescription and
        //the items in it: items(drug_id, description)
        // dd($request->all());
        $presc = new Prescription;
        $presc->title = $request->title;
        $presc->save();

        // create super array for all stuff
        $itemsArr = [];
        foreach ($request['drug_id'] as $key => $value){
            array_push($itemsArr, [
                'drug_id' => $value,
                'prescription_id' => $presc->id,
                'description' => $request['drug_dosage'][$key],
            ]);
        }

        for($i = 0; $i < sizeof($itemsArr); $i++){
            Item::create($itemsArr[$i]);
        }

        session()->flash('success','Prescription created.');

        return redirect()->route('all-prescs');
    }

    public function download($id)
    {
        $p = Prescription::find($id);
        $pdf = PDF::loadView('admin.pdf.presc', ['p'=>$p]);
        return $pdf->download($p->title.'#'.$p->id.'.pdf');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $presc = Prescription::find($id);
        if (!$presc) {
            session()->flash('error','Prescription does not exist');
            return redirect()->back();
        }

        $drugs = Drug::all();
        $title = 'Edit '.$presc->title.' prescription';
        return view('admin.presc.edit',compact('presc','title','drugs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $prescription = Prescription::find($request->presc_id);
        $prescription->title = $request->title;
        $prescription->save();
        $this->updateItems($request, $prescription->id);

        session()->flash('success','Prescription successfully updated');
        return redirect()->route('all-prescs');
    }

    private function updateItems(Request $request, $presc_id)
    {
         // create super array for all stuff
        $itemsArr = [];
        if (array_key_exists('drug_id', $request->all())) {
            foreach ($request['drug_id'] as $key => $value){
                array_push($itemsArr, [
                    'drug_id' => $value,
                    'prescription_id' => $presc_id,
                    'description' => $request['drug_dosage'][$key],
                ]);
            }

            //first get the items that match the provided prescription id
            $items_in_db = Item::where('prescription_id',$presc_id)->get();

            //loop through while updating them 
            for($i = 0; $i < sizeof($itemsArr); $i++){
                if (!empty($items_in_db[$i])) {
                    //update them with the new provided from th user
                    $items_in_db[$i]->update($itemsArr[$i]);   
                }
            }
        }
        

        $this->checkCreateNew($request->all(), $presc_id);

        return true;
    }

    private function checkCreateNew(array $items, $presc_id)
    {
        //check if any new items were added by using the *_new naming
        //and add them to the db by creating new items
        if (array_key_exists('drug_id_new', $items)) {
            $itemsArr = [];
            foreach ($items['drug_id_new'] as $key => $value){
                array_push($itemsArr, [
                    'drug_id' => $value,
                    'prescription_id' => $presc_id,
                    'description' => $items['drug_dosage_new'][$key],
                ]);
            }

            for($i = 0; $i < sizeof($itemsArr); $i++){
                Item::create($itemsArr[$i]);
            }
        }

        return true;
    }

    public function removeDrugItem(Request $request)
    {
        $drug = Item::find($request->id);
        $drug->delete();
        return true;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $presc = Prescription::find($request->id);
        $presc->delete();

        return true;
    }
}
