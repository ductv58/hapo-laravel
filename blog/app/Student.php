<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $table = 'students';
    protected $fillable = [
        'id', 'name', 'mssv', 'birthday', 'school_year', 'class', 'email', 'phone', 'address','farther_name', 'morther_name',
    ];
}
