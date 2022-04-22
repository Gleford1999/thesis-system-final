<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'year',
        'sem'
    ];

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}