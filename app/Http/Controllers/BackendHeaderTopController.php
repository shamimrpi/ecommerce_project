<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HeaderTop;
class BackendHeaderTopController extends Controller
{
    public function edit(){
    	$headertop = HeaderTop::where('id',1)->first();
    	return view('backend.headertop.edit',compact('headertop'));
    }
    public function update(Request $r){
    	$this->validate($r,[
    		'phone' => 'required',
    		'email' => 'required',
    		'logo'  => 'required'
    	]);
    	$headertop = HeaderTop::where('id',1)->first();
    	$headertop->phone = $r->phone;
    	$headertop->email = $r->email;
    	if($r->file('logo')){
                $file = $r->file('logo');
                @unlink(('public/frontend/images/'.$headertop->logo));
                $fileName = rand(0000,9999).$file->getClientOriginalName();
                $file->move(('public/frontend/images'),$fileName);
                $headertop->logo = $fileName;
                
            }

         $headertop->save();
     
        return redirect()->route('headertop.edit')->with('message','Data added Successfully');;
    }
}
