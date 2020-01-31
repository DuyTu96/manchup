<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class checkAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::User();
            if ($user->role >= 2) {
                return $next($request);
            } else {
                return redirect()->route('admin.dashboard.index');
            }
        } else {
            return redirect()->route('login');
        }
    }
}
