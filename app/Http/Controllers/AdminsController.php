<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Models\Course;
use App\Models\Grades;
use App\Models\Subject;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class AdminsController extends Controller
{

    public function create(){
        return view('admins.addcs');
    }

    public function view(){
        return view('admins.about');
    }

    public function add(){
        return view('admins.grades');
    }

    public function addGrades(Request $request){
        try {
          Grades::create([
                'grades' => $request->grades,
                'remarks' => $request->remarks
            ]);
          return redirect()->back();
        } catch ( Exception $exception ) {
            return $exception->getMessage();
        }
    }

    public function storeCS(StoreAdminRequest $request) {
        try {

            $course = Course::create($request->validated());
            
            foreach ( $request->code as $index => $code ) {
                Subject::create([
                    'course_id' => $course->id,
                    'code' => $code,
                    'subject_name' => $request->subject_name[$index],
                    'units' => $request->units[$index],
                ]);    
            }



        } catch (\Throwable $th) {
            //
        }
       
        return redirect()->route('admins.dashboard');
     }

     public function profile() {
        $user = User::find(auth()->user()->id);
        $employee = $user->load('Employee');

        return view('admins.profile', [
            'user' => $user,
            'employee' => $employee
        ]);
     }
}
