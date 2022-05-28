<?php

namespace App\Http\Controllers;

use App\Models\comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    function index(){
        $comments = comments::find(2);
        return $comments->post;
    }
}
