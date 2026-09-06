<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    
    public function handle(Request $request, Closure $next): Response
    {
    if (Auth::check() && (Auth::user()->is_admin || !Auth::user()->is_expert)) {
    return $next($request);
}
    abort(403, 'Unauthorized access');

    }
}
