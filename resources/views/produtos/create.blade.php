<!DOCTYPE html>
<html lang="pt-br">

<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #5F9EA0">
    <a class="navbar-brand" href="#">LaraFeiras</a>

    <img src="https://i.ibb.co/f43vK21/Brown-Illustration-Cookies-Logo-2.png" alt="Brown-Illustration-Cookies-Logo-2"
        class="d-inline-block align-top" alt="" style="height:60px">
        
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('produtos.index') }}">Produtos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('produtos.createP.create') }}">Cadastrar produto</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('fornecedores.index') }}">Minha conta</a>
            </li>
        </ul>
    </div>
</nav>

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
                                <option value="">Escolha uma categoria</option>
                                @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                                @endforeach

                            </select>
                            <div class="invalid-feedback">{{ $errors->first('categoria_id') }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="preco">Preço</label>
                            <input type="text" name="preco" id="preco"
                                class="form-control preco {{ $errors->has('preco') ? 'is-invalid' : '' }}"
                                placeholder="Digite o valor do produto">
                            <div class="invalid-feedback">{{ $errors->first('preco') }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="quantidade">Qtd máxima por pessoa</label>
                            <input type="number" name="quantidade" id="quantidade"
                                class="form-control {{ $errors->has('quantidade') ? 'is-invalid' : '' }}"
                                placeholder="Informe a quantidade do produto">
                            <div class="invalid-feedback">{{ $errors->first('quantidade') }}</div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="tp_unidade">Unidade</label>
                            <select name="tp_unidade" id="tp_unidade"
                                class="form-control {{ $errors->has('tp_unidade') ? 'is-invalid' : '' }}">
                                <option value="">Escolha qual unidade</option>
                                <option value="Kg">Kg</option>
                                <option value="Dúzias">Dúzia</option>
                                <option value="Unidades">Unidade</option>
                                <!-- Foreach com as categorias -->
                            </select>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="imagem">Imagem</label>
                            <input type="file" name="imagem" id="imagem" class="form-control p-1" required>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                        <div class="form-group">
                            <label for="feira_id">Feira</label>
                            <select name="feira_id" id="feira_id"
                                class="form-control {{ $errors->has('feira_id') ? 'is-invalid' : '' }}">
                                <option value="">Escolha uma feira</option>
                                @foreach ($feiras as $feira)
                                <option value="{{ $feira->id }}">{{ $feira->nome }}</option>
                                @endforeach

                            </select>
                            <div class="invalid-feedback">{{ $errors->first('feira_id') }}</div>
                        </div>
                    </div>

                <input type="hidden" value="fornecedor{{auth()->user()->id}}" name="pastaFornecedor"
                    id="pastaFornecedor">

                <button type="submit" class="btn btn-success btn-block mt-3">
                    Enviar
                </button>
            </form>
        </div>
    </div>

    <script>
        $('.preco').mask('00.00');

        </script>
</body>

</html>