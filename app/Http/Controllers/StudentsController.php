<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginRequest;
use App\Models\Requests;
use App\Models\Student;
use App\Models\User;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentsController extends Controller
{

    public function create(){
        return view('students.login');
    }

    public function authenticate(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('students/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ])->onlyInput('email');
    }




    public function destroy(){
        auth()->logout();

        return redirect('/');
    }


    //------Dashboard Control----------//

    public function studentDashboard(){
        return view('students.dashboard');
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
            'purpose'=>request('purpose'),
            'transaction_mode'=>request('mode'),
            'receipt'=>request('receipt')
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
}
