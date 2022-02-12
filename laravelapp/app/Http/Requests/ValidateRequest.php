<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
{

    public function authorize()
    {
        if ($this->path() == 'register') {
            return true;
        } else {
            return false;
        }
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:7|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください。',
            'email.required' => 'Eメールを入力してください。',
            'password.required' => 'パスワードを入力してください。',
            'password.min' => 'パスワードは７文字以上入力してください。',
            'password.confirmed' => 'パスワードと再入力が違います。'
        ];
    }
}
