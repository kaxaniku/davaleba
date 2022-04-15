<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function index()
    {
        $MyData = [
            'title' => 'AboutPage',
            'short_text' => 'welcome to AboutPage'
        ];
        return view('about.about', ['MyData' => $MyData]);
    }
    public function view($id){
        $MyData = [
            'title' => 'AboutPage(inner)',
            'short_text' => 'welcome to AboutPage number' . $id
        ];
        return view('about.about-inner-page', ['MyData' => $MyData]);
    }
}
