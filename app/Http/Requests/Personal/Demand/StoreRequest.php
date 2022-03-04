<?php

namespace App\Http\Requests\Personal\Demand;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'fio' => [
                'required',
                'string',
//                Rule::unique('demands', 'fio')
//                    ->where(function ($query) use ($request->phone_number) {
//                        return $query->where('phone_number', $lastName);
//                    }),
            ],
//            'fio' => 'required|string',
            'phone_number' => 'required|string',
            'location' => 'required|string',
            'email' => 'required|string|email',
            'suitable_time' => 'required'
        ];
    }
}
