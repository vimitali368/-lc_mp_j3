<?php

namespace App\Http\Controllers\Admin\Theme;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Theme\StoreRequest;
use App\Models\Theme;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
//        dd($request);
        $data = $request->validated();
//        dd($data);
        Theme::firstOrCreate($data);
        return redirect()->route('admin.theme.index');
    }
}
