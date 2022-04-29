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
            'elem_year' => ['required'],
            'highschool' => ['required'],
            'hs_year' => ['required'],
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
            'sem3' => ['required'],
            'code3' => ['required'],
            'subject3' => ['required'],
            'credits3' => ['required'],
            'grades3' => ['required'],
            'remarks3' => ['required'],
            'sem4' => ['required'],
            'code4' => ['required'],
            'subject4' => ['required'],
            'credits4' => ['required'],
            'grades4' => ['required'],
            'remarks4' => ['required'],
            'sem5' => ['required'],
            'code5' => ['required'],
            'subject5' => ['required'],
            'credits5' => ['required'],
            'grades5' => ['required'],
            'remarks5' => ['required'],
            'sem6' => ['required'],
            'code6' => ['required'],
            'subject6' => ['required'],
            'credits6' => ['required'],
            'grades6' => ['required'],
            'remarks6' => ['required'],
            'sem7' => ['required'],
            'code7' => ['required'],
            'subject7' => ['required'],
            'credits7' => ['required'],
            'grades7' => ['required'],
            'remarks7' => ['required'],
            'sem8' => ['required'],
            'code8' => ['required'],
            'subject8' => ['required'],
            'credits8' => ['required'],
            'grades8' => ['required'],
            'remarks8' => ['required'],
            'sem9' => ['required'],
            'code9' => ['required'],
            'subject9' => ['required'],
            'credits9' => ['required'],
            'grades9' => ['required'],
            'remarks9' => ['required'],
        ];
    }
}
