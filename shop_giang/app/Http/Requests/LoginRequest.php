<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'username' => 'required|email:rfc,dns',
            'password' => 'required',
        ];
    }
    public function messages(){
        return [
            'username.required'=>':attribute Không được để trống',
            'username.email' =>'Địa chỉ :attribute không đúng',
            'password.required'=>':attribute không được để trống',

            // 'required' => 'Các trường không được để trống',
            // 'integer' => 'Trường ::attribute phải là số',
        ];
    }
    public function attributes()
    {
        return [
            'username'=>'Tài khoản',
            'password'=>'Mật khẩu'
        ];
    }
}
