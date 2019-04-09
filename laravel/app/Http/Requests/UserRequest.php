<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email'=>'required|email|unique:user,email',
            'password'=>'required',
            'confirmpassword'=>'required|same:password'
        ];
    }

    public function messages(){
        return[
            'name.required'=>'Bạn chưa nhập name',
            'email.required'=>'Bạn chưa nhập email',
            'email.email'=>'Chưa đúng định dạng ',
            'email.unique'=>'Email đã tồn tại',
            'password.required'=>'Bạn chưa nhập password',
            'confirmpassword.required'=>'Chưa xác nhận lại mật khẩu',
            'confirmpassword.same'=>'Mật khẩu không khớp'
        ];
    }
}
