<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Validator;

class signUpRequest extends Request
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
            'user_name' => array('required', 'Regex:/^[A-Za-z0-9\-\_\.]+$/'),
            'email' => 'required|email',
            'password'=>'Required||Min:6|confirmed',
            'password_confirmation' => 'required',
            'phone_number' => 'required',
            'agree' => 'required',
            'currency'=>'required',
            'tigo_cash'=>'required',
            'mobile_money_name'=>'required|string',
            'mobile_money_number'=> 'required',
            'referrer_email' => 'required|email',
            'manager_email' => 'required|email',
        ];
     }
}
