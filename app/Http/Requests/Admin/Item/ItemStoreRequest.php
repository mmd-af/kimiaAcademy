<?php

namespace App\Http\Requests\Admin\Item;

use Illuminate\Foundation\Http\FormRequest;

class ItemStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'season' => ['required'],
            'course' => ['required'],
            'title.*' => ['required'],
            'description.*' => ['nullable'],
            'is_free.*' => ['required', 'integer'],
            'filepath.*' => ['required'],
//TODO add request persian translate
            'sort.*' => ['required'],
        ];
    }
}
