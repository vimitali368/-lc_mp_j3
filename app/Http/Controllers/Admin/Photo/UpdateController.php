<?php

namespace App\Http\Controllers\Admin\Photo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Photo\UpdateRequest;
use App\Models\Photo;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Photo $photo)
    {
//        dd($request);
        $data = $request->validated();
//        dd($data);
        $photo->update($data);
        return redirect()->route('admin.photo.show', compact('photo'));
    }
}
