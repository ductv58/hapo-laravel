<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/home';
    public function __construct()
    {
    	$this->middleware('student')->except(['getLogin', 'postLogin']);
    }
    
    public function getLogin()
    {
        return view('student_user.login');
    }
    public function index()
    {
        $student = Auth::guard('student')->user();
        return view('student_user.index',['student'=>$student->id]);
    }
    public function postLogin(Request $request)
    {
    	$email = $request->email;
        $password = $request->password;
        $remember = $request->has('remember_token') ? true : false;
        if (Auth::guard('student')->attempt(['email' => $email, 'password' => $password], $remember)) {	
            return redirect()->route('student.index');
        } 
        return redirect()->back()->withErrors(['false'=>'Username or Password is incorrect']);
    }
     public function logout()
    {
        Auth::guard('student')->logout();
        return redirect()->route('student.getLogin');
    }
}

