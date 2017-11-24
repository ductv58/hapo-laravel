<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $table = 'points';
    protected $fillable = [
        'id', 'student_id', 'course_id', 'point',
    ];

    public function course()
    {
        return $this->belongsTo('App\Model\Course','course_id');
    }

    public function student()
    {
        return $this->belongsTo('App\Model\Student','student_id');
    }
}
