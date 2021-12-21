<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

/**
 * Class HomeController
 *
 * @package App\Http\Controllers\Api
 */
class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home.index');
    }
}
