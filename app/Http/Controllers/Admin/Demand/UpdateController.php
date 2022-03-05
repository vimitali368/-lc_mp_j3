<?php

namespace App\Http\Controllers\Admin\Demand;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Demand\UpdateRequest;
use App\Models\Demand;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Demand $demand)
    {
        $data = $request->validated();
        $demand->update($data);
        return redirect()->route('admin.demand.show', compact('demand'));
    }
}
