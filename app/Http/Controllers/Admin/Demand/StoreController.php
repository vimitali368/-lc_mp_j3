<?php

namespace App\Http\Controllers\Admin\Demand;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Demand\StoreRequest;
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
                    ->where('status', 1)
            ],
        ]);
        $data = $request->validated();
//        dd($data);
        Demand::firstOrCreate($data);
        return redirect()->route('admin.demand.index');
    }
}
