<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'student_code' => 'required',
            'email' => 'required',
        ];
    }
    public function messages (){
        return [
            'student_code.required' => 'The student_code field is required.',
            'email.required' => 'The email field is required.',
        ];
    }
}
