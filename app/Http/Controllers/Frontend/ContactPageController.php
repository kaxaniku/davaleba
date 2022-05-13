<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\ContactPage;

class ContactPageController extends Controller
{
    public function index()
    {
        $ContactData = ContactPage::first();

        return view('Frontend.contact.contact')->with('data', ['ContactData' => $ContactData]);
    }
}
