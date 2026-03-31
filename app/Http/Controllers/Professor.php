<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function show(){
        $professores = [
            (Object) ['nome'=> 'Amauri', 'telefone'=> '676'],
            (Object) ['nome'=> 'Ricardo', 'telefone'=> '699'],
        ];

        return view('professor', compact('professores'));
    }
}
