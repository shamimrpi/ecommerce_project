<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class BackendProductController extends Controller
{
	public function index(){
		$products = Product::latest()->get();
		return view('backend.products.index',compact('products'));
	}
    public function create(){
    	return view('backend.products.create');
    }
    public function store(Request $r){
    	$this->validate($r,[
    		'name' => 'required',
    		'category' => 'required',
    		'size'  => 'required',
    		'p_rate'  => 'required',
    		'b_rate'  => 'required',
    		'image'  => 'required',
    		'description'  => 'required',
    		'stock'  => 'required',
    	]);
    	$product_id = Product::where('id',1)->get()->first();
    	

    	$product = new Product();

    	$product->name = $r->name;
    	$product->category = $r->category;
    	$product->size = $r->size;
    	$product->p_rate = $r->p_rate;
    	$product->b_rate = $r->b_rate;
    	$product->description = $r->description;
    	$product->stock = $r->stock;
    	if($r->file('image')){
                $file = $r->file('image');
                @unlink(('public/frontend/products/images/'.$product->image));
                $fileName = rand(0000,9999).$file->getClientOriginalName();
                $file->move(('public/frontend/products/images'),$fileName);
                $product->image = $fileName;
                
            }

         $product->save();

         if($product->id != NULL){
         	$item_prodcut = Product::where('id',$product->id)->first();
    		$item_code = 'P000' . $product->id;
    		$item_prodcut->item_code = $item_code;
    		$item_prodcut->save();
         }
     
        return redirect()->route('product.create')->with('message','Product Added Successfully');;
    }
}
