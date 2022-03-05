<?php

namespace App\Http\Controllers\Admin\Demand;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Demand\StoreCaptchaRequest;
use App\Models\Demand;
use Illuminate\Validation\Rule;
use function redirect;

class StoreCaptchaController extends Controller
{
    public function __invoke(StoreCaptchaRequest $request)
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
        unset($data['captcha']);
//        dd($data);
        Demand::firstOrCreate($data);
        //TODO: Можно ещё добавить сообщение "Ваш запрос отправлен, с вами свяжуться в блищайшее время"
        return redirect()->route('main.index');
    }
}
