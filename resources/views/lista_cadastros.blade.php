<?php 

  use App\Http\Controllers\UsuarioController;
?>
<!doctype html>
<html lang="en">

<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Lista Cadastros</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sigaa-IFSC</a>
            <form class="d-flex" >
                <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
            </form>
        </div>
    </nav>
    <div class="container-fluid pt-5">
        <div class="row">
            <h1 class="text-center" >Lista de Usuários</h1>
        </div>
        <div class="row">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Cep</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($usuario))
                    @foreach($usuario as $us)
                    <tr>
                        <td>{{$us->id}}</td>
                        <td>{{$us->nome}}</td>
                        <td>{{$us->endereco}}</td>
                        <td>{{$us->cep}}</td>
                        <td>{{$us->cidade}}</td>
                        <td>{{$us->estado}}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

   
</body>

</html>
