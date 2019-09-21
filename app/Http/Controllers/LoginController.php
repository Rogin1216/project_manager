<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
    	return view('login');
    }

    public function authenticate()
    {
    	if(Auth::attempt([
    		'email' => request()->email, 
    		'password' => request()->password
    	])) {
    		return redirect('/projects');
    	}

    	return redirect('/');
        elseif (Auth::attempt([
        ])) {
            '# code...'
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
