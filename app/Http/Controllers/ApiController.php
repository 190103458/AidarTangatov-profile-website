<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class ApiController extends Controller
{
    //

    
    public function index(){
        $blog = post::all();

        return response($blog, 200);

    }

    public function get_post(Request $request){
        $post = post::find($request-> post_id);

        if($post == null){
            return response(['message' => 'there is no post'],404);
        }
        return response($post, 200);

    }
}
