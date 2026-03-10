<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Curso extends Controller
{

    function desenvolvimentoSistemas(){
        return view('desenvolvimento-sistemas');
    }
    function administracao(){
        return view('administracao');
    }
    function meioAmbiente(){
        return view('meio-ambiente');
    }
    function mecatronica(){
        return view('mecatronica');
    }
    
}
