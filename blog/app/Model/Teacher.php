<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
	protected $guard = "teacher";
    protected $fillable = [
        'id', 'name', 'teacher_code', 'birthday', 'email', 'phone', 'address','gender', 'password',
    ];
    protected $hidden = ['password', 'remember_token'];

    public function courses()
    {
        return $this->hasMany('App\Model\Course');
    }
}
