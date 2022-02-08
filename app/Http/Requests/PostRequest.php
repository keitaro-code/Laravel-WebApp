<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //ユーザー管理をして、制限などを加える機能
        // return false;
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
            'title' => 'required | min:3',
            'body' => 'required'
        ];
    }

    public function messages()
    {
        return[
    'title.required' => '入力必須です。',
    'title.min' => ':min 文字以上入力してください。',
    'body.required' => '入力必須です。',
        ];
    }






}
