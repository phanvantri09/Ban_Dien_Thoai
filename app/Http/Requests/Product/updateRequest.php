<?php

namespace App\Http\Requests\Product;

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
            'name'=>'required|unique:product,name,'.request()->idProduct,
            'amount'=>'required|integer',
            'general'=>'',
            'price'=>'required|integer',
            'level'=>'required',
            'img11'=>'',
            'img12'=>'',
            'img13'=>'',
            'img1'=>'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'img2'=>'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'img3'=>'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Không được để trống',
            'amount.required'=>'Không được để trống',
            'price.required'=>'Không được để trống',
            'level.required'=>'Không được để trống',
            'amount.integer'=>'Phải là số',
            'price.integer'=>'Phải là số',
        ];
    }
}
