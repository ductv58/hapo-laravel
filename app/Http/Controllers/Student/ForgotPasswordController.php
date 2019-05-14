<?php

namespace App\Http\Controllers\Student;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\requests\StudentForgotPasswordRequest;
use App\Http\requests\StudentResetPasswordRequest;
use Illuminate\Support\Facades\Mail; 
use App\Http\Controllers\Controller;
use App\Mail\StudentForgotPass;
use App\Model\Student;

class ForgotPasswordController extends Controller
{
    public function getReset ()
    {
    	return view('student_user.forgot_pass');
    }

    public function postReset (StudentForgotPasswordRequest $request) 
    {
    	$student = Student::where('email',$request->email)->first();
        $student->email_token = str_random(15);
        $student->save();
        Mail::to($student)->send(new StudentForgotPass($student));
        return redirect()->back();
    }

    public function getResetPass ($token)
    {
    	$student = Student::where('email_token',$token)->first();
    	if($student !== NULL){
    		return view('student_user.student_reset_pass_form',['student_id' => $student->id]);
    	}else {
    		echo "NOT FOUND";
    	}
    	
    }

    public function postResetPass (StudentResetPasswordRequest $request,$id)
    {
    	$student = Student::findOrFail($id);
    	$student->email_token = null;
    	$student->password = bcrypt($request->new_password);
    	$student->save();
        return redirect()->route('student.index');
    }
}
