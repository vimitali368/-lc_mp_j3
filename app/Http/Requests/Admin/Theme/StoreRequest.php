<?php

namespace App\Http\Requests\Admin\Theme;

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
            'title' => 'required|string',
            'description' => 'nullable|string',
            'client_id' => 'required|numeric|exists:clients,id'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо для заполнения',
            'title.string' => 'Данные должны соответствовать строчному типу',
            'description.string' => 'Данные должны соответствовать строчному типу',
            'client_id.required' => 'Это поле необходимо для заполнения',
            'client_id.numeric' => 'Данные должны соответствовать числовому типу',
            'client_id.exists' => 'Данный пункт необходимо предварительно создать',
        ];
    }
}
