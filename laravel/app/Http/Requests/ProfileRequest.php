<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'newpassword'=>'required',
            'confirmpassword'=>'required|same:newpassword'
        ];
    }

    public function messages(){
        return[
            'name.required'=>'Bạn chưa nhập name',
            'email.required'=>'Bạn chưa nhập email',
            'email.email'=>'Chưa đúng định dạng ',
            'email.unique'=>'Email đã tồn tại',
            'password.required'=>'Bạn chưa nhập password',
            'newpassword.required'=>'Bạn chưa nhập password mới',
            'confirmpassword.required'=>'Mật khẩu không khớp',
            'confirmpassword.same'=>'Mật khẩu không khớp'
        ];
    }
}
