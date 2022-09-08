<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LaraEvents</title>

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body id="page-top" >

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
            <div id="content" style="background-color: #e9faff;" >

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow" style="background-color: #e9faff;">

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
                                    <form class="justify-content-center justify-content-md-start mb-3 mb-md-0">
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control"
                                                placeholder="Digite aqui o que procura">
                                            <button class="btn btn-danger">
                                                Buscar
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <hr class="mt-12">
                            <div class="row">
                                @foreach($produtos as $produto)
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
                                    <div class="card text-center bg-light">
                                        <img src="{{url("storage/{$produto->imagem}")}}"
                                            alt="" class="card-img-top"></a>
                                        <div class="card-header">
                                            <td>R$ {{ $produto->preco }}</td>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <td>{{ $produto->nome }}</td>
                                            </h5>
                                            <p class="card-text">
                                                Alguma descrição qualquer se for ter
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
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer" style="background-color: #e9faff;">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>&copy; LaraFeira {{ date('Y') }}</span>
                    </div>
                </div>
            </footer>
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
    <script src="{{ asset('vendor/jquery/jquery.min.js.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>