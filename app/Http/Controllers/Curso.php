<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Curso extends Controller
{
    function show(){
        $cursos = [
            (Object) ['nome_do_curso'=> 'Desenvolvimento de sistemas', 'horario'=> '13:10'],
            (Object) ['nome_do_curso'=> 'Administração', 'horario'=> '13:10']
        ];

        return view('curso', compact('cursos'));
    }
}
