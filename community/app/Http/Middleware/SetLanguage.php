<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLanguage
{
    public function handle(Request $request, Closure $next): Response
    {
        $language = session('language', 'en');

        if (!in_array($language, ['en', 'ur'])) {
            $language = 'en';
        }

        app()->setLocale($language);

        return $next($request);
    }
}
