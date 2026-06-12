<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CursoController extends Controller
{
    function index(){
        $curso = new \App\Models\CursoModel();

        return view('curso.index', ['cursos'=>$curso::all()]);
    }

    function add(Request $dados){
        $validator = Validator::make(
            $dados->all(),
                [
                    'nome' => 'required|min:3|max:255',
                    'periodo' => 'required|min:3|max:255',
                ],
                [
                    'nome.required' => 'O campo nome é obrigatório.',
                    'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres.',
                    'nome.max' => 'O campo nome deve ter no máximo 255 caracteres.',

                    'periodo.required' => 'O campo periodo é obrigatório.',
                    'periodo.min' => 'O campo periodo deve ter no mínimo 3 caracteres.',
                    'periodo.max' => 'O campo periodo deve ter no máximo 255 caracteres.',
                ]
        );

        if ($validator->fails()) {
            return redirect()
                ->route('curso.index')
                ->withErrors($validator)
                ->withInput();
        }

        $curso = new \App\Models\CursoModel();
        $curso::create($dados->all());

        $cursos = new \App\Models\CursoModel();
        
        return view('curso.index', ['sucess'=>'Curso Cadastrado!', 'cursos'=>$cursos::all()]);
    }

    function remove(string $id){
        $curso = new \App\Models\CursoModel();
        $curso::destroy($id);

        return view('curso.index', ['sucess'=>'Curso Removido!', 'cursos'=>$curso::all()]);
    }

    function atualizar(string $id){
        $curso = new \App\Models\CursoModel();
        $curso = $curso::find($id);

        return view('curso.atualizar', ['curso'=>$curso]);
    }

    function save(Request $dados){
        $curso = new \App\Models\CursoModel();
        $curso = $curso::find($dados->id);
        $curso->update($dados->all());

        return view('curso.atualizar', ['sucess'=> 'Curso Atualizado!', 'curso'=>$curso]);
    }
}
