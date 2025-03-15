<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Role
{
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $userRole = Auth::user()->role;

        $dashboardRoutes = [
            'admin' => '/admin/dashboard',
            'formateur' => '/formateur/dashboard',
            'stagiaire' => '/stagiaire/dashboard'
        ];

        if ($userRole !== $role) {
            return redirect($dashboardRoutes[$userRole] ?? '/dashboard');
        }

        return $next($request);
    }
}
