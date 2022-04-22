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
        return view('admins.dashboard');
    }

    public function store(Request $request){
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)){

            $request->session()->regenerate();
            switch(auth()->user()->role) {
                case 2:
                    return view('staffs.dashboard');
                case 3:
                    return view('admins.dashboard');
            }
            return back()
                ->withInput()
                ->withErrors([
                    'email' => 'Incorrect email',
                    'password' => 'Incorrect password'
                ]);
        }
    }

     //----Staffs Dashboard----//

     public function requestList() {
        $requests = Requests::where('status', 'pending')->get();
        return view ('staffs.requests', [
            'requests' => $requests
        ]);
     }

     public function approve($id) {
        $requests = Requests::find($id);
        $requests->status='approved';
        $requests->save();
        return redirect()->back();
     }

     public function approvedList() {
        $requests = Requests::where('status', 'approved')->get();
        return view ('staffs.approvedList', [
            'requests' => $requests
        ]);
     }

     public function storeCS(StoreAdminRequest $request) {
        try {
            $course = Course::create($request->validated());

             Subject::create(array_merge($request->validated(), ['course_id' => $course->id]));


        } catch (\Throwable $th) {
    
        }
       
        return redirect()->route('admins.dashboard');
     }



    // public function destroy(){
    //     auth()->logout();

    //     return redirect('/students/login');
    // }
}
