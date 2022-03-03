<?php

namespace App\Http\Controllers\Admin\Photo;

use App\Http\Controllers\Controller;
use App\Models\Theme;

class CreateController extends Controller
{
    public function __invoke()
    {
        $themes = Theme::all();
        return view('admin.photo.create', compact('themes'));
    }
}
