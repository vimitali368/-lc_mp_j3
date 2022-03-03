<?php

namespace App\Http\Controllers\Theme;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\Theme;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function __invoke(Theme $theme)
    {
        $date = Carbon::parse($theme->created_at);
        $photos = Photo::paginate(3);
        return view('theme.show', compact('theme', 'date', 'photos'));
    }

}
