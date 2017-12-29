<?php

namespace App\Http\Controllers\Student;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use App\Http\requests\ResetPasswordRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;

class StudentResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/student/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('student')->except(['getReset','postReset']);
    }

    protected function guard()
    {
        return Auth::guard('student');
    }

    public function broker()
    {
        return Password::broker('students');
    }

    public function getReset ()
    {
    	return view('student_user.reset_pass');
    }

    public function postReset (ResetPasswordRequest $request)
    {
    	$student = Auth::guard('student')->user();
    	if (Hash::check($request->old_password, $student->password)) {
		    $student->password = bcrypt($request->new_password);
		    $student->save();
		    return redirect()->route('student.index');
		}
    	else return redirect()->back()->withErrors(['false'=>'Password fail']);
    }
}
