<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Slide;

class HomePageController extends Controller
{
    public function index()
    {
        $Slide = Slide::find(1);
        $Slide->title = 'test_update_T';
        $Slide->short_text = 'test_update_S';
        $Slide->save();

        $Slide = Slide::all();
        
        $MyData = [
            'Slide' => $Slide,
        ];
        return view('home', ['MyData' => $MyData]);
    }
}
