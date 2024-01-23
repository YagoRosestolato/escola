<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Models\LogAcesso;

class LogAcessoMiddlweare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request)  $next
     */
    public function handle( $request, Closure $next): Response
    {

  
        
        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();
        LogAcesso::create(['Log' => "IP: $ip requisitou a rota $rota"]);
        //return $next($request);


        $resposta = $next($request);
        $resposta -> setStatusCode(201, 'O status da reposta e o texto da resposta foram modificados');

        return $resposta;

    }
}
