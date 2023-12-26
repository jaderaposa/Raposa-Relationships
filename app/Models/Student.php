<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
    ];

    public function profile()
    {
        return $this->hasOne('App\Models\Profile');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'student_id')->orderBy('id', 'desc');
    }

    public function subjects()
    {
        return $this->belongsToMany('App\Models\Subject');
    }
}
