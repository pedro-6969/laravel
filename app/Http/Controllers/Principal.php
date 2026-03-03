<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function principal(){
        return view('pagina-principal');
    }

    function sobre(){
        return view('sobre');
    }

    function contato(){
        return view('contato');
    }

    function desenvolvimentoSistemas(){
        return view('desenvolvimento-sistemas');
    }

    function administracao(){
        return view('administracao');
    }

    function meioAmbiente(){
        return view('meio-ambiente');
    }
    
}


