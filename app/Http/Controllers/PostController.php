<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostController extends Controller
{
    //
    public function posts()
    {
        return view('post');
    }
    public function post_details(Request $request)
    {
        //dd($request);
        $post = new Post();
        $post->title = $request->title;
        $post->price = $request->price;
        $post->phone_no = $request->phone_no;
        $post->description = $request->description;
        $post->cat_name= $request->cat_name;


        $post->save();
        //$post_details = DB::select("SELECT id,title,price,phone_no,description,cat_name FROM post ORDER BY cat_name,id");

//
//
//        return back();
        $post_details = DB ::select("SELECT * FROM post ORDER BY cat_name,id");
        return view ('Post_Details',compact('post_details'));

    }
    public function details()
    {
        $post_details = DB ::select("SELECT * FROM post ORDER BY cat_name,id");
        return view ('Post_Details',compact('post_details'));
    }
}
