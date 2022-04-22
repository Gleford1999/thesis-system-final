<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_name',
        'course_id',
        'code',
        'units'

    ];
    protected $casts = [
        'subject_name' => 'array',
        'code' => 'array',
        'units' => 'array'
    ];


    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
