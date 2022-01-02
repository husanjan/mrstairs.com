<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.home.contact');
    }

    public function sendEmail(ContactRequest $request)
    {
        Mail::to('contact@mrstairs.com')->send(new ContactMail);
        return back();
    }
}
