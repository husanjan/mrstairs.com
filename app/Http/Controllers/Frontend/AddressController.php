<?php

namespace App\Http\Controllers\Frontend;

use App\Models\UserAddress;
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
    public function index()
    {
        return view('frontend.address.index');
    }

    /**
     * @param $type
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($type)
    {
        if (!in_array($type, UserAddress::ADDRESS_TYPES)) {
            abort(400, 'Invalid address type');
        }

        $userId = auth()->id();
        $userAddress = UserAddress::firstOrNew([
            'user_id' => $userId,
            'address_type' => $type,
        ]);

        return view('frontend.address.show', compact('userAddress'));
    }

    /**
     * @param \App\Http\Requests\Frontend\AddressRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit(AddressRequest $request)
    {
        $userId = auth()->id();
        $userAddress = UserAddress::firstOrNew([
            'user_id' => $userId,
            'address_type' => $request->post('address_type'),
        ]);
        $userAddress->fill($request->validated());

        if ($userAddress->save()) {
            notify()->success("{$userAddress->address_type} address was successfully saved", position: 'bottomRight');
        } else {
            notify()->error("{$userAddress->address_type} address was not saved", position: 'bottomRight');
        }

        return back();
    }
}
