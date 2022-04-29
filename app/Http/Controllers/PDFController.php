<?php

namespace App\Http\Controllers;


use App\Models\Requests;
use App\Models\StudentTorDetails;
use App\Models\ToR;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class PDFController extends Controller
{
    public function generatePDF($id){

        $details = StudentTorDetails::find($id);
        $tor = ToR::all()->where('student_id', $id)
            ->where('sem', 1)
            ->where('school_year', '2018-2019') ;

        $pdf = PDF::loadView('pdf.torgen');
       
        return $pdf->download('torgen.pdf', $pdf)->with($details)
        ->with($tor);
       
    }
}
