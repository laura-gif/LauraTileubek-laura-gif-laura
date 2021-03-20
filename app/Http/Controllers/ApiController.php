<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class ApiController extends Controller
{
    //
    public function index(Request $request){
     $post = Post::all();

     return response($post,200);
         }
}
