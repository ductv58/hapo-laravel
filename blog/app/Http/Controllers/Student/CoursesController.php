<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Student;

class CourseController extends Controller
{
    public function getRegister () 
    {
    	$data = Course::with('teacher','subject')->orderBy('course_code','DESC')->get();
        return view('student_user.add_course',compact('data'));
    }

    public function postRegister (StudentAddCourseRequest $request)
    {
    	$student = Auth::guard('student')->user();
        $courses = $student->courses;
        foreach ($courses as $course) {
            if($course->id == $request->course){
                return redirect()->back()->withErrors(['false'=>'this course registered']);
            }
        }
    	$student->courses()->attach($request->course);
    	return redirect()->route('student.course.get_list');
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
    	return redirect()->route('student.course.get_list');
    }
}
