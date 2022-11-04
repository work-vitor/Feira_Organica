@extends('layouts.standard_body')
@section('title')
    Larafeira - Fornecedor
@endsection

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <div class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-calendar-check"></i>
            </div>
            <div class="sidebar-brand-text mx-3">LaraFeira</div>
        </div>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
            <a class="nav-link" href="{{ route('produtos.createP.create') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Cadastrar Produtos</span>
            </a>
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Editar Produtos</span>
            </a>
        </li>



        <!-- Divider -->
        <!-- <hr class="sidebar-divider"> -->

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

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
                <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

                <main class="pb-5">
                    <!-- CONTEÚDO -->
                    Dashboard do fornecedor
                    <hr>
                    <div class="card-body">
                        <form method="POST"action="">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Deletar minha conta</button>
                            <a href="{{ route('fornecedores.updateF', auth()->user()->id) }}" class="btn  btn-primary">
                                <i class="fa fa-edit"></i>
                            </a>
                        </form>
                    </div>
                    <div class="d-flex align-items-center">

                    </div>
                </main>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary text-white">Meus dados:</div>

                            <div class="card-body">
                                <ul class="list-group text-center">



                                    <li class="list-group-item">
                                        <a><img src="{{ url('storage') . '/' . auth()->user()->foto }}" 
                                        width="400" height="400"></a>
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
