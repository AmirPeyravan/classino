<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleCheck
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check()) {
            abort(403, 'ابتدا باید وارد شوید.');
        }

        $userRole = auth()->user()->role;
        $path = $request->path(); // مسیر درخواست شده بدون دامنه

        if ($userRole === 'admin' && str_starts_with($path, 'admin')) {
            return $next($request);
        }

        if ($userRole === 'teacher' && str_starts_with($path, 'teacher')) {
            return $next($request);
        }

        if ($userRole === 'student' && str_starts_with($path, 'student')) {
            return $next($request);
        }

        abort(403, 'شما اجازه دسترسی به این بخش را ندارید.');
    }
}
