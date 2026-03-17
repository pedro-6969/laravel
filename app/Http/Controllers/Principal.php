<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function principal(){
        echo 'Página Principal';
    }

    function contato(string $nome){
        echo $nome;
    }

    function contatoNomeCompleto(string $nome, string $sobrenome){
        echo "O contato é $nome $sobrenome";
    }

    function contatoMensagem(string $nome, string $sobrenome, string $mensagem){
        echo "<b>($nome $sobrenome):</b> $mensagem";
    }

    function contatoTelefone(string $nome, string $sobrenome, string $mensagem, string $telefone, string $email = 'E-mail não informado'){
        echo "<b>($nome $sobrenome):</b> $mensagem<br>";
        echo "<b>Telefone:</b> $telefone<br>";
        echo "<b>E-mail:</b> $email<br>";
    }
}


