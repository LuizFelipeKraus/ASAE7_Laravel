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
        //return view('lista_cadastros');
        return redirect()->route('cadastro_lista');
    }

    function retornaLista(){
        $usuario = Usuario::all();
		return view('lista_cadastros', [
			'usuario' => $usuario
		]);
    }

    function excluir($id){
		$u  = Usuario::findOrFail($id);
		$u->delete();

		return redirect()->route('cadastro_lista');
	}
    function editar($id){
		$usuario = Usuario::findOrFail($id);
		return view('editar', [
			'us' => $usuario
		]);
	}

	function  alterar(Request $req, $id) {
		$u = Usuario::find($id);
		$u->nome = $req->input('nome');
		$u->endereco = $req->input('endereco');
		$u->cep = $req->input('cep');
        $u->cidade = $req->input('cidade');
		$u->estado = $req->input('estado');
		
		$u->save();
		return redirect()->route('cadastro_lista');

	}
}
