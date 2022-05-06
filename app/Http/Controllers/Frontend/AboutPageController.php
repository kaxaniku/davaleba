<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class AboutPageController extends Controller
{
    public function index()
    {
        $MyData = [
            'title' => 'AboutPage',
            'short_text' => 'welcome to AboutPage'
        ];
        return view('Frontend.about.about', ['MyData' => $MyData]);
    }
    public function view($id){
        $MyData = [
            'title' => 'AboutPage(inner)',
            'short_text' => 'welcome to AboutPage number' . $id
        ];
        return view('Frontend.about.about-inner-page', ['MyData' => $MyData]);
    }
}
