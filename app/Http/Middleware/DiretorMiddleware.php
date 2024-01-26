<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DiretorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->tipo !== 'diretor') {
            // Redirecionar para uma página de erro ou fazer o que for apropriado
            return redirect()->route('login')->with('error', 'Acesso não autorizado.');
        }

        return $next($request);
    }

}