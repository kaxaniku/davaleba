<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\ContactPage;

use Illuminate\Support\Facades\Mail;

use App\Mail\ContactMailer;

use App\Models\Contact;
class ContactPageController extends Controller
{

    public function index()
    {
        $ContactData = ContactPage::first();

        return view('Frontend.contact.contact')->with('data', ['ContactData' => $ContactData]);
    }

    public function send(Request $request)
    {
        $ContactData = ContactPage::first();

        $MailData = [
            'username' => $request->username,

            'email' => $request->email,

            'message' => $request->message
        ];

        Mail::to('Test@Laravel-Web.com')->send(new ContactMailer($MailData));

        Contact::create($MailData);

        $data = [
            'Success' => 1,
            'ContactData' => $ContactData
        ];
  
        return view('Frontend.contact.contact')->with('data', $data);
    }
}
