<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Student;

class CourseController extends Controller
{
	public function show ($id) 
	{
		$courses = Course::where('id',$id)->with(['teacher','subject'])->get();
        $course_students = course::findOrFail($id);
        $students = $course_students->students;
        return view('teacher_user.show_course',['courses' => $courses, 'students' => $students]);
	}

    public function getRegister ()
    {
    	$data = Course::where('teacher_id',NULL)->with('teacher','subject')->orderBy('course_code','DESC')->get();
        return view('teacher_user.add_course',compact('data'));
    }

    public function postRegister (TeacherAddCourseRequest $request)
    {
    	$id = Auth::guard('teacher')->user()->id;
    	$course = Course::findOrFail($request->course);
    	$course->teacher_id = $id;
    	$course->save();
        return redirect()->route('teacher.course.get_list');
    }

    public function getList () 
    {
    	$id = Auth::guard('teacher')->user()->id;
    	$data = Course::where('teacher_id',$id)->with('teacher','subject')->orderBy('course_code','DESC')->get();
        return view('teacher_user.list_course',compact('data'));
    }

    public function delete ($id) 
    {
    	$course = Course::findOrFail($id);
    	$course->teacher_id = null;
    	$course->save();
        return redirect()->route('teacher.course.get_list');
    }

    public function getAddPoint ($id)
    {
        
        $courses = Course::where('id',$id)->with(['teacher','subject'])->get();
        $course_students = course::findOrFail($id);
        $students = $course_students->students;
        return view('teacher_user.add_point',['courses' => $courses, 'students' => $students,'id' => $id]);
    }

    public function postAddPoint (Request $request,$id)
    {
        $course = Course::findOrFail($id);
        $request_keys = array_keys($request->toArray());
        for($index=1;$index<count($request->toArray());$index++){
            $student = Student::where('student_code',$request_keys[$index])->firstOrFail();
            $course->students()->detach($student->id);
            $course->students()->attach($student->id, ['point' => $request->{$student->student_code}]);
        }
        return redirect()->route('teacher.course.get_list');
    }
}
