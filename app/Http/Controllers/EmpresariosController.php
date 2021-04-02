<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresario;
use App\Pai;

class EmpresariosController extends Controller
{
    private $empresario;

    public function __construct(Empresario $empresario)
    {
        $this->empresario = $empresario;
    }

    public function rede($id)
    {
        $rede = $this->empresario->findOrfail($id);

        dd($rede->pai);

    }

    public function create(Request $request)
    {
        if($request->get('pai') != null){
            
            $id = $request->get('pai');
            $nome = $request->get('nome');

            Pai::create([
                    'id' => $id,
                    'nome' => $nome
                ]);
        };
        $empresario = $request->all();
        $this->empresario->create($empresario);
        
        flash('Empresario cadastrado com sucesso')->success();
        return redirect()->route('home'); 
    }

   
}
