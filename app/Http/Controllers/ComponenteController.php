<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComponenteController extends Controller
{
    function index(){
        $componente = new \App\Models\ComponenteModel();

        return view('componente.index', ['componentes'=>$componente::all()]);
    }
    
    function add(Request $dados){
        $validator = Validator::make(
            $dados->all(),
                [
                    'nome' => 'required|'
                ],
        )

        $componente = new \App\Models\ComponenteModel();
        $componente::create($dados->all());

        $componentes = new \App\Models\ComponenteModel();

        return view('componente.index', ['sucess'=>'Componente Cadastrado!', 'componentes'=>$componentes::all()]);
    }

    function remove(string $id){
        $componente = new \App\Models\ComponenteModel();
        $componente::destroy($id);

        return view('componente.index', ['sucess'=>'Componente Removido!', 'componentes'=>$componente::all()]);
    }

    function atualizar(string $id){
        $componente = new \App\Models\ComponenteModel();
        $componente = $componente::find($id);

        return view('componente.atualizar', ['componente'=>$componente]);
    }

    function save(Request $dados){
        $componente = new \App\Models\ComponenteModel();
        $componente = $componente::find($dados->id);
        $componente->update($dados->all());

        return view('componente.index', ['sucess'=>'Componente Atualizado!', 'componente'=>$componente]);
    }
}
