<?php

namespace App\Http\Middleware;

use Closure;

class FornecedorMiddleware
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
        // Verificar se o usuário está autenticado
        if (auth()->check() && auth()->user()->tipo !== 'fornecedor') {
            // Redirecionar para uma página de erro ou fazer o que for apropriado
            return redirect()->route('login')->with('error', 'Acesso não autorizado.');
        }

        return $next($request);
    }
}
