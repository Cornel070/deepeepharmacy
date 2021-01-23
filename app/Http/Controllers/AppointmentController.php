<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\Contact;
use App\Email;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Client Appointmnets';
        $appts = Appointment::all();
        return view('admin.appts',compact('title','appts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appt = Appointment::create($request->all());
        $this->sendAdminEmail($appt);
        session()->flash('appt_success',true);
        return redirect()->route('home');
    }

    private function sendAdminEmail(Appointment $appt)
    {
        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $beautymail->send('emails.appts', ['appt'=>$appt], function($message)
        {
            $message
                ->from('onsite@deepeepharmacy.com','Deepee Website Bot')
                ->to('admin@deepeepharmacy.com')
                ->subject('Appointment Notice');
        });

        return true; 
    }

    public function unapprove($id)
    {
        $appt = Appointment::find($id);
        $appt->status = 'Unapproved';
        $appt->save();
        session()->flash('success','Appointment successfully unapproved');

        return redirect()->route('appts');
    }

    public function approve($id)
    {
        $appt = Appointment::find($id);
        $appt->status = 'Approved';
        $appt->save();
        session()->flash('success','Appointment successfully approved');

        return redirect()->route('appts');
    }

    public function saveEmail(Request $request)
    {
        $email = new Email;
        $email->email = $request->email;
        $email->save();

        session()->flash('newsletter',true);
        return redirect('/');
    }

    public function saveContact(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        session()->flash('contact',true);
        return redirect()->route('contact-us');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
