<?php

namespace App\Http\Controllers\Personal\Demand;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('personal.demand.create');
    }
}
