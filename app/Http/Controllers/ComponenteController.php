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
                    'nome' => 'required|max:255',
                    'hora_inicio' => 'required|date_format:H:i',
                    'hora_fim' => 'required|date_format:H:i',
                ],
                [
                    'nome.required' => 'O campo nome é obrigatório.',
                    'nome.max' => 'O campo nome deve ter no máximo 255 caracteres.',

                    'hora_inicio.required' => 'O campo hora início é obrigatório.',
                    'hora_inicio.date_format' => 'O campo hora início deve estar no formato HH:MM',

                    'hora_fim.required' => 'O campo hora fim é obrigatório.',
                    'hora_fim.date_format' => 'O campo hora fim deve estar no formato HH:MM',
                ]
        );

        if($validator->fails()){
            return redirect()
                ->route('componente.index')
                ->withErrors($validator)
                ->withInput();
        }

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
