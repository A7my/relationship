<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        // return Post::find(1)->comment;
        return view('w');
    }

    function in(Request $request){
        return Post::find(1)->comment;
    }
}
