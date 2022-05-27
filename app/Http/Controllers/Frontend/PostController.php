<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function view($slug, $id){
        $post = Posts::where('id', $id)->first();
        $data = [
            'post' => $post
        ];
        return view('Frontend.posts.view')->with('data', $data);
    }
}
