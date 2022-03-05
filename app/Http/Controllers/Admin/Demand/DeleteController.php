<?php

namespace App\Http\Controllers\Admin\Demand;

use App\Http\Controllers\Controller;
use App\Models\Demand;

class DeleteController extends Controller
{
    public function __invoke(Demand $demand)
    {
        $demand->delete();
        return redirect()->route('admin.demand.index');
    }
}
