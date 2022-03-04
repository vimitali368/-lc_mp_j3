<?php

namespace App\Http\Controllers\Personal\Demand;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Demand\UpdateRequest;
use App\Models\Demand;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Demand $demand)
    {
        $data = $request->validated();
        $demand->update($data);
        return redirect()->route('personal.demand.show', compact('demand'));
    }
}
