<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
	protected $guard = "student";
    protected $fillable = [
        'id', 'name', 'student_code', 'birthday', 'school_year', 'email', 'phone', 'address','gender', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class,'points')->withPivot('point');
    }
}
