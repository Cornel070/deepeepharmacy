<?php

namespace App\Http\Controllers;
use Hash;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginFrm()
    {
    	return view('admin.login');
    }

    public function login(Request $request)
    {
    	$this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            // return redirect()->intended();
            return redirect()->route('dashboard');
        }
        session()->flash('error','Invalid credentials');
        return back()->withInput($request->only('email', 'remember'));
    }
}
