<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $fillable = [
        'id', 'name', 'teacher_code', 'birthday', 'email', 'phone', 'address','gender', 'password',
    ];
    protected $hidden = ['password', 'remember_token'];

    public function courses()
    {
        return $this->hasMany('App\Model\Course');
    }
}
