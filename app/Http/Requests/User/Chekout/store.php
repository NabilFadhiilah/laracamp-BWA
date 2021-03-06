<?php

namespace App\Http\Requests\User\Chekout;

use Illuminate\Foundation\Http\FormRequest;
use Auth;


class store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $expiredValidation = date('Y-m', time());
        return [
            //
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . Auth::id() . ',id',
            'occupation' => 'required|string',
            'card_number' => 'required|numeric|digits_between:8,16',
            'expired' => 'required|date|date_format:Y-m|after_or_equal:' . $expiredValidation . '',
            'cvc' => 'required|numeric|digits:3',
        ];
    }
}
