<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Get locale from session, cookie, or use default
        $locale = session()->get('locale') ?? 
                  request()->cookie('locale') ?? 
                  config('app.locale');

        // Validate locale is supported
        if (in_array($locale, ['en', 'ur'])) {
            app()->setLocale($locale);
        }

        return $next($request);
    }
}
