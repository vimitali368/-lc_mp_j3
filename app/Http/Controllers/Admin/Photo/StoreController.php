<?php

namespace App\Http\Controllers\Admin\Photo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Photo\StoreRequest;
use App\Models\Photo;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
//        dd($request);
        $data = $request->validated();
//        dd($data);
        Photo::firstOrCreate($data);
        return redirect()->route('admin.photo.index');
    }
}
