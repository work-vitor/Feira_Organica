<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feira Organica - Login</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin-2.min.css') }}">
</head>

<body style="background-color: #ADD8E6">
    <h1 class="text-center my-4">Ops.. Está página não existe</h1>
    

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">


                <div class="img-center" style="border-color: black">
                    <img src="https://i.ibb.co/f43vK21/Brown-Illustration-Cookies-Logo-2.png"
                        alt="Brown-Illustration-Cookies-Logo-2" class="d-inline-block align-top" alt=""
                        style="height:400px">

                         <div class="text-center">
                    <a class="btn btn-primary btn-sm" style="background-color:#5F9EA0"
                    
                        href="{{ route('produtos.index') }}"> Ir para home

                    </a>
                   

                </div>
                </div>

               
            </div>
        </div>

</body>

</html>

<?php 
return view('fornecedores.auth.login');
?>