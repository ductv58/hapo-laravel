<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\requests\StudentsRequest;
use App\Student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Student::select('id','name','mssv')->orderBy('id','DESC')->get()->toArray();
        return view('student/list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentsRequest $request)
    {
        $student = new Student;
        $student->name = $request->TXTname;
        $student->mssv = $request->TXTmssv;
        $student->school_year = $request->TXTschoolyear;
        $student->class = $request->TXTclass;
        $student->birthday = $request->TXTbirthday;
        $student->email = $request->TXTemail;
        $student->phone = $request->TXTphone;
        $student->address = $request->TXTaddress;
        $student->farther_name = $request->TXTfarthername;
        $student->morther_name = $request->TXTmorthername;
        $student->save();
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
        return view('student/show',['data'=>$data]);
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
        return view('student/edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->TXTname;
        $student->mssv = $request->TXTmssv;
        $student->school_year = $request->TXTschoolyear;
        $student->class = $request->TXTclass;
        $student->birthday = $request->TXTbirthday;
        $student->email = $request->TXTemail;
        $student->phone = $request->TXTphone;
        $student->address = $request->TXTaddress;
        $student->farther_name = $request->TXTfarthername;
        $student->morther_name = $request->TXTmorthername;
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
