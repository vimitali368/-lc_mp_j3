<?php

namespace App\Http\Controllers\Admin\Photo;

use App\Http\Controllers\Controller;
use App\Models\Photo;

class ShowController extends Controller
{
    public function __invoke(Photo $photo)
    {
        return view('admin.photo.show', compact('photo'));
    }
}
