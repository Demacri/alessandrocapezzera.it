<?php

namespace App\Http\Middleware;

use Closure;

class Locale
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
        $segment = $request->segment(1);
        if (in_array($segment, config('app.locales'))) {
            session(['locale' => $segment]);
        } else if (!session()->has('locale')) {
            session(['locale' => config('app.fallback_locale')]);
        }
        app()->setLocale(session('locale'));
        return $next($request);
    }
}
