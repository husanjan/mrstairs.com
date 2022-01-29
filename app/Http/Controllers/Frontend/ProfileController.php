<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ProfilePasswordRequest;
use App\Http\Requests\Frontend\ProfileRequest;
use App\Models\User;
use App\Rules\Frontend\ProfileRule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

/**
 * Class ProfileController
 *
 * @package App\Http\Controllers\Frontend
 */
class ProfileController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        $user = User::find(auth()->id());
        return view('frontend.profile.show', compact('user'));
    }

    public function edit(ProfileRequest $request)
    {
        $user = User::find(auth()->id())
                        ->update($request->validated());
        
        return back();
    }

    public function change(ProfilePasswordRequest $request)
    {
        User::find(auth()->id())
            ->update([
                'password' => Hash::make($request->password_1)
            ]);
        return back();
    }
}
