<?php
namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Closure;
use Illuminate\Support\Facades\Auth;


class RedirectIfBreeder
{
        /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $guard="users")
    {
        if(!auth()->guard($guard)->check()) {
            return $next($request);

        }
        return redirect(route('breeder.home'));


    }
}