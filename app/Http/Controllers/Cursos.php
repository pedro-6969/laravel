<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cursos extends Controller
{

    function index(){
        return view('pagina-cursos');
    }
    
}
