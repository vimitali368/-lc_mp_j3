<?php

namespace App\Http\Requests\Admin\Photo;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'path' => 'required|string',
            'url' => 'required|string',
            'size' => 'required|numeric',
            'description' => 'nullable|string',
            'theme_id' => 'required|numeric|exists:themes,id'
        ];
    }
}
