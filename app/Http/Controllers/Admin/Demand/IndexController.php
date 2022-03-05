<?php

namespace App\Http\Controllers\Admin\Demand;

use App\Http\Controllers\Controller;
use App\Models\Demand;

class IndexController extends Controller
{
    public function __invoke()
    {
        $demands = Demand::all();
        return view('admin.demand.index', compact('demands'));
    }
}
