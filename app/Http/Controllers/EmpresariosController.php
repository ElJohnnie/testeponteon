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
        //
        if($request->get('pai') != null){
            
            $id = $request->get('pai');
            $filho_id = $request->get('id');
            $pai = Empresario::findOrFail($id)->get();
            foreach($pai as $p){
                $nome = $p->nome;
            }
            Pai::create([
                    'id' => $id,
                    'nome' => $nome,
            ]);

            $pai = Pai::findOrFail($id);
            $data = $request->all();
            $empresario = $pai->filhos()->create($data);
        };
        $empresario = $request->all();
        $this->empresario->create($empresario);
        
        flash('Empresario cadastrado com sucesso')->success();
        return redirect()->route('home'); 
    }

   
}
