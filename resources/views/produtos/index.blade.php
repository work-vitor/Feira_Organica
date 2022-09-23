@extends('layouts.standard_body')
@section('title')
    Larafeira - Home
@endsection

<body id="page-top">

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
            </li>



            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="background-color: #e9faff;">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow"
                    style="background-color: #e9faff;">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    @if (isset(auth()->user()->name))
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    {{auth()->user()->name}}
                                </span>
                                <i class="fa fa-user"></i>
                            </a>
                            
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
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
                    @endif

                            

                    

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">PRODUTOS</h1>

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
                                                <td>{{ $produto->quantidade }}</td> dúzias em estoque
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
