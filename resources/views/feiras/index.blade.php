<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Feira Organica - Eventos</title>

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body style="background-color: #f8f9fc">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #5F9EA0">



                    @if (isset(auth()->user()->name))
                    <a class="navbar-brand" href="#">LaraFeiras</a>

                    <img src="https://i.ibb.co/f43vK21/Brown-Illustration-Cookies-Logo-2.png"
                        alt="Brown-Illustration-Cookies-Logo-2" class="d-inline-block align-top" alt=""
                        style="height:60px">

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('produtos.index') }}">Produtos <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('fornecedores.index') }}">Minha conta</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('produtos.createP.create') }}">Cadastrar Produto</a>
                            </li>
                        </ul>
                    </div>


                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline 600 small" style="color: white">
                                    {{auth()->user()->name}}
                                </span>
                                <i class="fa fa-user"></i>
                            </a>

                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <form method="POST" action="{{route('fornecedores.loginF.destroy')}}">
                                    @csrf
                                    <button class="dropdown-item" type="submit">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Sair
                                    </button>
                                </form>
                            </div>
                        </li>

                    </ul>
                    @else
                    <a class="navbar-brand" href="#">LaraFeiras</a>

                    <img src="https://i.ibb.co/f43vK21/Brown-Illustration-Cookies-Logo-2.png"
                        alt="Brown-Illustration-Cookies-Logo-2" class="d-inline-block align-top" alt=""
                        style="height:60px">

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('produtos.index') }}">Produtos <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('fornecedores.index') }}">Login</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('fornecedores.createF.create') }}">Criar conta</a>
                            </li>
                        </ul>
                    </div>
                    @endif
                </nav>
                <div class="container-fluid">
                    <main class="pb-5">
                        <h2 style="margin-top: 15px;">FEIRAS</h2>
                        <div class="row">
                            <!-- BOTÃO DE PESQUISA -->
                            <div class="col-12 col-md-5">
                                <form method="post" action="{{ route('feiras.search') }}"
                                    class="justify-content-center justify-content-md-start mb-3 mb-md-0">
                                    @csrf
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="search" id="search" class="form-control"
                                            placeholder="Digite aqui o que procura" style="margin-top:3px">
                                        <button class="btn btn-primary" style="background-color: #5F9EA0"><i
                                                class="fa fa-search"></i></button>
                                    </div>

                                    
                                </form>

                                {{-- @if(isset($filters))
                                    {{ $feiras->appends($filters)->links() }}
                                @else
                                {{ $feiras->links() }}
                                @endif --}}
                            </div>
                            @if (isset(auth()->user()->name))
                            <a href="{{ route('feiras.create') }}" class="btn btn-primary"
                                style="background-color: #5F9EA0">Adicionar feira</a>
                            @endif

                        </div>

                        <table class="table mt-4">
                            <thead class="thead bg-white">
                                <tr>
                                    <th>Nome</th>
                                    <th>data</th>
                                    <th>rua</th>
                                    <th>bairro</th>
                                    <th>cidade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- CONTEÚDO DA TABELA -->
                                @foreach ($feiras as $feira )
                                <tr>
                                    <td class="align-middle">{{ $feira->nome}}</td>
                                    <td class="align-middle">{{ $feira->data}}</td>
                                    <td class="align-middle">{{ $feira->rua}}</td>
                                    <td class="align-middle">{{ $feira->bairro}}</td>
                                    <td class="align-middle">{{ $feira->cidade}}</td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </main>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>

    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-mask/jquery.mask.min.js') }}"></script>

    @yield('js')

</body>

</html>