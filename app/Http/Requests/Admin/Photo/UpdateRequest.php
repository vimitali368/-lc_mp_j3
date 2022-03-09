<?php

namespace App\Http\Requests\Admin\Photo;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'path' => 'required|file',
            'url' => 'nullable|string',
            'size' => 'nullable|numeric',
            'description' => 'nullable|string',
            'theme_id' => 'required|numeric|exists:themes,id'
        ];
    }

    public function messages()
    {
        return [
            'path.required' => 'Это поле необходимо для заполнения',
            'path.file' => 'Данные должны соответствовать файловому типу',
            'url.required' => 'Это поле необходимо для заполнения',
            'url.string' => 'Данные должны соответствовать строчному типу',
            'size.required' => 'Это поле необходимо для заполнения',
            'size.numeric' => 'Данные должны соответствовать числовому типу',
            'description.string' => 'Данные должны соответствовать строчному типу',
            'theme_id.required' => 'Это поле необходимо для заполнения',
            'theme_id.numeric' => 'Данные должны соответствовать числовому типу',
            'theme_id.exists' => 'Данный пункт необходимо предварительно создать',
        ];
    }
}
