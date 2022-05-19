<?php

namespace App\Http\Requests\Admin\EducationalVideo;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEducationalVideoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'youtube_link' => ['nullable', 'string'],
            'aparat_link' => ['nullable', 'string'],
            'is_active' => ['required'],

        ];
    }
}
