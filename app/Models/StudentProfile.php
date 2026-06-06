<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
    use HasFactory;
    protected $fillable = [

        'user_id',
    
        'school_level_id',
    
        'birth_date',
    
        'objective'
    
    ];
    public function user()
        {
            return $this->belongsTo(User::class);
        }

    
        
    public function level()
        {
            return $this->belongsTo(
                SchoolLevel::class,
                'school_level_id'
            );
        }
}
