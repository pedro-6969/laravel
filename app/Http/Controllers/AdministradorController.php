<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdministradorController extends Controller
{
    function index(){
        $administrador = new \App\Models\AdministradorModel();

        return view('administrador.index', ['administradores'=>$administrador::all()]);
    }

    function add(Request $dados){
        $validator = Validator::make(
            $dados->all(),
                [
                    'nome' => 'required|max:255',
                    'email' => 'required|email|max:255',
                    'telefone' => 'required|digits:11',
                    'cpf' => 'required|digits:11',
                    'usuario' => 'required|max:255',
                    'senha' => 'required|min:8|max:255',
                    'status' => 'required|max:255',
                ],
                [
                    'nome.required' => 'O campo nome é obrigatório.',
                    'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
                    
                    'email.required' => 'O campo e-mail é obrigatório.',
                    'email.email' => 'Digite um e-mail válido.',
                    'email.max' => 'O campo e-mail deve conter no máximo 255 caracteres.',

                    'telefone.required' => 'O campo telefone é obrigatório',
                    'telefone.digits' => 'O campo telefone deve ter 11 digitos.',

                    'cpf.required' => 'O campo CPF é obrigatório',
                    'cpf.digits' => 'O campo CPF deve ter 11 digitos.',

                    'usuario.required' => 'O campo usuário é obrigatório.',
                    'usuario.max' => 'O campo usuário deve conter no máximo 255 caracteres.',

                    'senha.required' => 'O campo senha é obrigatório.',
	                'senha.min' => 'O campo senha deve conter no mínimo 8 caracteres.',
	                'senha.max' => 'O campo senha deve conter no máximo 255 caracteres.',

                    'status.required' => 'O campo status é obrigatório.',
                    'status.max' => 'O campo status deve conter no máximo 255 caracteres.',
                ]
        );

        if($validator->fails()){
            return redirect()
                ->route('administrador.index')
                ->withErrors($validator)
                ->withInput();
        }

        $administrador = new \App\Models\AdministradorModel();
        $administrador::create($dados->all());

        $administradores = new \App\Models\AdministradorModel();
        
        return view('administrador.index', ['sucess'=>'Administrador Cadastrado!', 'administradores'=>$administradores::all()]);
    }

    function remove(string $id){
        $administrador = new \App\Models\AdministradorModel();
        $administrador::destroy($id);

        return view('administrador.index', ['sucess'=>'Administrador Removido!', 'administradores'=>$administrador::all()]);
    }

    function atualizar(string $id){
        $administrador = new \App\Models\AdministradorModel();
        $administrador = $administrador::find($id);

        return view('administrador.atualizar', ['administrador'=>$administrador]);
    }

    function save(Request $dados){
        $administrador = new \App\Models\AdministradorModel();
        $administrador = $administrador::find($dados->id);
        $administrador->update($dados->all());

        return view('administrador.index', ['sucess'=>'Administrador Atualizado!', 'administrador'=>$administrador]);
    }
}
