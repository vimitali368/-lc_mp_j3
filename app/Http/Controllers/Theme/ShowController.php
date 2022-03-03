<?php

namespace App\Http\Controllers\Theme;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function __invoke(Theme $theme)
    {
        $date = Carbon::parse($theme->created_at);
        return view('theme.show', compact('theme', 'date'));
    }

}
