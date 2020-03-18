<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * ユーザーがこのリクエストの権限を持っているかを判断する
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * リクエストに適用するバリデーションルールを取得
     *
     * @return array
     */
    public function rules()
    {
        return [
          'user_id' => 'required|numeric',
          'title' => 'required',
          'content' => 'required',
          'image'=>'required|image|mimes:jpg,jpeg,png|max:2000'
        ];
    }
    /**
     * 定義済みバリデーションルールのエラーメッセージ取得
     *
     * @return array
     */
    public function messages(){
        return[
          'title.required' => 'タイトルを入力してください。',
          'content.required' => '本文を入力してください。',
          'image.required' => '画像ファイルを選択してください。'
        ];
    }
}
