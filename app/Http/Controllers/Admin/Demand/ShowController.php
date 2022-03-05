<?php

namespace App\Http\Controllers\Admin\Demand;

use App\Http\Controllers\Controller;
use App\Models\Demand;

class ShowController extends Controller
{
    public function __invoke(Demand $demand)
    {
        return view('Admin.demand.show', compact('demand'));
    }
}
