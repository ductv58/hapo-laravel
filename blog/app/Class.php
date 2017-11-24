<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
{
	protected $table = 'classes';
    protected $fillable = [
        'id', 'teacher_id', 'subject_id', 'credits', 'max_size', 'present', 'semester', 'class_code',
    ];
}
