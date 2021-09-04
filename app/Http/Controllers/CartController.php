<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\HeaderTop;
class CartController extends Controller
{
    public function addCart(Request $r,$id){
    	$product_price = Product::where('id',$id)->first();
    	$price = $product_price->b_rate;

    	$cart = new Cart();
    	$cart->qty = $r->qty;
    	$cart->product_id = $id;
    	$cart->price = $price*$r->qty;
    	$cart->user_ip = $r->ip();
    	$cart->save();
    	return back();
    }

    public function cartView(){
    	$data['headertop'] = HeaderTop::where('id',1)->first();
    	$data['carts'] = Cart::all();
    	return view('frontend.cart.cart_view',$data);
    }
    public function cartDestroy($id){
    	$cart = Cart::where('id',$id)->delete();
    	return back();
    }

    public function cartUpdate(Request $r){
    	$carts = Cart::all();
    	$cart_id_count = count($r->id);
    	
    	for ($i=0; $i <$cart_id_count ; $i++) { 
    		$cart = Cart::where('id',$r->id[$i])->first();
    		$cart->qty = $r->qty[$i];
    		$product_price = Cart::where('qty',$r->qty[$i])->where('price',$r->price[$i])->first();

    		$pre_price = $product_price->price;

    		$pre_qty = $product_price->qty;

    		$per_price = (int)$pre_price/(int)$pre_qty;

    		$cart->price = (int)$r->qty[$i] *(int)$per_price;

    		$cart->save();
    		return back();
    	}
    }
}
