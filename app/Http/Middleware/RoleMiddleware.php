<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // if (!Auth::check() || Auth::user()->role !== $role) {
        //     return redirect('/');
        // }
        // return $next($request);
        if (!Auth::check()) {
            return redirect()->route('login'); // Redirect to login if not authenticated
        }

        // Check user role
        $userRole = Auth::user()->role;

        if ($userRole === 'client' && $role === 'client') {
            return $next($request); // Allow access if user is a client
        } elseif ($userRole === 'admin' && $role === 'admin') {
            return $next($request); // Allow access if user is an admin
        }

        // Redirect to appropriate route based on role
        if ($userRole === 'client') {
            return redirect()->route('gateway'); // Redirect client to gateway
        } elseif ($userRole === 'admin') {
            return redirect()->route('admin.dashboard'); // Redirect admin to dashboard
        }

        return redirect()->route('login');
    }
}
