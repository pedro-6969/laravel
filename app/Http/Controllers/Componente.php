<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Componente extends Controller
{
    function show(){
        $componentes = [
            (Object) ['nome'=> 'Programação Web III', 'horario'=> '13:10'],
            (Object) ['nome'=> 'História', 'horario'=> '14:50']
        ];

        return view('componente', compact('componentes'));
    }
}