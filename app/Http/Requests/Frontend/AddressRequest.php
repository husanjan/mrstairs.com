<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'street_address' => 'required|string',
            'street_address_2' => 'nullable|string',
            'company_name' => 'nullable|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'city' => 'required|string',
            'post_code' => 'required',
            'email' => 'required|email',
            'phone' => 'string'
        ];
    }
}
