<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larafeira | Cadastrar Fornecedores</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin-2.min.css') }}">
</head>

<body style="background-color: #e9faff;">
<h1 class="text-center my-4">CADASTRAR FORNECEDOR</h1>
    <div class="card shadow my-5 w-75 mx-auto border border-3"  style="border-radius: 20px;">
        <div class="card-body">
           <form action="{{ route('fornecedores.createF.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="foto">Nome</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Digite seu nome">
                            <div>{{ $errors->first('name')}}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="foto">Senha</label>
                            <input type="senha" name="password" class="form-control" placeholder="Digite sua senha">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="text" name="foto" id="foto" class="form-control p-1">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                              <label for="segmento">Segmento</label>
                              <input type="text" name="segmento" id="segmento" class="form-control" placeholder="Informe o segmento do fornecedor" >
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="celular">Celular</label>
                            <input type="text" name="celular" id="celular" class="form-control" placeholder="Informe o celular do fornecedor" >                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success btn-block mt-3">
                    Criar conta
                </button>
            </form>
        </div>
    </div>
</body>

</html>
