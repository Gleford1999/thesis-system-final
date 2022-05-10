<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentTorDetails extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'address',
        'admission_date',
        'credentials',
        'elementary',
        'elem_year',
        'highschool',
        'hs_year',
        'degree',
    ];

    public function ToR(){
        return $this->hasMany(ToR::class, 'student_id', 'id');
    }
}
