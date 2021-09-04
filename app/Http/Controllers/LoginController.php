<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login(){

    	return view('backend.login.login');
    }

    public function loginConfirm(Request $r){
    	$data = $r->only('email', 'password');

    	
    	/* $data['password'] = Hash::make($data['password']);*/
    	if (Auth::attempt($data)) {
    		return redirect()->route('dashboard');
    	} else {
    		return redirect()->route('admin.login')->withErrors(['Invalid Email and password']);
    	}
    }

    public function logout(Request $r)
    {
    	Auth::logout();

    	return redirect()->route('admin.login');
    }
}
