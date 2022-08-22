<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larafeira | Cadastrar Fornecedores</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin-2.min.css') }}">
</head>

<body>
    <div class="container mt-5">
        <form action="{{ route('fornecedores.createF.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control"
                    placeholder="Informe o nome do fornecedor" required>
            </div>
            <div class="row mb-3">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Escolha uma senha" required>
            </div>
            <div class="row mb-3">
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" class="form-control p-1" required>
            </div>
            <div class="row mb-3">
                <label for="segmento">Segmento</label>
                <input type="text" name="segmento" id="segmento" class="form-control" placeholder="Informe o segmento do fornecedor" required>
            </div>
            <div class="row mb-3">
                <label for="celular">Celular</label>
                <input type="text" name="celular" id="celular" class="form-control" placeholder="Informe o celular do fornecedor" required>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <button class="btn btn-primary btn-block">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
