<!DOCTYPE html>
<html lang="pt-br">

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
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" placeholder="Digite seu nome" value="{{ old('name')}}">
                            <div class="invalid-feedback">{{ $errors->first('name')}}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}" placeholder="Digite sua senha">
                            <div class="invalid-feedback">{{ $errors->first('password')}}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Confirmar Senha</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar senha">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cpf">Cpf</label>
                            <input type="text" name="cpf" id="cpf" class="form-control cpf {{ $errors->has('cpf') ? 'is-invalid' : ''}}" placeholder="Digite seu cpf">
                            <div class="invalid-feedback">{{ $errors->first('cpf')}}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="text" name="foto" id="foto" class="form-control p-1" placeholder="Insira a foto">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                              <label for="segmento">Segmento</label>
                              <input type="text" name="segmento" id="segmento" class="form-control {{ $errors->has('segmento') ? 'is-invalid' : ''}}" placeholder="Informe o segmento do fornecedor" value="{{ old('segmento')}}">
                              <div class="invalid-feedback">{{ $errors->first('segmento')}}</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="celular">Celular</label>
                            <input type="text" name="celular" id="celular" class="form-control cel {{ $errors->has('celular') ? 'is-invalid'  : ''}}" placeholder="Informe o celular do fornecedor" value="{{ old('celular')}}">
                            <div class="invalid-feedback">{{ $errors->first('celular')}}</div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success btn-block mt-3">
                    Criar conta
                </button>
            </form>
        </div>
    </div>

    <script src="{{ asset('vendor/jquery/jquery.min.js.js')}}"></script>
    <script src="{{ asset('vendor/jquery-mask/jquery.mask.min.js.js')}}"></script>

    <script>
        $('.cel').mask('(00) 00000-0000');
        $('.cpf').mask('000.000.000-00');
    </script>
</body>

</html>