<?php

namespace App\Http\Controllers\Admin\Demand;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Demand\UpdateRequest;
use App\Models\Client;
use App\Models\Demand;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Demand $demand)
    {
        $data = $request->validated();
        $demand->update($data);
        if ($demand->status == Demand::STATUS_DONE) {
            unset($data['suitable_time']);
            unset($data['status']);
            Client::firstOrCreate($data);
        }
        return redirect()->route('admin.demand.show', compact('demand'));
    }
}
