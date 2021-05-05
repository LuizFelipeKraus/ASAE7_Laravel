@extends('templade')

@section('conteudo')

<div class="container-fluid pt-5">
    <div class="row">
        <h1 class="text-center">Lista de Usuários</h1>
    </div>
    <div class="row">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    
                    <th scope="col">Nome</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Cep</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope ="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($usuario))
                @foreach($usuario as $us)
                <tr>                
                    <td>{{$us->nome}}</td>
                    <td>{{$us->endereco}}</td>
                    <td>{{$us->cep}}</td>
                    <td>{{$us->cidade}}</td>
                    <td>{{$us->estado}}</td>
                    <td>
                        <a href="{{route('usuario_editar', ['id' => $us->id])}}" class="btn btn-warning">Alterar</a>
                    </td>
                    <td>
                        <a href="{{route('usuario_excluir', ['id' => $us->id])}}" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
                @endforeach
                @endif
               
            </tbody>
            
        </table>
        <a href="{{route('home')}}" class="btn btn-success">Cadastrar Novo Usuário</a>
    </div>
</div>
@endsection
