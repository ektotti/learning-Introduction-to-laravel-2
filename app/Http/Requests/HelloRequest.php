<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Myrule;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == 'hello') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'mail' => 'required',
            'age' => ['numeric', new Myrule(3)],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を必ず入力してください',
            'mail.required' => 'メールアドレスは必ず入力してください',
            'age.required' => '年齢は必ず入力してください',
            'age.hello' => '年齢は偶数のみ受け付けるよ',
        ];
    }
}
