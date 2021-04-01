<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresario;

class EmpresariosController extends Controller
{
    private $empresario;

    public function __construct(Empresario $empresario)
    {
        $this->empresario = $empresario;
    }

    public function create(Request $request)
    {
        $empresario = $request->all();
        $this->empresario->create($empresario);
        flash('Empresario cadastrado com sucesso')->success();
        return redirect()->route('home'); 
    }
}
