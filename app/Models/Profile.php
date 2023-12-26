<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'email',
        'phone',
    ];

    public function student()
    {
        // return $this->belongsTo('Model', 'foreign_key', 'owner_key');
        return $this->belongsTo('App\Models\Student', 'student_id', 'id');
    }
}
