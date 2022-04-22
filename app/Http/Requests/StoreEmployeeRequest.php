<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'firstName' => ['required'],
            'middleName' => ['required'],
            'lastName' => ['required'],
            'address' => ['required'],
            'birthday' => ['required'],
            'gender' => ['required'],
            'civil_status' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            'role' => ['required']
        ];
    }
}
