<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            return redirect()->route('admin.login');
        }

        if (!in_array(auth()->user()->role, ['admin', 'editor'])) {
            auth()->logout();
            return redirect()->route('admin.login')->withErrors(['email' => 'Access denied.']);
        }

        return $next($request);
    }
}
