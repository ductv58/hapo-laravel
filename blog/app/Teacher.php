<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $fillable = [
        'id', 'name', 'teacher_code', 'birthday', 'email', 'phone', 'address','sex',
    ];
}
