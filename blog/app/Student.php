<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $table = 'students';
    protected $fillable = [
        'id', 'name', 'student_code', 'birthday', 'school_year', 'email', 'phone', 'address','sex',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
