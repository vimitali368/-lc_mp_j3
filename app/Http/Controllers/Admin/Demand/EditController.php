<?php

namespace App\Http\Controllers\Admin\Demand;

use App\Http\Controllers\Controller;
use App\Models\Demand;

class EditController extends Controller
{
    public function __invoke(Demand $demand)
    {
        $statuses = Demand::getStatuses();
        return view('admin.demand.edit', compact('demand', 'statuses'));
    }
}
