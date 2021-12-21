<?php

namespace App\Http\Controllers\Api;

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
        return [
            'success' => 1,
            'message' => 'Welcome to our API.',
        ];
    }
}
