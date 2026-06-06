<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherProfile extends Model
{
    use HasFactory;
    protected $fillable = [

        'user_id',
        'bio',
        'hourly_rate',
        'experience_years',
        'qualification',
        'is_verified'
    
    ];
    public function user()
{
    return $this->belongsTo(User::class);
}

public function subjects()
{
    return $this->belongsToMany(
        Subject::class,
        'teacher_subject',
        'teacher_id',
        'subject_id'
    )->withPivot('price');
}
public function teacherProfile()
{
    return $this->hasOne(
        TeacherProfile::class
    );
}

}
