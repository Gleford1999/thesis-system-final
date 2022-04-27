<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'course',
        'major',
        'year',
        'elementary_school',
        'elementary_yg',
        'high_school',
        'highschool_yg'
    ];

    public function user() {
        return $this->hasMany(User::class);
    }
}
