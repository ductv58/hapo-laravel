<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $table = 'courses';
    protected $fillable = [
        'id', 'teacher_id', 'subject_id', 'credits', 'max_size', 'semester', 'course_code',
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class,'points')->withPivot('point');
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
