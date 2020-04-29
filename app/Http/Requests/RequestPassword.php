<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestPassword extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'password_old'      => 'required',
            'password'          => 'required',
            'password_confirm'  => 'required|same:password',
        ];
    }

    public function messages() {
        return [
            'password_old.required'     => ' Trường này không được để trống',
            'password.required'         => ' Trường này không được để trống',
            'password_confirm.required' => ' Trường này không được để trống',
            'password_confirm.same'     => ' Xác nhận mật khẩu không đúng',
        ];
    }
}
