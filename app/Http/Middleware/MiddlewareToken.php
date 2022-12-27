<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MiddlewareToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $token = $request->bearerToken();
        if ($token != 'ABC') {
            return response()->json(['message' => 'Error / Not Found'], 401);
        }
        return $next($request);
    }
}
