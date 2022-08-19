<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larafeira | Cadastrar Produtos</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin-2.min.css') }}">
</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('produtos.store') }}" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome do produto" required>
                </div>
                <div class="col-md-6">
                    <label for="categoria_id">Categoria</label>
                    <select name="categoria_id" id="categoria_id" class="form-control" required>
                        <option value="">Escolha uma categoria...</option>
                        <option value="teste">teste</option>
                        <!-- Foreach com as categorias -->
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="preco">Preço</label>
                    <input type="text" name="preco" id="preco" class="form-control" placeholder="Digite o valor do produto" required>
                </div>
                <div class="col-md-6">
                    <label for="quantidade">Quantidade</label>
                    <input type="number" name="quantidade" id="quantidade" class="form-control" placeholder="Informe a quantidade do produto" required>
                </div>
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