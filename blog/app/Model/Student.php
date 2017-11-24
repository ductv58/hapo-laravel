<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $table = 'students';
    protected $fillable = [
        'id', 'name', 'student_code', 'birthday', 'school_year', 'email', 'phone', 'address','gender', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
