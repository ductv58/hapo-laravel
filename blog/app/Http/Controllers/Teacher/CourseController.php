<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Model\Course;
use App\Model\Teacher;
use App\Model\Subject;

class CourseController extends Controller
{
	public function show ($id) 
	{
		$courses = Course::where('id',$id)->with(['teacher','subject'])->get();
        return view('teacher_user.show_course',compact('courses'));
	}

    public function getRegister ()
    {
    	$data = Course::where('teacher_id',NULL)->with('teacher','subject')->orderBy('id','DESC')->get();
        return view('teacher_user.add_course',compact('data'));
    }

    public function postRegister (Request $request)
    {
    	$id = Auth::guard('teacher')->user()->id;
    	$course = Course::findOrFail($request->course);
    	$course->teacher_id = $id;
    	$course->save();
        return redirect()->route('teacher.course.getList');
    }

    public function getList () 
    {
    	$id = Auth::guard('teacher')->user()->id;
    	$data = Course::where('teacher_id',$id)->with('teacher','subject')->orderBy('id','DESC')->get();
        return view('teacher_user.list_course',compact('data'));
    }

    public function delete ($id) 
    {
    	$course = Course::findOrFail($id);
    	$course->teacher_id = null;
    	$course->save();
        return redirect()->route('teacher.course.getList');
    }
}
