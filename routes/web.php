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

Route::get('/', [App\Http\Controllers\Principal::class, 'index'])->name('pagina-principal');
Route::get('/sobre', [App\Http\Controllers\Sobre::class, 'index'])->name('pagina-sobre');
Route::get('/contato', [App\Http\Controllers\Contato::class, 'index'])->name('pagina-contato');
Route::get('/sobre-cursos', [App\Http\Controllers\Cursos::class, 'index'])->name('pagina-cursos');
Route::get('/desenvolvimento-sistemas', [App\Http\Controllers\Curso::class, 'desenvolvimentoSistemas'])->name('desenvolvimento-sistemas');
Route::get('/administracao', [App\Http\Controllers\Curso::class, 'administracao'])->name('administracao');
Route::get('/meio-ambiente', [App\Http\Controllers\Curso::class, 'meioAmbiente'])->name('meio-ambiente');
Route::get('/mecatronica', [App\Http\Controllers\Curso::class, 'mecatronica'])->name('mecatronica');




