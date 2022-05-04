<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminRequest extends FormRequest
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
            'course_name' => ['required'],
            'school_year' => ['required'],
            'sem' => ['required'],
            'code' => ['required'],
            'subject_name' => ['required'],
            'units' => ['required'],
        ];
    }
}
