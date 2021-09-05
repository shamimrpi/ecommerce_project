<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HeaderTop;
use App\Product;
use App\Cart;
use App\Category;
use App\Post;
class HomeController extends Controller
{
    public function home(){
    	$data['headertop'] = HeaderTop::where('id',1)->first();
    	$data['products']   = Product::paginate(8);
        $data['categories']   = Category::all();
    	$data['carts'] = Cart::where('user_ip',request()->ip())->get();
        $data['hot_category'] = Product::where('category_id','6')->latest()->get();
        $data['new_arrivals'] = Product::where('category_id',7)->latest()->get();
        $data['feature_products'] = Product::where('category_id',4)->latest()->get();
        $data['special_products'] = Product::where('category_id',7)->take(3)->get();
        $data['weekly_products'] = Product::where('category_id',4)->take(3)->get();
        $data['flash_products'] = Product::where('category_id',3)->take(3)->get();
        $data['posts'] = Post::latest()->take(3)->get();
    	return view('frontend.home.index',$data);
    }
}
