<?php

namespace App\Http\Requests\Frontend;

use App\Rules\Frontend\ProfileRule;
use Illuminate\Foundation\Http\FormRequest;

class ProfilePasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password_current' => ['required', new ProfileRule],
            'password_1' => 'required|min:8',
            'password_2' => 'same:password_1'
        ];
    }
}
