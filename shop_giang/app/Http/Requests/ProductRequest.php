<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class ProductRequest extends FormRequest
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
            'name_product' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            // 'img1' => 'required|mimes:jpg,bmp,png',
            'img1' => 'required',
            'img2' => 'required',
            'status' => 'required',
            'admin_email' => 'required',
            'password_ad' => 'required',

        ];
    }
    public function messages(){
        return [
            'name_product.required' => ':attribute không được để trống',
            'price.required' => ':attribute không được để trống',
            'price.integer' => 'Giá sản phẩm phải là số',
            'img1.required' => 'Ảnh sản phẩm không được để trống',
            'img2.required' => 'Ảnh sản phẩm không được để trống',
            'admin_email.required'=>':attribute Không được để trống',
            'password_ad.required'=>':attribute không được để trống',
            // 'required' => 'Các trường không được để trống',
            // 'integer' => 'Trường ::attribute phải là số',
        ];
    }
    public function attributes()
    {
        return [
            'name_product'=>'Tên sản phầm',
            'price'=>'Giá sản phẩm',
            'img1'=>'Ảnh sản phẩm',
            'img2'=>'Ảnh sản phẩm',
            'admin_email'=>'Tên tài khoản',
            'password'=>'Mật khẩu'
        ];
    }
}
