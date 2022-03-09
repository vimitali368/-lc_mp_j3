<?php

namespace App\Http\Controllers\Admin\Photo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Photo\StoreRequest;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
//        dd($request);
        $data = $request->validated();
//        dd($data['path']);
        if (isset($data['path'])) {
            $data['url'] = Storage::disk('public')->put('/images', $data['path']);
            $data['size'] = $data['path']->getSize();
        }
        Photo::firstOrCreate($data);
        return redirect()->route('admin.photo.index');
    }
}
