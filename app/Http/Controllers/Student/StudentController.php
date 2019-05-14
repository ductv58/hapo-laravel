<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Model\Student;

class StudentController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/home';
    public function __construct()
    {
    	$this->middleware('student')->except(['getLogin', 'postLogin','activate']);
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
        $remember = $request->get('remember');
        if (Auth::guard('student')->attempt(['email' => $email, 'password' => $password, 'activate' => 1], $remember)) {	
            return redirect()->route('student.index');
        } 
        return redirect()->back()->withErrors(['false'=>'Username or Password is incorrect']);
    }
     public function logout(Request $request)
    {
        Auth::guard('student')->logout();
        $request->session()->invalidate();
        return redirect()->route('student.get_login');
    }

    public function activate ($token) {
        $student = Student::where('email_token',$token)->first();
        $student->activate = 1;
        $student->save();
        return redirect()->route('student.get_login');
    }
}

