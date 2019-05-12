<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostController extends Controller
{
    //
    public function posts()
    {
        $result = DB::select("SELECT id,cat_name FROM category ORDER BY cat_name;");

        $categories = null;
        for ($i = 0; $i < count($result); $i++) {
            $categories[$result[$i]->id] = $result[$i]->cat_name;
        }

        return view('post',compact('categories'));
    }
    public function post_details(Request $request)
    {
        //dd($request);
        $post = new Post();
        $post->title = $request->title;
        $post->price = $request->price;
        $post->phone_no = $request->phone_no;
        $post->description = $request->description;

        $post->user_id = Auth::id();

//        $post->cat_name= $request->cat_name;
        $post->cat_id = $request->cat_id;
        $post->save();
        $post_details = DB ::select("SELECT post.id,category.cat_name,post.title,post.price,post.phone_no,post.description FROM post,category WHERE post.cat_id=category.id ORDER BY category.cat_name");
        return view ('Post_Details',compact('post_details'));

    }
    public function details()
    {
        $post_details = DB ::select("SELECT post.id,category.cat_name,post.title,post.price,post.phone_no,post.description FROM post,category WHERE post.cat_id=category.id ORDER BY category.cat_name");
        return view ('Post_Details',compact('post_details'));
    }
    public function my_posts()
    {
        $user_id = Auth::id();

        $query = sprintf("SELECT post.id,category.cat_name,post.title,post.price,post.phone_no,post.description FROM post,category WHERE post.cat_id=category.id AND post.user_id = %u ORDER BY category.cat_name",$user_id);


        $post_details = DB ::select($query);
        return view ('my_posts',compact('post_details'));
    }
    public function price()
    {
        $post_details = DB ::select("SELECT post.id,category.cat_name,post.title,post.price,post.phone_no,post.description FROM post,category WHERE post.cat_id=category.id ORDER BY post.price");
        return view ('Post_Details',compact('post_details'));
    }
    public function price_desc()
    {
        $post_details = DB ::select("SELECT post.id,category.cat_name,post.title,post.price,post.phone_no,post.description FROM post,category WHERE post.cat_id=category.id ORDER BY post.price DESC");
        return view ('Post_Details',compact('post_details'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $result = DB::select("SELECT id,cat_name FROM category ORDER BY cat_name;");

        $categories = null;
        for ($i = 0; $i < count($result); $i++) {
            $categories[$result[$i]->id] = $result[$i]->cat_name;
        }

        //return view('post',compact('categories'));
        return view('edit',compact('post'),compact('categories'));
    }

    public function edit_post($id,Request $request)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->price = $request->price;
        $post->phone_no = $request->phone_no;
        $post->description = $request->description;
//        $post->cat_name= $request->cat_name;
        $post->cat_id = $request->cat_id;
        $post->save();

        //return view('post',compact('categories'));
        $post_details = DB ::select("SELECT post.id,category.cat_name,post.title,post.price,post.phone_no,post.description FROM post,category WHERE post.cat_id=category.id ORDER BY post.cat_id");
        return redirect("/details");
    }
    public function delete_post($id)
    {
        $post = Post::find($id);
        $post->delete();
        $post_details = DB ::select("SELECT post.id,category.cat_name,post.title,post.price,post.phone_no,post.description FROM post,category WHERE post.cat_id=category.id ORDER BY post.cat_id");
        return redirect("/details");
        //        return view ('Post_Details',compact('post_details'));
    }

}
