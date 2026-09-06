<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function change(Request $request, string $language)
    {
        if (!in_array($language, ['en', 'ur'])) {
            $language = 'en';
        }

        session(['language' => $language]);

        return back();
    }
}
