<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class BlogController extends Controller
{
    //

    public function index(){
        $posts = post::all();

        return view("blog.index")->with(["posts" => $posts]);

    }

    public function store(Request $request){
        Post::create([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return back();

    }

     public function getPost($id){
        $post = post::find($id);

        if($post == null) return response(['message' => 'post not found'], 404);

        return view('blog.detail') -> with(['posts'=>$post]);

    }
}
