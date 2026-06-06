<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [

        'student_id',
        'teacher_id',
        'subject_id',

        'course_date',
        'course_time',

        'duration',

        'price',

        'status',

        'notes'

    ];

    public function student()
    {
        return $this->belongsTo(
            User::class,
            'student_id'
        );
    }

    public function teacher()
    {
        return $this->belongsTo(
            User::class,
            'teacher_id'
        );
    }

    public function subject()
    {
        return $this->belongsTo(
            Subject::class
        );
    }
}