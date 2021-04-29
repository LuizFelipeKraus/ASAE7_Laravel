<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
</head>

<body>
<div class="container-fluid">
<div class="row">
    <div class="col-md-3">
    
    </div>
    <form action="/lista_cadastros" method="POST"  class="col-md-6 mt-5 pt-1">
        @csrf
        <img width="100" src="data:image/png;base64,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"
            class="rounded mx-auto d-block" alt="Imagem banco do brasil">
        <div class="input-group mb-3 pt-3">
            <span class="input-group-text" id="inputGroup-sizing-default"><i class="bi bi-person"></i></span>
            <input type="text" name="nome" placeholder="Nome" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-2">
            <span class="input-group-text" id="inputGroup-sizing-default"><i class="bi bi-house-door"></i></span>
            <input type="text" name="endereco" max="120" min="0" placeholder="Endereco" class="form-control"
                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-2">
            <span class="input-group-text" id="inputGroup-sizing-default"><i class="bi bi-clipboard"></i></span>
            <input type="number" name="cep" placeholder="Cep" class="form-control"
                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-2">
            <span class="input-group-text" id="inputGroup-sizing-default"><i class="bi bi-building"></i></span>
            <input type="text" name="cidade" placeholder="Cidade" class="form-control"
                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default"><i class="bi bi-file-image"></i></span>
            <select name="estado" class="form-select" id="inputGroupSelect01">
                <option value="estado">Selecione o Estado</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AM">Amazonas</option>
                <option value="AP">Amapá</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RO">Rondônia</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SE">Sergipe</option>
                <option value="SP">São Paulo</option>
                <option value="TO">Tocantins</option>
            </select>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="subimit" value="enviar" class="btn btn-outline-success">Entrar</button>
        </div>
    </form>
    <div class="col-md-3">
    
    </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>
