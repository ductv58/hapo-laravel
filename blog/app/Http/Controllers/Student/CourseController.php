<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Model\Course;
use App\Model\Teacher;
use App\Model\Subject;
use App\Model\Student;

class CourseController extends Controller
{
    public function getRegister () 
    {
    	$data = Course::with('teacher','subject')->orderBy('course_code','DESC')->get();
        return view('student_user.add_course',compact('data'));
    }

    public function postRegister (Request $request)
    {
    	$student = Auth::guard('student')->user();
        $courses = $student->courses;
        foreach ($courses as $course) {
            if($course->id == $request->course){
                return redirect()->back()->withErrors(['false'=>'this course registered']);
            }
        }
    	$student->courses()->attach($request->course);
    	return redirect()->route('student.course.getList');
    }

    public function show ($id)
    {
    	$courses = Course::where('id',$id)->with(['teacher','subject'])->get();
        return view('student_user.show_course',['courses' => $courses]);
    }

    public function getList () 
    {
    	$student = Auth::guard('student')->user();
    	$courses = $student->courses;
         return view('student_user.list_course',['courses' => $courses]);
    }

    public function delete ($id) 
    {
    	$student = Auth::guard('student')->user();

    	$student->courses()->detach($id);
    	return redirect()->route('student.course.getList');
    }
}
