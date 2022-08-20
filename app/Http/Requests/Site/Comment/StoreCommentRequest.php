<?php

namespace App\Http\Requests\Site\Comment;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'body' => ['required'],
        ];
    }
}
