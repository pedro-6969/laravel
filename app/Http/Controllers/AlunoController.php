<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    function index(){
        return view('aluno.index');
    }

    function add(Request $dados){
        $aluno = new \App\Models\AlunoModel();
        $aluno::create($dados->all());

        $alunos = new \App\Models\AlunoModel();

        return view('aluno.index', ['sucess'=>'Cadastrado!', 'alunos'=>$alunos::all()]);
    }

    function remove(string $id){
        $aluno = new \App\Models\AlunoModel();
        $aluno::destroy($id);

        return view('aluno.index', ['sucess'=>'Removido!', 'alunos'=>$aluno::all()]);
    }
}
