<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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
        $user = User::find(auth()->user()->id);

        if ($request->current_password) {
            $request->validate([
                'current_password' => ['required', new ProfileRule],
                'password_1' => 'required|min:8',
                'password_2' => 'same:password_1'
            ]);

            $user->update([
                'password' => Hash::make($request->password_1),
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }else {
            $user->update($request->validated());
        }
    }
}
