<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [UsuarioController::class, 'exibeCadastro'])->name('home');

Route::post('/lista_cadastros', [UsuarioController::class, 'addCadastro'])->name('cadastro_salvo');

Route::get('/listar', [UsuarioController::class, 'retornaLista'])->name('cadastro_lista');

Route::get('/excluir/{id}', [UsuarioController::class, 'excluir'])->name('usuario_excluir');

Route::get('/editar/{id}', [UsuarioController::class, 'editar'])->name('usuario_editar');

Route::post('/alterar/{id}', [UsuarioController::class, 'alterar'])->name('usuario_alterar');