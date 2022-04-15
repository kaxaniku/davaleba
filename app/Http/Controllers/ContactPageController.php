<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function index()
    {
        $MyData = [
            'title' => 'ContactPage',
            'short_text' => 'welcome to ContactPage'
        ];
        return view('contact.contact', ['MyData' => $MyData]);
    }
}
