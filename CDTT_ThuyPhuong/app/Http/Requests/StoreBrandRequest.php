<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrandRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => 'required',
        ];
    }
    public function message()
    {
        return [
            'name.required' => 'Tên không được để trống',
        ];
    }
}
