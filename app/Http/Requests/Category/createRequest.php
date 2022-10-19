<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class createRequest extends FormRequest
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
            'name'=>'required|unique:product',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Không được để trống',
        ];
    }
}
