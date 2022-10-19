<?php

namespace App\Http\Requests\Blog;

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
            'name'=>'required|unique:blog,name,'.request()->idProduct,
            'content'=>'required',
            'img'=>'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'img11'=>'',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Không được để trống',
            'content.required'=>'Không được để trống',
        ];
    }
}
