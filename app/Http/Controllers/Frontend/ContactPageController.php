<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class ContactPageController extends Controller
{
    public function index()
    {
        $MyData = [
            'title' => 'ContactPage',
            'short_text' => 'welcome to ContactPage'
        ];
        return view('Frontend.contact.contact', ['MyData' => $MyData]);
    }
}
