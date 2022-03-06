<?php

namespace App\Http\Requests\Admin\Client;

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
            'fio' => 'required|string',
            'phone_number' => 'nullable|string',
            'location' => 'nullable|string',
            'email' => 'nullable|string|email'
        ];
    }

    public function messages()
    {
        return [
            'fio.required' => 'Это поле необходимо для заполнения',
            'fio.string' => 'Данные должны соответствовать строчному типу',
            'phone_number.string' => 'Данные должны соответствовать строчному типу',
            'location.string' => 'Данные должны соответствовать строчному типу',
            'email.string' => 'Данные должны соответствовать строчному типу',
            'email.email' => 'Ваша почта должна соответствовать формату mail@some.domain',
        ];
    }
}
