<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'student_id' => ['required'],
            'course' => ['required'],
            'gender' => ['required'],
            'civil_status' => ['required'],
            'address' => ['required'],
            'email' => ['required', 'email'],
        ];
    }
}
