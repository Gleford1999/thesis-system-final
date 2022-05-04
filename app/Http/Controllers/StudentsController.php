<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Requests;
use App\Models\Student;
use App\Models\User;
use Exception;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentsController extends Controller
{

    public function create(){
        return view('students.login');
    }

    //------Dashboard Control----------//

    public function studentDashboard(){
        return view('students.dashboard');
    }

    public function profile(){
        $user = User::find(auth()->user()->id);
        $user->load('student');
        // return $user;

        return view('students.profile', [
            'user' => $user,
            'student' => $user->student,
        ]);
    }
    public function update(Request $request) {
      
        $user = User::find($request->id);
        $user->firstName = $request->firstName;
        $user->middleName = $request->middleName;
        $user->lastName = $request->lastName;
        $user->birthday = $request->birthday;
        $user->gender = $request->gender;
        $user->civil_status = $request->status;
        $user->address = $request->address;
        $user->save();

        $student = Student::find($request->id);
        $student->student_id = $request->student_id;
        $student->course = $request->course;
        $student->elementary_school = $request->elementary_school;
        $student->elementary_yg = $request->elementary_yg;
        $student->high_school = $request->high_school;
        $student->highschool_yg = $request->highschool_yg;
        $student->save();
        
        return redirect()->back();
    }
    public function request(){
        $student = Student::find(auth()->user()->student_id);

        return view('students.request')
            ->with('user', auth()->user())
            ->with('student', $student);
    }

    public function storeRequest(){

        $student = Student::find(auth()->user()->student_id);
        $id = IdGenerator::generate(['table'=>'requests', 'field'=>'transaction_code', 'length'=>'10', 'prefix'=>'TR-2022']);

        Requests::create([
            'transaction_code'=> $id,
            'student_id'=>$student->student_id,
            'firstName'=> Auth()->user()->firstName,
            'middleName'=>Auth()->user()->middleName,
            'lastName'=>Auth()->user()->lastName,
            'address'=>Auth()->user()->address,
            'course'=>$student->course,
            'elementary_school'=>$student->elementary_school,
            'elementary_yg'=>$student->elementary_yg,
            'high_school'=>$student->high_school,
            'highschool_yg'=>$student->highschool_yg,
            'purpose'=>request('purpose'),
            'transaction_mode'=>request('mode'),
            'receipt_num'=>request('receipt_num'),
            'payment_amount'=>request('payment_amount'),
            'payment_date'=>request('payment_date'),
        ]);

        return view('students.dashboard');
    }

    public function list() {
        
        $requests = Requests::where('firstName', auth()->user()->firstName)
        ->get();
        
     
        return view('students.request-list', [
         'requests' => $requests
        ]);
    }

    public function about() {
        return view('students.about');
    }
}
