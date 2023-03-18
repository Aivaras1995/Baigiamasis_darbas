<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $user = Auth::user();
        $roles = explode('|', $role);


        if (in_array($user->role, $roles)) {
            return $next($request);
        }

        return redirect('home');
    }
}
