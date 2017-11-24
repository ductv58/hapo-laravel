<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $table = 'courses';
    protected $fillable = [
        'id', 'teacher_id', 'subject_id', 'credits', 'max_size', 'present', 'semester', 'course_code',
    ];

    public function points()
    {
        return $this->hasMany('App\Model\Point');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Model\Teacher','teacher_id');
    }

    public function subject()
    {
        return $this->belongsTo('App\Model\Subject','subject_id');
    }
}
