<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HeaderTop;
use App\Product;
use App\Cart;
use App\Category;
class HomeController extends Controller
{
    public function home(){
    	$data['headertop'] = HeaderTop::where('id',1)->first();
    	$data['products']   = Product::all();
        $data['categories']   = Category::all();
    	$data['carts'] = Cart::where('user_ip',request()->ip())->get();
        $data['hot_category'] = Product::where('category_id','6')->latest()->get();
    	return view('frontend.home.index',$data);
    }
}
