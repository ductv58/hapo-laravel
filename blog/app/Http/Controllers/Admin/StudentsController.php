<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; 
use App\Http\requests\StudentRequest;
use App\Http\Controllers\Controller;
use App\Model\Student;
use App\Mail\student_signup;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Student::select('id','name','student_code')->orderBy('name','DESC')->get();
        return view('student.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->student_code = $request->studentCode;
        $student->school_year = $request->schoolYear;
        $student->birthday = $request->birthday;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->password = bcrypt($request->password);
        $student->address = $request->address;
        $student->gender = $request->sex;
        $student->save();
        Mail::to($student)->send(new student_signup($student));
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Student::findOrFail($id);
        return view('student.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Student::findOrFail($id);
        return view('student.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->student_code = $request->studentCode;
        $student->school_year = $request->schoolYear;
        $student->birthday = $request->birthday;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->password = bcrypt($request->password);
        $student->address = $request->address;
        $student->gender = $request->sex;
        $student->save();
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $student = Student::find($id);
        $student->delete();
        return redirect()->route('students.index');
    }
}
