<?php

namespace App\Http\Controllers\Admin\Photo;

use App\Http\Controllers\Controller;
use App\Models\Photo;

class DeleteController extends Controller
{
    public function __invoke(Photo $photo)
    {
        $photo->delete();
        return redirect()->route('admin.photo.index');
    }
}
