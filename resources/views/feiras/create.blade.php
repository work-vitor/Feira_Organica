<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larafeira | Cadastrar Feiras</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin-2.min.css') }}">
</head>

<body style="background-color: #e9faff;">
    <h1 class="text-center my-4">CADASTRAR FEIRA</h1>
    <div class="card shadow my-5 w-75 mx-auto border border-3" style="border-radius: 20px;">
        <div class="card-body">
            <form action="{{ route('feiras.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome"
                                class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}"
                                placeholder="Digite o nome da feira">
                            <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nome">Cep</label>
                            <input type="text" name="cep" id="cep"
                                class="form-control cep {{ $errors->has('cep') ? 'is-invalid' : '' }}"
                                placeholder="Digite o cep da feira">
                            <div class="invalid-feedback">{{ $errors->first('cep') }}</div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nome">Cidade</label>
                            <input type="text" name="cidade" id="city"
                                class="form-control {{ $errors->has('cidade') ? 'is-invalid' : '' }}"
                                placeholder="Digite a cidade">
                            <div class="invalid-feedback">{{ $errors->first('cidade') }}</div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nome">Rua</label>
                            <input type="text" name="rua" id="street"
                                class="form-control {{ $errors->has('rua') ? 'is-invalid' : '' }}"
                                placeholder="Digite a rua">
                            <div class="invalid-feedback">{{ $errors->first('rua') }}</div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nome">Bairro</label>
                            <input type="text" name="bairro" id="district"
                                class="form-control {{ $errors->has('bairro') ? 'is-invalid' : '' }}"
                                placeholder="Digite o nome da feira">
                            <div class="invalid-feedback">{{ $errors->first('bairro') }}</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                            <label for="data">Dia da semana</label>
                            <select name="data" id="data"
                                class="form-control {{ $errors->has('data') ? 'is-invalid' : '' }}">
                                <option value="">Escolha a data da feira</option>
                                <option value="Segunda-Feira">Segunda-Feira</option>
                                <option value="Terça-fera">Terça-fera</option>
                                <option value="Quarta-feira">Quarta-feira</option>
                                <option value="Quinta-feira">Quinta-feira</option>
                                <option value="Sexta-feira">Sexta-feira</option>
                                <option value="Sábado">Sábado</option>
                                <!-- Foreach com as categorias -->
                            </select>
                        </div>
                    </div>

                  

     
                   
                    
                  
                </div>
                

                <button type="submit" class="btn btn-success btn-block mt-3">
                    Enviar
                </button>
            </form>
        </div>
    </div>


    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-mask/jquery.mask.min.js')}}"></script>
    <script src="{{ asset('js/auth/register.js')}}"></script>
</body>

</html>
