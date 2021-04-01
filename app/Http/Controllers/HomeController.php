<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresario;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $empresario;

    public function __construct(Empresario $empresario)
    {
        $this->empresario = $empresario;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $empresarios = $this->empresario->orderBy('id', 'ASC')->paginate(10);
        
        return view('home', compact('empresarios'));
    }
}
