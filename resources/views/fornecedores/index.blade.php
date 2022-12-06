@extends('layouts.standard_body')
@section('title')
Larafeira - Fornecedor
@endsection

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
                <a class="navbar-brand" href="#">LaraFeiras</a>

                <img src="https://i.ibb.co/f43vK21/Brown-Illustration-Cookies-Logo-2.png"
                    alt="Brown-Illustration-Cookies-Logo-2" class="d-inline-block align-top" alt="" style="height:60px">

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

                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('feiras.create') }}">Cadastrar Feira</a>
                        </li>
                    </ul>
                </div>

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                {{ auth()->user()->name }}
                            </span>
                            <i class="fa fa-user"></i>
                        </a>

                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <form method="POST" action="{{ route('fornecedores.loginF.destroy') }}">
                                @csrf
                                <button class="dropdown-item" type="submit">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sair
                                </button>
                            </form>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800" style="margin-top: 10px">Dashboard do Fornecedor</h1>

                <main class="pb-5">
                    <!-- CONTEÚDO -->
                    Bem-Vindo {{ auth()->user()->name }}

                    <hr>
                    
                    
                </main>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary text-white">Meus dados:</div>
                            <div class="card-body">
                        <form method="POST" action="">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Deletar minha conta</button>
                            <a href="{{ route('fornecedores.updateF', auth()->user()->id) }}" class="btn  btn-primary">
                                <i class="fa fa-edit"></i>
                            </a>
                        </form>
                    </div>
                            <div class="card-body">
                                <ul class="list-group text-center">



                                    <li class="list-group-item">
                                        <a><img src="{{ url('storage') . '/' . auth()->user()->foto }}" width="200"
                                                height="200"></a>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="font-weight-bold mb-1">Nome: </span>
                                        {{ auth()->user()->name }}
                                    </li>
                                    <li class="list-group-item">
                                        <span class="font-weight-bold mb-1">Email: </span>
                                        {{ auth()->user()->email }}
                                    </li>
                                    <li class="list-group-item">
                                        <span class="font-weight-bold mb-1">CPF: </span>
                                        {{ auth()->user()->cpf }}
                                    </li>
                                    <li class="list-group-item">
                                        <span class="font-weight-bold mb-1">Celular: </span>
                                        {{ auth()->user()->celular }}
                                    </li>
                                    <li class="list-group-item">
                                        <span class="font-weight-bold mb-1">Segmento: </span>
                                        {{ auth()->user()->segmento }}
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        @extends('layouts.end_html')