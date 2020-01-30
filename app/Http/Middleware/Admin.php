<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $user = Auth::user();
        if ($user->id == 1)
            return $next($request);
        if ($user->role == 1)
            return $next($request);

        Auth::logout();
        abort(403, 'my dear NOT-ADMIN friend.
             if you should be admin you know who`s to contact, good bye');
    }
}
