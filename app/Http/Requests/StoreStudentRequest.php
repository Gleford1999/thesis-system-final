<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'firstName' => ['required', 'max:255'],
            'middleName' => ['required', 'max:255'],
            'lastName' => ['required', 'max:255'],
            'student_id' => ['required', 'max:10', 'min:10', 'unique:students,student_id'],
            'course' => ['required', 'max:255'],
            'year' => ['required', 'max:255'],
            'elementary_school' => ['required', 'max:255'],
            'elementary_yg' => ['required', 'max:255'],
            'high_school' => ['required', 'max:255'],
            'highschool_yg' => ['required', 'max:255'],
            'birthday' => ['required'],
            'gender' => ['required'],
            'civil_status' => ['required'],
            'address' => ['required', 'max:500'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required'],
            'role' => ['required']
        ];
    }
}
