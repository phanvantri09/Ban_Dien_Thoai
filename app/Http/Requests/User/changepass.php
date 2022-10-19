<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class changepass extends FormRequest
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
            'passold'=>'required|min:8',
            'passnew'=>'required|min:8',
        ];
    }
    public function messages()
    {
        return [
            'passold.required'=>'không để trống',
            'passnew.required'=>'không để trống',
            'passold.min'=>'không được bé hơn 8 ký tự',
            'passnew.min'=>'không được bé hơn 8 ký tự'
        ];
    }
}
