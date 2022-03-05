<?php

namespace App\Http\Requests\Admin\Demand;

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
            'phone_number' => 'required|string',
            'location' => 'required|string',
            'email' => 'required|string|email',
            'suitable_time' => 'required',
            'status' => 'required|numeric'
//        |date_format:Y-m-d H:i:s'
        ];
    }
}
