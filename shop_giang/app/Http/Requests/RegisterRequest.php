<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'fullname'=>'required',
            'username' => 'required|email:rfc,dns',
            'password' => 'required|min:6',
        ];
    }
    public function messages()
    {
        return [
            'fullname.required' =>':attribute Không được để trống',
            'username.required' =>':attribute Không được để trống',
            'username.email' =>'Địa chỉ :attribute không đúng',
            'password.required' =>':attribute Không được để trống',
            'password.min' =>':attribute phải ít nhất 6 ký tự',

        ];
    }
    public function attributes(){
        return [
            'fullname'=>'Họ và tên',
            'username'=>'Tài khoản',
            'password'=>'Mật khẩu'
        ];
    }
}
