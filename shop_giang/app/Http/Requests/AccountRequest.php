<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fullname' => 'required',
            'username' => 'required|email:rfc,dns',
            'password' => 'required|min:6'
        ];
    }
    public function message(){
        return [
            'fullname.required' => ':attribute không được để trống',
            'username.required' => ':attribute không được để trống',
            'username.email' => ':attribute định dạng email không chính xác',
            'password.required' => ':attribute không được để trống',
            'password.min' => ':attribute phải có ít nhất 6 ký tự',
        ];
    }
    public function attributes()
    {
        return[
            'fullname'=>'Họ và tên',
            'username'=>'Tài khoản',
            'password'=>'Mật khẩu',
        ];
    }
}
