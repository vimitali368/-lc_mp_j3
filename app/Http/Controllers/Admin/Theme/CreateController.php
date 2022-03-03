<?php

namespace App\Http\Controllers\Admin\Theme;

use App\Http\Controllers\Controller;
use App\Models\Client;

class CreateController extends Controller
{
    public function __invoke()
    {
        $clients = Client::all();
        return view('admin.theme.create', compact('clients'));
    }
}
