<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\AddressRequest;
use App\Models\UserAddress;

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
        $userAddress = UserAddress::find(auth()->id());
        return view('frontend.address.show', compact('userAddress'));
    }

    public function edit(AddressRequest $request)
    {
        $userAddress = UserAddress::find(auth()->id());
        
        if ($userAddress) {
            $userAddress->update($request->validated());
        }else {
            UserAddress::create(['user_id' => auth()->id()] + $request->validated());
        }
        notify()->success('Updated success', position: 'bottomRight');
        return back();
    }
}
