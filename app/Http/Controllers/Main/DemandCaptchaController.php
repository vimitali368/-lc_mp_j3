<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function captcha_img;
use function response;

class DemandCaptchaController extends Controller {

    public function captchaFormValidate(Request $request) {
        $request->validate([
            'fio' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'location' => 'required',
            'suitable_time' => 'required',
            'captcha' => 'required|captcha'
        ]);
    }

    public function reloadCaptcha() {
        return response()->json(['captcha' => captcha_img()]);
    }
}
