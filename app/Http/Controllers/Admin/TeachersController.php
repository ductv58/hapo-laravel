<?php

namespace App\Http\Controllers\Admin;

use App\Model\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use Illuminate\Support\Facades\Mail; 
use App\Mail\TeacherSignup;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Teacher::select('id','name','teacher_code')->orderBy('name','DESC')->get();
        return view('teacher.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherRequest $request)
    {
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->teacher_code = $request->teacherCode;
        $teacher->birthday = $request->birthday;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->email_token = str_random(15);
        $teacher->password = bcrypt($request->password);
        $teacher->address = $request->address;
        $teacher->gender = $request->sex;
        $teacher->save();
        Mail::to($teacher)->send(new TeacherSignup($teacher));
        return redirect()->route('teachers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Teacher::findOrFail($id);
        return view('teacher.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Teacher::findOrFail($id);
        return view('teacher.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(TeacherRequest $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->name = $request->name;
        $teacher->teacher_code = $request->teacherCode;
        $teacher->birthday = $request->birthday;
        $teacher->email = $request->email;
        $teacher->password = bcrypt($request->password);
        $teacher->phone = $request->phone;
        $teacher->address = $request->address;
        $teacher->gender = $request->sex;
        $teacher->save();
        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        return redirect()->route('teachers.index');    
    }
}
