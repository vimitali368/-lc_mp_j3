<?php

namespace App\Http\Controllers\Theme;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\Theme;

class IndexController extends Controller
{
    public function __invoke()
    {
        $themes = Theme::paginate(6);
        $randomPhotos = Photo::inRandomOrder()->limit(8)->get();

        return view('theme.index', compact('themes', 'randomPhotos'));
    }

}
