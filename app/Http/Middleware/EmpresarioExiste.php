<?php

namespace App\Http\Middleware;

use Closure;
use App\Empresario;

class EmpresarioExiste
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
        
        
        if($request->has('nome')){
            $query = Empresario::query();
            $query->where('nome', 'LIKE', $request->nome);
            $nome = $query->get();
            if(count($nome)>0){
                flash('Já existe um empresário com este nome.')->warning();
                return redirect()->route('home')->withInput();
            }
            
        }
        
        if($request->has('celular')){
            $query = Empresario::query();
            $query->where('celular', 'LIKE',  $request->celular);
            $celular = $query->get();
            if(count($celular)>0){
                flash('Já existe esse celular cadastrado.')->warning();
                return redirect()->route('home')->withInput();
            }
            
        }
        return $next($request);  
    }
}
