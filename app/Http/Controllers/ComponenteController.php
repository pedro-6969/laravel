<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponenteController extends Controller
{
    function index(){
        return view('componente.index');
    }
    
    function add(Request $dados){
        $componente = new \App\Models\ComponenteModel();
        $componente::create($dados->all());

        $componentes = new \App\Models\ComponenteModel();

        return view('componente.index', ['sucess'=>'Componente Cadastrado!', 'componentes'=>$componentes::all()]);
    }
}
