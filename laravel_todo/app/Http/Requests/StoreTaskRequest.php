<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class  StoreTaskRequest extends FormRequest
{

    public function authorize()
    {
        if ($this->path() == 'tasks') {
            return true;
        } else {
            return false;
        }
    }

    public function rules()
    {
        return [
            'task' => 'required|max:100'
        ];
    }

    public function messages()
    {
        return [
            'task.required' => 'コメントを入力してください。',
            'task.max' => '１００文字以下で入力してください。',
        ];
    }
}
