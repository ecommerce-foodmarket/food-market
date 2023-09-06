<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }

  

// ...

protected function redirectTo($request)
{
    if (Route::is('admin.*') && auth()->user()->role === 'Admin') {
        // Si el usuario tiene el rol de "Admin" y está en una ruta bajo 'admin.*'
        return route('admin.dashboard'); // Redirige a la vista de administrador
    } elseif (Route::is('user.*') && auth()->user()->role === 'User') {
        // Si el usuario tiene el rol de "User" y está en una ruta bajo 'user.*'
        return route('user.dashboard'); // Redirige a la vista de usuario
    }

    // Por defecto, redirige a la ruta 'dashboard' (puedes personalizarla)
    return route('dashboard');
}

}
