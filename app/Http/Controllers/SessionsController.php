<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\StoreStudentRequest;
use App\Models\Course;
use App\Models\Requests;
use App\Models\Subject;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class SessionsController extends Controller
{

    public function create(){
        return view('sessions.login');
    }

    public function staffDashboard(){
        return view ('staffs.dashboard');
    }

    public function adminDashboard(){
        // $course = Course::find(1);
        // return $course->load('subjects');
        // return Subject::where('course_id', 1)->get();
        return view('admins.dashboard');
    }

    public function store(Request $request){
        
        $credentials = $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)){

            $request->session()->regenerate();
            switch(auth()->user()->role) {
                case 2:
                    return redirect()->route('staffs.dashboard');
                case 3:
                    return redirect()->route('admins.dashboard');
            }

            throw ValidationException::withMessages([
                'email' => 'Provided credential not found.'
            ]);
            // return back()
            //     ->withInput()
            //     ->withErrors([
            //         ,
            //         'password' => 'Incorrect password'
            //     ]);
        }
    }

    public function destroy(){
        auth()->logout();

        return redirect('/');
    }
}
