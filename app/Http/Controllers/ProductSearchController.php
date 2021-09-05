<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\HeaderTop;
use App\Cart;


class ProductSearchController extends Controller
{
    public function search(Request $r){
    	$data['carts'] = Cart::all();
    	$data['headertop'] = HeaderTop::where('id',1)->first();
    	$data['products'] = Product::where([['name','!=',NULL],[function($query) use ($r){
    		if(($term = $r->term)){
    			$query->orWhere('name','LIKE','%'.$term.'%')->get();
    		}
    	}]
    ])
    	->orderBy('id','DESC')
    		->paginate(6);

    		return view('frontend.product.search',$data);
    }
    public function productView($id){
        $where = array('id' => $id);
        $product = Product::where($where)->first();
        return Response::json($customer);
    }
    public function details($id){
        $data['headertop'] = HeaderTop::where('id',1)->first();
        $data['carts'] = Cart::where('user_ip',request()->ip())->get();
        $data['post'] = Product::where('id',$id)->first();
        
        return view('frontend.posts.details',$data);
    }
}
