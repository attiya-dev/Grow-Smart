<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Switch the application locale
     */
    public function switch($locale)
    {
        // Validate the locale is supported
        $supportedLocales = ['en', 'ur'];
        
        if (!in_array($locale, $supportedLocales)) {
            return redirect()->back();
        }

        // Store the locale in session
        session()->put('locale', $locale);
        
        // Or store in cookie for persistence (lasts 365 days)
        // cookie()->queue('locale', $locale, 365 * 24 * 60);

        return redirect()->back();
    }
}
