<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drug;

class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'All Drugs';
        $drugs = Drug::all();
        return view('admin.drug.index',compact('title','drugs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Add drug information";
        return view('admin.drug.add', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [ 
            'name'          => 'required',
            'description'   => 'required',
            'price'         => 'required|integer',
            // 'drug_img'      => 'sometimes|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];

        $this->validate($request, $rules);

        $imageName = time().'.'.$request->drug_img->extension();  
        $request->drug_img->move(public_path('assets/drugs'), $imageName);

        $drug = Drug::create( $request->all() );
        $drug->drug_img = $imageName;
        $drug->save();

        session()->flash('success', $request->name.' successfully added to list of drugs');

        return redirect()->route('all-drugs');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $drug = Drug::find($id);
        $title = 'Edit '.$drug->name;

        return view('admin.drug.edit',compact('drug','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $rules = [ 
            'name'          => 'required',
            'description'   => 'required',
            'price'         => 'required|integer',
            // 'drug_img'      => 'sometimes|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];

        $this->validate($request, $rules);

        $drug = Drug::find($id);
        $drug->update($request->all());

        if ($request->hasFile('drug_img')) {
            $imageName = time().'.'.$request->drug_img->extension();  
            $request->drug_img->move(public_path('assets/drugs'), $imageName);
            $drug->drug_img = $imageName;
            $drug->save();
        }

        session()->flash('success', $drug->name.' successfully updated');
        return redirect()->route('all-drugs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $drug = Drug::find($request->id);
        $drug->delete();

        return true;
    }

    public function find(Request $request)
    {
        $drug = Drug::find($request->drug_id);
        if (!$drug) {
            $title = 'Know your drugs';
            return view('show-drugs',compact('title','drug'));   
        }
        $title = 'Drug: - '.$drug->name;
        $drugs = Drug::where('name','!=',$drug->name)->get();
        return view('show-drugs',compact('title','drug','drugs'));
    }

    public function search(Request $request)
    {
        $query = '%'.$request->txt.'%';
        $drugs = Drug::select('name','id')->where('name','like', $query)->get();

        if ($drugs->isEmpty()) {
            return response()->json(['success'=> false, 'message'=>'Drug not found']);
        }

        return response()->json(['success'=> true, 'drugs'=> $drugs]);
    }
}
