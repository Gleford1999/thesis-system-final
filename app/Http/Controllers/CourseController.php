<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getCourse(Request $request) {
        // return $request;
         $course = Course::where([
            'course_name' => $request->course_name,
            'sem' => $request->sem,
            'school_year' => $request->school_year
        ])->first();

        return Subject::where('course_id', $course->id)->get();
    }
}
