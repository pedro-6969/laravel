<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfessorController extends Controller
{
    function index(){
        $professor = new \App\Models\ProfessorModel();

        return view('professor.index', ['professores'=>$professor::all()]);
    }

    function add(Request $dados){
        $validator = Validator::make(
            $dados->all(),
                [
                    'nome' => 'required|max:255',
                    'email' => 'required|email|max:255',
                    'telefone' => 'required|digits:11',
                ],
                [
                    'nome.required' => 'O campo nome é obrigatório.',
                    'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
                    
                    'email.required' => 'O campo e-mail é obrigatório.',
                    'email.email' => 'Digite um e-mail válido.',
                    'email.max' => 'O campo e-mail deve conter no máximo 255 caracteres.',
                    
                    'telefone.required' => 'O campo telefone é obrigatório',
                    'telefone.digits' => 'O campo telefone deve ter 11 digitos.',
                ]
        );

        if ($validator->fails()){
            return redirect()
                ->route('professor.index')
                ->withErrors($validator)
                ->withInput();
        }

        $professor = new \App\Models\ProfessorModel();
        $professor::create($dados->all());

        $professores = new \App\Models\ProfessorModel();

        return view('professor.index', ['sucess'=>'Professor Cadastrado!', 'professores'=>$professores::all()]);
    }

    function remove(string $id){
        $professor = new \App\Models\ProfessorModel();
        $professor::destroy($id);

        return view('professor.index', ['sucess'=>'Professor Removido!', 'professores'=>$professor::all()]);
    }

    function atualizar(string $id){
        $professor = new \App\Models\ProfessorModel();
        $professor = $professor::find($id);

        return view('professor.atualizar', ['professor'=>$professor]);
    }

    function save(Request $dados){
        $professor = new \App\Models\ProfessorModel();
        $professor = $professor::find($dados->id);
        $professor->update($dados->all());

        return view('professor.index', ['sucess'=>'Professor Atualizado', 'professor'=>$professor]);
    }
}
