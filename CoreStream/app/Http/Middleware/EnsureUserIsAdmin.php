<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->profile === 'Adm') {
            return $next($request); // Continua a requisição
        }

        // Redireciona para uma página 403 (Acesso negado) ou home, caso não seja admin
        return redirect('/admin/registered')->with('error', 'Você não tem permissão para acessar essa página.');
    }
}
