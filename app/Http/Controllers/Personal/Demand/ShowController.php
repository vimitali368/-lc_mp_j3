<?php

namespace App\Http\Controllers\Personal\Demand;

use App\Http\Controllers\Controller;
use App\Models\Demand;

class ShowController extends Controller
{
    public function __invoke(Demand $demand)
    {
        return view('personal.demand.show', compact('demand'));
    }
}
