<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExpertMiddleware
{
    
    public function handle($request, Closure $next)
{
    if (Auth::check() && Auth::user()->is_expert || Auth::user()->is_admin) {
        return $next($request);
    }
    abort(403, 'Unauthorized');
}
}
