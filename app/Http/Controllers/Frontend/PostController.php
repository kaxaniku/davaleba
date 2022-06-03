<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $data = [
            'posts' => Posts::orderBy('id', 'desc')->paginate(18)
        ];

        return view('Frontend.posts.index')->with('data', $data);
    }
    public function view($slug, $id){
        $post = Posts::where('id', $id)->first();
        $data = [
            'post' => $post
        ];
        return view('Frontend.posts.view')->with('data', $data);
    }
}
