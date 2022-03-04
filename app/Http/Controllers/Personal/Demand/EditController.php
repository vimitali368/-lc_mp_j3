<?php

namespace App\Http\Controllers\Personal\Demand;

use App\Http\Controllers\Controller;
use App\Models\Demand;

class EditController extends Controller
{
    public function __invoke(Demand $demand)
    {
        return view('personal.demand.edit', compact('demand'));
    }
}
