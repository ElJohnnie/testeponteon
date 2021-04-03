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

    public function create(Request $request)
    {
        //se escolher pai
        if($request->get('pai') != null){
            
            $idPai = $request->get('pai');
            $pai = $this->sePaiExiste($idPai);
            $data = $request->all();
            $empresario = $pai->filhos()->create($data);
            flash('Empresario com pai cadastrado com sucesso')->success();
            return redirect()->route('home'); 
        }else{
            //se não escolher pai
            $empresario = $request->all();
            $this->empresario->create($empresario);
        
            flash('Empresario cadastrado com sucesso')->success();
            return redirect()->route('home'); 
        }
    }

    public function show($id){

        $empresario = $this->empresario->find($id);
        dd($empresario->pai());
     
        $resposta = $this->gerarRede($empresario);
        return view('list', compact('empresario'));
    }

    public function destroy($id){

        $pai = Pai::find($id);
        if($pai){
            Pai::destroy($id);
        }
        $empresario = $this->empresario->find($id);
        $empresario->delete();
        flash('Empresario deletado com sucesso')->success();
        return redirect()->route('home'); 
    }

    public function sePaiExiste($idPai){
        
        $pai = Pai::find($idPai);
        if(!$pai){
            $pai = $this->empresario->findOrFail($idPai)->get();
            foreach($pai as $p){
                $nome = $p->nome;
            }
            Pai::create([
                    'id' => $idPai,
                    'nome' => $nome,
            ]);
            $pai = Pai::findOrFail($idPai);
            return $pai;
        }else{
            $pai = Pai::findOrFail($idPai);
            return $pai;
        }   
    }

    public function gerarRede($empresario){
          
    }
}
