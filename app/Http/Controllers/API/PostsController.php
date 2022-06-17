<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Posts;

class PostsController extends Controller
{
    public function index()
    {
        $data = [
            'posts' => Posts::OrderBy('id','desc') -> get()
        ];

        return response()->json([
            'data' => $data,
            'status' => 'Success'
        ]);
    }

    public function view(Request $request) {
        $post = Posts::where('id', $request->id)->withCount('comments')->first();

        $data = $post;

        return response()->json([
            'status' => $post ? 'Success' : "Failure",
            'data' => $data
        ]);
        
    }
}
