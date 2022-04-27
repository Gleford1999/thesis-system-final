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
        'elem-year',
        'highschool',
        'hs-year',
        'degree',
        'major', 
    ];

    public function ToR(){
        return $this->hasMany(ToR::class);
    }
}
