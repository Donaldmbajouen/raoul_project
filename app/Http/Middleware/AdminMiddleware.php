<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            return redirect()->route('admin.login')->with('error', 'Veuillez vous connecter pour accéder à cette page.');
        }

        if (!auth()->user()->is_admin) {
            abort(403, 'Accès non autorisé.');
        }

        return $next($request);
    }
}
