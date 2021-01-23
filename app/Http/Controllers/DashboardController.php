<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;
use App\Exports\EmailsExport;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    public function index()
    {
    	$title = 'Depee Pharmacy Admin area';
    	return view('admin.dash.index', compact('title'));
    }

    public function logout(Request $request)
    {
    	auth()->logout();
  		return redirect()->route('login');
    }

    public function getEmails()
    {
        $title = 'Newsletter subscription emails';
        $emails = Email::all();

        return view('admin.emails',compact("title","emails"));
    }

    public function exportEmails()
    {
        return Excel::download(new EmailsExport, 'newsletter-emails.csv',\Maatwebsite\Excel\Excel::CSV, ['Content-Type' => 'text/csv']);
    }
}
