<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name' => 'required',
            // 'name'=>['required'],
            // 'detail'=>['required'],
            // 'category_id'=>['required'],
            // 'price'=>['required'],
            // 'image'=>['required'],
            // 'brand_id'=>['required']

        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=>'Tên thương hiệu không được để trống',
            'detail.required'=>'Từ khóa không được để trống',
            'qty.required'=>'Số lượng không được để trống',
            'price.required'=>'Giá không được để trống',
            'image.required'=>'Ảnh không được để trống',
            'category_id.required'=>'Danh mục không được trống',
            'brand_id.required'=>'chọn thương hiệu'

        ];
    }
}
