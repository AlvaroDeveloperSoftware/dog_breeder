<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class for way to authenticated depending user.
 * @author Álvaro Ramas Franco
 * @since 1.0.
 */
class RedirectIfAuthenticated
{
    /**
     * Depending guard, check is logged and redirect for respective route.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard) {
            case 'users':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('breeder.home');
                }
                break;

            case 'user_normal':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('user.home');
                }
                break;

            case 'admin':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('admin.home');
                }
                break;
        }

        return $next($request);
    }
}