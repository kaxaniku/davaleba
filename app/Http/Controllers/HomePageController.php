<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $MyData = [
            'title' => 'HomePage',
            'short_text' => 'welcome to HomePage'
        ];
        return view('home', ['MyData' => $MyData]);
    }
}
