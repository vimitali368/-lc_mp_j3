<?php

namespace App\Http\Controllers\Personal\Demand;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Demand\StoreRequest;
use App\Models\Demand;
use Illuminate\Validation\Rule;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
//        dd($request);
        // Проверяй на уникальность fio + phone_number
        $request->validate([
            'fio' => [
                Rule::unique('demands')
                    ->where('fio', $request->input('fio'))
                    ->where('phone_number', $request->input('phone_number'))
            ],
        ]);
        $data = $request->validated();
//        dd($data);
        Demand::firstOrCreate($data);
        return redirect()->route('personal.demand.index');
    }
}
