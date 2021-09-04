<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HeaderTop;
use App\User;
use Illuminate\Support\Facades\Hash;
class CustomerController extends Controller
{
    public function index(){
    	$data['headertop'] = HeaderTop::where('id',1)->first();
    	return view('frontend.customers.index',$data);
    }
    public function store(Request $r){
    	
    	
    	$this->validate($r,[
    		'first_name' => 'required',
    		'last_name' => 'required',
    		'dob' =>'required',
    		'gender' => 'required',
    		'email' => 'required|unique:users',
    		'password' => 'required|max:20|min:8',
    	]);

    	$customer  = new User();
    	$customer->first_name = $r->first_name;
    	$customer->last_name = $r->last_name;
    	$customer->dob = $r->dob;
    	$customer->gender = $r->gender;
    	$customer->email = $r->email;
    	$customer->password = Hash::make($r->password);
    	Hash::make($r->password);
    	$customer->usertype = 'customer';
    	$customer->save();
    	return back();

    }
}
