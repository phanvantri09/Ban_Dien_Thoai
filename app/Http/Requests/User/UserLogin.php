<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserLogin extends FormRequest
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
            'email' => 'required|email:rfc,dns',
            'password'=>'required|min:8',
            'rememberMe'
        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'không để trống',
            'email.email'=>'không đúng định dạng email',
            'password.required'=>'không để trống',
            'password.min'=>'không được bé hơn 8 ký tự',
        ];
    }
}
