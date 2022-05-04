<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToR extends Model
{
    use HasFactory;

    protected $table = 'tor';
    
    protected $fillable = [
        'student_id',
        'school_year',
        'sem',
        'code',
        'subject',
        'credits',
        'grades',
        'remarks',
    ];

    public function StudentTorDetails(){
        return $this->belongsTo(StudentTorDetails::class, 'student_id', 'id');
    }
}
