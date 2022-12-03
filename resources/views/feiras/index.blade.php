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
                <div class="sidebar-brand-text mx-3">Feira Organica</div>
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
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                </nav>
                <div class="container-fluid">
                    <main class="pb-5">
                        <h2>FEIRAS</h2>
                        <div class="row">
                                <!-- BOTÃO DE PESQUISA -->
                                <div class="col-12 col-md-5">
                                    <form method="post" action="{{ route('feiras.search') }}"
                                        class="justify-content-center justify-content-md-start mb-3 mb-md-0">
                                        @csrf
                                        <div class="input-group input-group-sm">
                                            <input type="text" name="search" id="search" class="form-control"
                                                placeholder="Digite aqui o que procura" style="margin-top:3px">
                                            <button class="btn btn-primary">
                                                Buscar
                                            </button>
                                        </div>
                                    </form>

                                    {{-- @if(isset($filters))
                                    {{ $feiras->appends($filters)->links() }}
                                    @else
                                    {{ $feiras->links() }}
                                    @endif --}}
                                </div>
                                <a href="{{ route('feiras.create') }}" class="btn btn-primary">Adicionar feira</a>

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
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>&copy; LaraEvents {{ date('Y') }}</span>
                </div>
            </div>
            <div class="container mt-5">
                    <div class="d-flex">
                        {{ $feiras->links() }}
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
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-mask/jquery.mask.min.js') }}"></script>

    @yield('js')

</body>

</html>