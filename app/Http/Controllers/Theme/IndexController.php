<?php

namespace App\Http\Controllers\Theme;

use App\Http\Controllers\Controller;
use App\Models\Theme;

class IndexController extends Controller
{
    public function __invoke()
    {
        $themes = Theme::paginate(6);
//        $posts = $category->posts()->rndom(1);
        return view('theme.index', compact('themes'));
    }

}
