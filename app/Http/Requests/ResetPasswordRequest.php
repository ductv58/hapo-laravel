<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'old_password' => 'required',
            'new_password' => 'required|different:old_password',
            'confirm_password' => 'same:new_password'
        ];
    }
    public function messages()
    {
        return [
            'old_password.required' => 'Please enter your current password',
            'new_password.required' => 'Please enter your new password',
            'new_password.different' => 'Your new password must different from old password',
            'confirm_password.same' => 'Please make confirm your new password'
        ];
    }
}
