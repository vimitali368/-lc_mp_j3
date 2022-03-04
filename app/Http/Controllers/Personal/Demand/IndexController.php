<?php

namespace App\Http\Controllers\Personal\Demand;

use App\Http\Controllers\Controller;
use App\Models\Demand;

class IndexController extends Controller
{
    public function __invoke()
    {
        $demands = Demand::all();
        return view('personal.demand.index', compact('demands'));
    }
}
