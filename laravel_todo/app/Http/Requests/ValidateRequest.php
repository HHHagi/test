<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
{

    public function authorize()
    {
        if ($this->path() == 'todolist_home') {
            return true;
        } else {
            return false;
        }
    }

    public function rules()
    {
        return [
            'comment' => 'required|max:100'
        ];
    }

    public function messages()
    {
        return [
            'comment.required' => 'コメントを入力してください。',
            'comment.max' => '１００文字以下で入力してください。',
        ];
    }
}
