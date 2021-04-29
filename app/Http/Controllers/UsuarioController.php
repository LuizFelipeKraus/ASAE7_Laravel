<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    function exibeCadastro() {
        return view('cadastro');
    }

    function addCadastro(Request $req) {
        $u = new Usuario();
        $u->nome = $req->input('nome');
        $u->endereco = $req->input('endereco');
        $u->cep = $req->input('cep');
        $u->cidade = $req->input('cidade');
        $u->estado = $req->input('estado');
        $u->save();

        $usuario = Usuario::all();
      
        return view('lista_cadastros',compact('usuario'));
    }
}
