<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Model\Teacher;

class TeacherController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/home';
    public function __construct()
    {
    	$this->middleware('teacher')->except(['getLogin', 'postLogin','activate']);
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
        $remember = $request->get('remember');
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

    public function activate ($token) {
        $teacher = Teacher::where('email_token',$token)->first();
        $teacher->activate = 1;
        $teacher->save();
        return redirect()->route('teacher.getLogin');
    }
}
