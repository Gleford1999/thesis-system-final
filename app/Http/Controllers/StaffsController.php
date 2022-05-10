<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\storeTORRequest;
use App\Models\Course;
use App\Models\Employee;
use App\Models\Grades;
use App\Models\Requests;
use App\Models\Student;
use App\Models\StudentTorDetails;
use App\Models\Subject;
use App\Models\ToR;
use App\Models\User;
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
       
        return view('staffs.approveRequest', ['requests' => $requests]);
        
        // return redirect()->back();
     }

     public function approveRequest(Request $request){
        // return $request;
        $stat = Requests::find($request->id);
        // return $stat;
        $stat->status = $request->status;
        $stat->schedule = $request->schedule;
        $stat->save();
        return redirect()->route('staffs.requests');
     }

     public function approvedList() {
        $requests = Requests::where([
            'status' => 'approved',
            'transaction_mode' => 'normal'
        ])->get();
        return view ('staffs.approvedList', [
            'requests' => $requests
        ]);
     }

     public function approvedListRush(){
        $requests = Requests::where([
            'status' => 'approved',
            'transaction_mode' => 'rush'
        ])->get();
         return view('staffs.approvedListRush', [
             'requests' => $requests
         ]);
     }



     public function process($id) {
        $requests = Requests::find($id);
        $subjects = Subject::all();
        $grades = Grades::all();
        return view ('/staffs/tor', [
            'requests' => $requests,
            'subjects' => $subjects,
            'grades' => $grades,
            'school_years' => Course::all()->unique('school_year')->pluck('school_year')
        ]);
     }

     public function saveProcess(Request $request){
        //  return $request;
         try {

           $details =  StudentTorDetails::create([
            'name' => $request->name,
            'address' => $request->address,
            'admission_date' => $request->admission_date,
            'credentials' => $request->credentials,
            'elementary' => $request->elementary,
            'elem_year' => $request->elem_year,
            'highschool' => $request->highschool,
            'hs_year' => $request->hs_year,
            'degree' => $request->degree,
           ]);
        //    return $details;

        //First Year
           foreach ( $request->code1 as $index => $code ) {
            ToR::create([
                'student_id' => $details->id,
                'school_year' => $request->school_year1,
                'sem' => $request->sem1,
                'code' => $code,
                'subject' => $request->subject1[$index],
                'credits' => $request->credits1[$index],
                'grades' => $request->grades1[$index],
                'remarks' => $request->remarks1[$index],
            ]);    

        }
        foreach ( $request->code2 as $index => $code ) {
            ToR::create([
                'student_id' => $details->id,
                'school_year' => $request->school_year1,
                'sem' => $request->sem2,
                'code' => $code,
                'subject' => $request->subject2[$index],
                'credits' => $request->credits2[$index],
                'grades' => $request->grades2[$index],
                'remarks' => $request->remarks2[$index],
            ]);    
        }
        // //2nd Year
        // foreach ( $request->code3 as $index => $code ) {
        //     ToR::create([
        //         'student_id' => $details->id,
        //         'school_year' => $request->school_year2,
        //         'sem' => $request->sem3,
        //         'code' => $code,
        //         'subject' => $request->subject3[$index],
        //         'credits' => $request->credits3[$index],
        //         'grades' => $request->grades3[$index],
        //         'remarks' => $request->remarks3[$index],
        //     ]);    
        // }
        // foreach ( $request->code4 as $index => $code ) {
        //     ToR::create([
        //         'student_id' => $details->id,
        //         'school_year' => $request->school_year2,
        //         'sem' => $request->sem4,
        //         'code' => $code,
        //         'subject' => $request->subject4[$index],
        //         'credits' => $request->credits4[$index],
        //         'grades' => $request->grades4[$index],
        //         'remarks' => $request->remarks4[$index],
        //     ]);    
        // }
        // //Third Year
        // foreach ( $request->code5 as $index => $code ) {
        //     ToR::create([
        //         'student_id' => $details->id,
        //         'school_year' => $request->school_year3,
        //         'sem' => $request->sem5,
        //         'code' => $code,
        //         'subject' => $request->subject5[$index],
        //         'credits' => $request->credits5[$index],
        //         'grades' => $request->grades5[$index],
        //         'remarks' => $request->remarks5[$index],
        //     ]);    
        // }
        //  foreach ( $request->code6 as $index => $code ) {
        //     ToR::create([
        //         'student_id' => $details->id,
        //         'school_year' => $request->school_year3,
        //         'sem' => $request->sem6,
        //         'code' => $code,
        //         'subject' => $request->subject6[$index],
        //         'credits' => $request->credits6[$index],
        //         'grades' => $request->grades6[$index],
        //         'remarks' => $request->remarks6[$index],
        //     ]);    
        // }
        // foreach ( $request->code7 as $index => $code ) {
        //     ToR::create([
        //         'student_id' => $details->id,
        //         'school_year' => $request->school_year3,
        //         'sem' => $request->sem7,
        //         'code' => $code,
        //         'subject' => $request->subject7[$index],
        //         'credits' => $request->credits7[$index],
        //         'grades' => $request->grades7[$index],
        //         'remarks' => $request->remarks7[$index],
        //     ]);    
        // }
        // // Fourth Year
        // foreach ( $request->code8 as $index => $code ) {
        //     ToR::create([
        //         'student_id' => $details->id,
        //         'school_year' => $request->school_year4,
        //         'sem' => $request->sem8,
        //         'code' => $code,
        //         'subject' => $request->subject8[$index],
        //         'credits' => $request->credits8[$index],
        //         'grades' => $request->grades8[$index],
        //         'remarks' => $request->remarks8[$index],
        //     ]);    
        // }
        // foreach ( $request->code9 as $index => $code ) {
        //     ToR::create([
        //         'student_id' => $details->id,
        //         'school_year' => $request->school_year4,
        //         'sem' => $request->sem9,
        //         'code' => $code,
        //         'subject' => $request->subject9[$index],
        //         'credits' => $request->credits9[$index],
        //         'grades' => $request->grades9[$index],
        //         'remarks' => $request->remarks9[$index],
        //     ]);    
        // }

       
        // change number code, sem, credits, subjects, grades and remarks

         } catch (Exception $exception) {
             return $exception->getMessage();
         }

         return redirect()->route('staffs.records');
    }
    public function records(){
        
        $details = StudentTorDetails::all();
    
        
        return view('staffs.records', [
        'details' => $details,
    ]);
    }

    public function show($id){

        $details = StudentTorDetails::find($id);
       

        $tor = ToR::where([
            'student_id' => $id,
            'sem' => 1,
            'school_year' => '2018-2019'
        ])->get();

        $tor1 = ToR::all()->where('student_id', $id)
            ->where('sem', 2)
            ->where('school_year', '2018-2019');

        $tor2 = ToR::all()->where('student_id', $id)
            ->where('sem', 1)
            ->where('school_year', '2019-2020');

        $tor3 = ToR::all()->where('student_id', $id)
            ->where('sem', 2)
            ->where('school_year', '2019-2020');

        $tor4 = ToR::all()->where('student_id', $id)
            ->where('sem', 1)
            ->where('school_year', '2020-2021');
        $tor5 = ToR::all()->where('student_id', $id)
            ->where('sem', 2)
            ->where('school_year', '2020-2021');
        $tor6 = ToR::all()->where('student_id', $id)
            ->where('sem', 'Summer')
            ->where('school_year', '2020-2021');
        $tor7 = ToR::all()->where('student_id', $id)
            ->where('sem', 1)
            ->where('school_year', '2021-2022');
        $tor8 = ToR::all()->where('student_id', $id)
            ->where('sem', 2)
            ->where('school_year', '2021-2022');
        // return $tor1;
        return view('pdf.torgen', [
            'details' => $details,
            'tor' => $tor,
            'tor1' => $tor1,
            'tor2' => $tor2,
            'tor3' => $tor3,
            'tor4' => $tor4,
            'tor5' => $tor5,
            'tor6' => $tor6,
            'tor7' => $tor7,
            'tor8' => $tor8,
        ]);
    }

    public function profile(){

        $user = User::find(auth()->user()->id);
        $employee = $user->load('Employee');
        // return $employee;
        return view('staffs.profile', [
            'user' => $user,
            'employee' => $employee
        ]);
    }

    public function updateProfile(Request $request){
        // return $request;
        $info = User::find($request->id);
        $info->firstName = $request->firstName;
        $info->middleName = $request->middleName;
        $info->lastName = $request->lastName;
        $info->birthday = $request->birthday;
        $info->address = $request->address;
        $info->save();
        return redirect()->back();
    }

    public function about (){
        return view('staffs.about');
    }

    public function editTor($id){
        $torDetails = StudentTorDetails::all();
        $torDetails->load('ToR');
    //    return $torDetails;
        return view('staffs.editTor', [
            'torDetails' => $torDetails
        ]);
    }

    // public function findSubject(Request $request){
    //     $s = Subject::select('subject_name')->where('id', $request->id)->first();

    //     return response()->json($s);
    // }

    public function findRemark(Request $request){

        $remark = Grades::select('remarks')->where('id', $request->id)->first();

        return response()->json($remark);
    }
}