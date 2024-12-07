<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UrlController extends Controller
{
    public function shorten(Request $request)
    {
        $request->validate([
            'original_url' => 'required|url'
        ]);

        $shortCode = Str::random(5);

        $url = Url::create([
            'original_url' => $request->original_url,
            'short_code' => $shortCode
        ]);

        return view('result', ['short_url' => url($shortCode)]);
    }
    public function redirect($code)
    {
        $url = Url::where('short_code', $code)->firstOrFail();
        return redirect($url->original_url);
    }
}
