<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\AddressRequest;

/**
 * Class AddressController
 *
 * @package App\Http\Controllers\Frontend
 */
class AddressController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        return view('frontend.address.show');
    }

    public function edit(AddressRequest $request)
    {
        dd($request);
    }
}
