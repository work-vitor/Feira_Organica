@extends('layouts.standard_body')
@section('title')
Larafeira - Home
@endsection

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="background-color: #e9faff;">

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







                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800" style="margin-top: 15px;">PRODUTOS</h1>

                    <main class="pb-5">
                        <!-- CONTEÚDO -->

                        <div class="container">
                            <div class="row">
                                <!-- BOTÃO DE PESQUISA -->
                                <div class="col-12 col-md-5">
                                    <form method="post" action="{{ route('produtos.search') }}"
                                        class="justify-content-center justify-content-md-start mb-3 mb-md-0">
                                        @csrf
                                        <div class="input-group input-group-sm">
                                            <input type="text" name="search" id="search" class="form-control"
                                                placeholder="Digite aqui o que procura">
                                            <button class="btn btn-danger">
                                                Buscar
                                            </button>
                                        </div>
                                    </form>

                                    {{-- @if(isset($filters))
                                    {{ $produtos->appends($filters)->links() }}
                                    @else
                                    {{ $produtos->links() }}
                                    @endif --}}
                                </div>
                            </div>
                            <hr class="mt-12">
                            <div class="row">
                                @foreach($produtos as $produto)
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
                                    <div class="card text-center bg-light">
                                        <img src="{{url("storage/{$produto->imagem}")}}" alt="" class="card-img-top"
                                            height="220px">
                                        <div class="card-header">
                                            <td>R$ {{ $produto->preco }}</td>
                                        </div>


                                        <a class="btn btn-primary" href="{{ route('feiras.index', $produto->categoria->id) }}">
                                        <td> {{ $produto->feira->nome }}</td>

                                            </a>
                                            
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <td>{{ $produto->nome }}</td>
                                            </h5>


                                            <p class="card-text">
                                                Para fazer seu pedido, entre em contato com o forncedor
                                            </p>
                                        </div>


                                        <div class="card-footer">
                                            <form class="d-block">
                                                <button class="btn btn-danger">
                                                    Entrar em contato com o fornecedor
                                                </button>
                                            </form>
                                            <small class="text-success">
                                                <td>{{ $produto->quantidade }}</td> {{ $produto->tp_unidade}}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>


                    </main>

                </div>

                <div class="container mt-5">
                    <div class="d-flex">
                        {{ $produtos->links() }}
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            @extends('layouts.end_html')