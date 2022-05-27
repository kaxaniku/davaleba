<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Slide;

use App\Models\Posts;

class HomePageController extends Controller
{
    public function index() {

        $slides = Slide::all();

        $post = Posts::orderBy('id', 'DESC')->paginate(12);

        $data = [
            'slides' => $slides,
            'posts'  => $post
        ];

        return view('Frontend.home', ['data' => $data]);
    }
}
