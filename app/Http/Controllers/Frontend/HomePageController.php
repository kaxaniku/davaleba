<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Slide;

class HomePageController extends Controller
{
    public function index()
    {
        // $Slide = Slide::find(1);
        // $Slide->title = 'test_update_T';
        // $Slide->short_text = 'test_update_S';
        // $Slide->save();

        $Slide = Slide::all();
        
        $MyData = [
            'Slide' => $Slide,
        ];
        return view('Frontend.home', ['MyData' => $MyData]);
    }
}
