<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\AboutPage;

class AboutPageController extends Controller
{
    public function index()
    {
        $AboutData = AboutPage::first();

        return view('Frontend.about.about')->with('data', ['AboutData' => $AboutData]);
    }
    public function view($id){
        $MyData = [
            'title' => 'AboutPage(inner)',
            'short_text' => 'welcome to AboutPage number' . $id
        ];
        return view('Frontend.about.about-inner-page', ['MyData' => $MyData]);
    }
}
