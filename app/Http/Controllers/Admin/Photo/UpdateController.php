<?php

namespace App\Http\Controllers\Admin\Photo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Photo\UpdateRequest;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Photo $photo)
    {
//        dd($request);
        $data = $request->validated();
//        dd($data);
        if (isset($data['path'])) {
            $data['size'] = $data['path']->getSize();
            $data['path'] = Storage::disk('public')->put('images', $data['path']);
            $data['url'] = url('/storage/' . $data['path']);
        }
        $photo->update($data);
        return redirect()->route('admin.photo.show', compact('photo'));
    }
}
