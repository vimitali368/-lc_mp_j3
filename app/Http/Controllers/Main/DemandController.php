<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DemandController extends Controller
{
    public function __invoke()
    {
        return view('main.demand');
    }
}
