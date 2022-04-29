<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Models\Student;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create(){
        return view('students.register');
    }

    public function store(StoreStudentRequest $request){
     try {
         $students = Student::create($request->validated());
         $user = User::create(array_merge($request->validated(), ['password' => Hash::make($request->password), 'student_id' => $students->id]));
         
     } catch (Exception $exception) {
        return $exception->getMessage();
     }

     session()->flash('success', 'Account created successfully!');
        auth()->login($user);
        return view('students.dashboard');
}
    
}