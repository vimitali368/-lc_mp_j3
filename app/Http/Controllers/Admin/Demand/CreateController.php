<?php

namespace App\Http\Controllers\Admin\Demand;

use App\Http\Controllers\Controller;
use App\Models\Demand;

class CreateController extends Controller
{
    public function __invoke()
    {
        $statuses = Demand::getStatuses();
        return view('admin.demand.create', compact('statuses'));
    }
}
