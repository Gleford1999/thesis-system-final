<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\storeTORRequest;
use App\Models\Course;
use App\Models\Requests;
use App\Models\StudentTorDetails;
use App\Models\Subject;
use Exception;
use Illuminate\Http\Request;

class StaffsController extends Controller
{
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



     public function process($id) {
        
        $requests = Requests::find($id);
        $subjects = Subject::all();
        return view ('/staffs/tor', [
            'requests' => $requests,
            'subjects' => $subjects
        ]);
     }

     public function saveProcess(storeTORRequest $request){

         return $request->validated();
        //  try {
        //     $details = StudentTorDetails::create($request->validated());
        //  } catch (Exception $exception) {
             
        //  }
    }
}