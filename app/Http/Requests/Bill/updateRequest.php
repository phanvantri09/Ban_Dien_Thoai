<?php

namespace App\Http\Requests\Bill;

use Illuminate\Foundation\Http\FormRequest;

class updateRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email:rfc,dns',
            'price'=>'required|integer',
            'numberPhone'=>'required',
            'xa'=>'',
            'sonha'=>'',
            'huyen'=>'',
            'tinh'=>'',
            'address'=>''
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Không được để trống',
            'email.required'=>'Không được để trống',
            'price.required'=>'Không được để trống',
            'price.integer'=>'Phải là số',
            'numberPhone.required'=>'Không được để trống',
        ];
    }
}
