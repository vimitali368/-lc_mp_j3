<?php

namespace App\Http\Controllers\Admin\Demand;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.demand.create');
    }
}
