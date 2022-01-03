<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class HelpController
 *
 * @package App\Http\Controllers\Frontend
 */
class HelpController extends Controller
{
    public function index()
    {
        return view('frontend.help.index');
    }

    public function faq()
    {
        return view('frontend.help.faq');
    }

    public function deliveryInformation()
    {
        return view('frontend.help.delivery-information');
    }

    public function stairsArrival()
    {
        return view('frontend.help.stairs-arrival');
    }

    public function rulesRegulations()
    {
        return view('frontend.help.rules-regulations');
    }

    public function measuringYourStairs()
    {
        return view('frontend.help.measuring-your-stairs');
    }

    public function staircaseTerminology()
    {
        return view('frontend.help.staircase-terminology');
    }

    public function fittingGuide()
    {
        return view('frontend.help.fitting-guide');
    }

    public function privacyPolicy()
    {
        return view('frontend.help.privacy-policy');
    }
}
