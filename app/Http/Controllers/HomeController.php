<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HeaderTop;
use App\Product;
use App\Cart;
class HomeController extends Controller
{
    public function home(){
    	$data['headertop'] = HeaderTop::where('id',1)->first();
    	$data['products']   = Product::all();
        $data['p_cat']   = Product::select('category')->groupBy('category')->orderBy('category','DESC')->get();
    	$data['carts'] = Cart::where('user_ip',request()->ip())->get();
        $data['a_products'] = Product::where('category','a_cat')->latest()->get();
    	return view('frontend.home.index',$data);
    }
}
