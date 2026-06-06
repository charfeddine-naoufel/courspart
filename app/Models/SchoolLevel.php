<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolLevel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'sort_order'
    ];
    public function students()
{
    return $this->hasMany(StudentProfile::class);
}
}
