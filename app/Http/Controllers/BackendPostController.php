<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use App\HeaderTop;
use App\Cart;
class BackendPostController extends Controller
{
    public function create(){
    	return view('backend.posts.create');
    }
    public function store(Request $r){
    	$this->validate($r,[
    		'title'=>'required',
    		'image'=>'required',
    		'description'=>'required',
    	]);
    	$post = new Post();
    	$post->title = $r->title;
    	$post->description = $r->description;
    	
    		if($r->file('image')){
                $file = $r->file('image');
               
                $fileName = rand(0000,9999).$file->getClientOriginalName();
                $file->move(('public/frontend/posts/images'),$fileName);
                $post->image = $fileName;
                
            }
            $post->created_by = Auth::user()->id;
            $post->save();
            return redirect()->route('post.create')->with('message','Post Added Successfully');
    }
    public function details($id){
    	$data['headertop'] = HeaderTop::where('id',1)->first();
    	$data['carts'] = Cart::where('user_ip',request()->ip())->get();
    	$data['post'] = Post::where('id',$id)->first();
    	
    	return view('frontend.posts.details',$data);
    }
}
