<?php

namespace App\Http\Controllers;


use App\Models\Requests;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class PDFController extends Controller
{
    public function generatePDF(){
        $pdf = PDF::loadView('pdf.torgen');
       
        return $pdf->download('torgen.pdf', $pdf);
       
    }
}
