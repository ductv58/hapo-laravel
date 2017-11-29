<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/home';
    public function __construct()
    {
    	$this->middleware('teacher')->except(['getLogin', 'postLogin']);
    }
    
    public function getLogin()
    {
        return view('teacher_user.login');
    }
    public function index()
    {
        $teacher = Auth::guard('teacher')->user();
        return view('teacher_user.index',['teacher'=>$teacher->id]);
    }
    public function postLogin(Request $request)
    {
    	$email = $request->email;
        $password = $request->password;
        $remember = $request->has('remember_token') ? true : false;
        if (Auth::guard('teacher')->attempt(['email' => $email, 'password' => $password], $remember)) {	
            return redirect()->route('teacher.index');
        } 
        return redirect()->back()->withErrors(['false'=>'Username or Password is incorrect']);
    }
     public function logout()
    {
        Auth::guard('teacher')->logout();
        return redirect()->route('teacher.getLogin');
    }
}
