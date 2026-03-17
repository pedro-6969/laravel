<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\Principal::class, 'principal'])->name('pagina-principal');

Route::prefix('publico')->group(function(){
    Route::get('/contato/{nome}', [App\Http\Controllers\Principal::class, 'contato']);
    Route::get('/contato/{nome}/{sobrenome}', [App\Http\Controllers\Principal::class, 'contatoNomeCompleto']);
    Route::get('/contato/{nome}/{sobrenome}/{mensagem}', [App\Http\Controllers\Principal::class, 'contatoMensagem']);
    Route::get('/contato/{nome}/{sobrenome}/{mensagem}/{telefone}/{email?}', [App\Http\Controllers\Principal::class, 'contatoTelefone']);
});

// Parâmetros
// www.xuxa.com.br/contato/pedro/galle/ola/(15) 99999-1234/pedro@gmail.com

Route::fallback(function(){
    echo "A rota acessada não existe!<br>";
    echo "<a href='" . route('pagina-principal') . "'>Voltar</a>";
});


