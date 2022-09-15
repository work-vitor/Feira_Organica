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
                <h1 class="h3 mb-4 text-gray-800">Editar Produto</h1>

                <main class="pb-5">
                    <!-- CONTEÚDO -->
                    <div class="row">
                        <form action="{{ route('produtos.updateP.update', $produto->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nome">Nome</label>
                                        <input type="text" name="nome" id="nome"
                                            class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}"
                                            placeholder="Digite o nome do produto"
                                            value="{{ $produto->nome }}">
                                        <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="categoria_id">Categoria</label>
                                        <select name="categoria_id" id="categoria_id"
                                            class="form-control {{ $errors->has('categoria_id') ? 'is-invalid' : '' }}">
                                            <option value="1">teste</option>
                                            <!-- Foreach com as categorias -->
                                        </select>
                                        <div class="invalid-feedback">{{ $errors->first('categoria_id') }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="preco">Preço</label>
                                        <input type="text" name="preco" id="preco"
                                            class="form-control {{ $errors->has('preco') ? 'is-invalid' : '' }}"
                                            placeholder="Digite o valor do produto"
                                            value="{{ $produto->preco }}">
                                        <div class="invalid-feedback">{{ $errors->first('preco') }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="quantidade">Quantidade</label>
                                        <input type="number" name="quantidade" id="quantidade"
                                            class="form-control {{ $errors->has('quantidade') ? 'is-invalid' : '' }}"
                                            placeholder="Informe a quantidade do produto"
                                            value="{{ $produto->quantidade }}">
                                        <div class="invalid-feedback">{{ $errors->first('quantidade') }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="imagem">Imagem</label>
                                        <input type="file" name="imagem" id="imagem" class="form-control p-1"
                                            required
                                            disabled>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" value="fornecedor{{ auth()->user()->id }}" name="pastaFornecedor"
                                id="pastaFornecedor">

                            <button type="submit" class="btn btn-success btn-block mt-3">
                                Enviar
                            </button>
                        </form>
                    </div>
                </main>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        @extends('layouts.end_html')
