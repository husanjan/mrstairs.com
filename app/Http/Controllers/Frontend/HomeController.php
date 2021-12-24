<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class HomeController
 *
 * @package App\Http\Controllers\Frontend
 */
class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }

    public function markup()
    {
        return view('frontend.home.markup');
    }
}
