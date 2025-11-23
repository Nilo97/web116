<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Como estamos usando verificação de token no lado do cliente (JavaScript),
        // este middleware serve apenas como um ponto de verificação no servidor
        // Você pode adicionar lógica adicional aqui se necessário
        
        return $next($request);
    }
}