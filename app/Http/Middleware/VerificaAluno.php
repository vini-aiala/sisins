<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VerificaAluno
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
        if (Auth::check()) {
            $id = Auth::id();
            if(DB::table('alunos')->where('id', $id)->exists()) {
                return $next($request);
            } else {
                return redirect()->route('cadastro-aluno');
            }
        } else {
            return redirect()->route('login');
        }

    }
}
