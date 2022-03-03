<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [
            'name' => 'Алексеев К. П.',
            'email' => 'alekseev@alekseev.loc',
            'password' => Hash::make('123123123')
        ];
//        dd($data);
        $user = User::firstOrCreate(['email' => $data['email']], $data);
//        dd($user);
        $this->middleware('auth');
        return redirect()->route('theme.index');
    }
}
