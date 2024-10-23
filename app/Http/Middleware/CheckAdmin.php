<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next, $param, $name): Response
    {
        if (auth()->check() && auth()->user()->isAdmin()) {
            return $next($request);
        }

        abort(404);
    }
}
