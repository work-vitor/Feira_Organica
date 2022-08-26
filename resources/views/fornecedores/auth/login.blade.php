<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feira Organica - Login</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin-2.min.css') }}">
</head>
<body>
    <h1 class="text-center my-4">Login</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow my-4 mx-auto">
                    <div class="card-body">
                        <form action="" method="POST" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group"> 
                                        <input
                                            type="email"
                                            name="email"
                                            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                            placeholder="E-mail"
                                        >
                                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                    </div>
                                </div>
                                
                                <div class="col-12">  
                                    <div class="form-group">     
                                        <input
                                            type="password"
                                            name="password"
                                            class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                            placeholder="Senha"
                                        >
                                        <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-block mt-3">
                                Login
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="{{ route('fornecedores.createF.create') }}">Não tem uma conta? Cadastre-se!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>