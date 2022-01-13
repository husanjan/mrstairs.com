<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\ContactMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Frontend\ContactRequest;

/**
 * Class ContactController
 *
 * @package App\Http\Controllers\Frontend
 */
class ContactController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('frontend.contact.index');
    }

    /**
     * @param \App\Http\Requests\Frontend\ContactRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendEmail(ContactRequest $request)
    {
        Mail::to(config('company.contactEmail'))->send(new ContactMail);

        return back();
    }
}
