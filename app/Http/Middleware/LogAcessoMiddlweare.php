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
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //return $next($request);
  
        
        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();
        LogAcesso::create(['Log' => "IP: $ip requisitou a rota $rota"]);
        return $next($request);
        // LogAcesso::create(['Log' => 'ip xyz requisitou a rota abcd']);
        // return Response('Chegamos no middlaware');
    }
}
