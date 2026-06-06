<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [

        'name',
        'slug',
        'description',
        'is_active'
    
    ];
    public function teachers()
    {
        return $this->belongsToMany(
            TeacherProfile::class,
            'teacher_subject',
            'subject_id',
            'teacher_id'
        )->withPivot('price');
    }
}
