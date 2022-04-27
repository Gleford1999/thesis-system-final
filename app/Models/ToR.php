<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToR extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'school-year'.
        'sem1',
        'code1',
        'subject1',
        'credits1',
        'grades1',
        'remarks1',
        'sem2',
        'code2',
        'subject2',
        'credits2',
        'grades2',
        'remarks2',

    ];

    public function StudentTorDetails(){
        return $this->belongsTo(StudentTorDetails::class);
    }
}
