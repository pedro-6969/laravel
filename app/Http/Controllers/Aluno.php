<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    function show(){
        $alunos = [
            (Object) ['nome'=> 'Diogo', 'telefone'=> '123', 'email'=> 'diogo@hotmail.com'],
            (Object) ['nome'=> 'Pedro', 'telefone'=> '321', 'email'=> 'pedro@hotmail.com'],
            (Object) ['nome'=> 'Miguel', 'telefone'=> '231', 'email'=> 'miguel@hotmail.com']
        ];

        return view('aluno', compact('alunos'));
    }
}
