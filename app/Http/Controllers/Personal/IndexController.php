<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('personal.main.index');
    }
}
