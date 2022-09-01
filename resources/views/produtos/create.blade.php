<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larafeira | Cadastrar Produtos</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin-2.min.css') }}">
</head>

<body style="background-color: #e9faff;">
    <h1 class="text-center my-4">CADASTRAR PRODUTO</h1>
    <div class="card shadow my-5 w-75 mx-auto border border-3" style="border-radius: 20px;">
        <div class="card-body">
            <form action="{{ route('produtos.createP.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome"
                                class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}"
                                placeholder="Digite o nome do produto">
                            <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="categoria_id">Categoria</label>
                            <select name="categoria_id" id="categoria_id"
                                class="form-control {{ $errors->has('categoria_id') ? 'is-invalid' : '' }}">
                                <option value="">Escolha uma categoria...</option>
                                <option value="1">teste</option>
                                <!-- Foreach com as categorias -->
                            </select>
                            <div class="invalid-feedback">{{ $errors->first('categoria_id') }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="preco">Preço</label>
                            <input type="text" name="preco" id="preco"
                                class="form-control {{ $errors->has('preco') ? 'is-invalid' : '' }}"
                                placeholder="Digite o valor do produto">
                            <div class="invalid-feedback">{{ $errors->first('preco') }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="quantidade">Quantidade</label>
                            <input type="number" name="quantidade" id="quantidade"
                                class="form-control {{ $errors->has('quantidade') ? 'is-invalid' : '' }}"
                                placeholder="Informe a quantidade do produto">
                            <div class="invalid-feedback">{{ $errors->first('quantidade') }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="imagem">Imagem</label>
                            <input type="file" name="imagem" id="imagem" class="form-control p-1" required>
                        </div>
                    </div>
                </div>
                
                <input type="hidden" value="fornecedor{{auth()->user()->id}}" name="pastaFornecedor" id="pastaFornecedor">

                <button type="submit" class="btn btn-success btn-block mt-3">
                    Enviar
                </button>
            </form>
        </div>
    </div>
</body>

</html>
