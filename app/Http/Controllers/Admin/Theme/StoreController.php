<?php

namespace App\Http\Controllers\Admin\Theme;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Theme\StoreRequest;
use App\Mail\Client\ThemeMail;
use App\Models\Client;
use App\Models\Theme;
use Illuminate\Support\Facades\Mail;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
//        dd($request);
        $data = $request->validated();
//        dd($data);
        $theme = Theme::firstOrCreate($data);
//        dd($theme);
        $clientEmail = Client::find($theme->client_id)->email;
//        dd($clientEmail);
        Mail::to($clientEmail)->send(new ThemeMail($theme->id));
        return redirect()->route('admin.theme.index');
    }
}
