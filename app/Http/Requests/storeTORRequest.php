<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeTORRequest extends FormRequest
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
            'name' => ['required'],
            'address' => ['required'],
            'admission_date' => ['required'],
            'credentials' => ['required'],
            'elementary' => ['required'],
            'elem-year' => ['required'],
            'highschool' => ['required'],
            'hs-year' => ['required'],
            'degree' => ['required'],
            'major' => ['required'],
            'school-year' => ['required'],
            'sem1' => ['required'],
            'code1' => ['required'],
            'subject1' => ['required'],
            'credits1' => ['required'],
            'grades1' => ['required'],
            'remarks1' => ['required'],
            'sem2' => ['required'],
            'code2' => ['required'],
            'subject2' => ['required'],
            'credits2' => ['required'],
            'grades2' => ['required'],
            'remarks2' => ['required'],
            
        ];
    }
}
