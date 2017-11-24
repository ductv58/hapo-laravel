<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\requests\CourseRequest;
use App\Model\Course;
use App\Model\Teacher;
use App\Model\Subject;

class CourseController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Course::with('teacher','subject')->orderBy('id','DESC')->get();
        return view('course.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $subject = Subject::all();
        return view('course.add',compact('subject'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {
        $course = new Course();
        $course->subject_id = $request->subject;
        $course->credits = $request->credits;
        $course->max_size = $request->maxSize;
        $course->present = $request->present;
        $course->semester = $request->semester;
        $course->course_code = $request->courseCode;
        $course->save();
        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Class  $class
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courses = Course::with(['teacher','subject'])->get();
        return view('course.show',compact('courses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Class  $class
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Subject::all();
        $course = Course::findOrFail($id);
        return view('course.edit',['course'=>$course,'subject'=>$subject]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Class  $class
     * @return \Illuminate\Http\Response
     */
    public function update(ClassRequest $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->subject_id = $request->subject;
        $course->credits = $request->credits;
        $course->max_size = $request->maxSize;
        $course->present = $request->present;
        $course->semester = $request->semester;
        $course->course_code = $request->courseCode;
        $course->save();
        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Class  $class
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Course::find($id);
        $student->delete();
        return redirect()->route('course.index');
    }
}
