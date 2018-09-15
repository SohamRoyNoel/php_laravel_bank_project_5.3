<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class new_account_open_validator extends FormRequest
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

                'phone'=>'required',
                'aadhaar'=>'required',
                'pan'=>'required',
                'name'=>'required',
                'sex'=>'required',
                'address'=>'required',
                'email'=>'required'
        ];
    }
}
