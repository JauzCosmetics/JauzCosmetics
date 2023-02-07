@extends('general')

@section('head')
    <title>Jauz Cosmetics</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/"> --}}
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/custom.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{URL::asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/slick.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/templatemo.css')}}">
    <script defer src="{{URL::asset('assets/js/jquery-1.11.0.min.js')}}"></script>
    <script defer src="{{URL::asset('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script defer src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script defer src="{{URL::asset('assets/js/custom.js')}}"></script>
    {{-- <script defer src="{{URL::asset('assets/js/templatemo.js')}}"></script> --}}
    <link rel="stylesheet" href="{{URL::asset('https://unpkg.com/leaflet@1.7.1/dist/leaflet.css')}}" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
@endsection

@section('nav')
    <nav class="navbar  bgpropio navbar-expand-lg  navbar-light shadow sticky-top" >
        <div class="container d-flex justify-content-between align-items-center">

            <p class="navbar-brand text-white logo h1 align-self-center">
                Jauz Cosmetics
            </p>

            <button class="navbar-toggler border-0 bg-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between"
                id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link fw-bolder" href="{{route('index')}}">Home</a>
                        </li>
                        <div class="dropdown ">
                            <button class="btn bgpropio nav-link fw-bolder text-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Shop
                            </button>
                            <ul class="dropdown-menu text-white  bgpropio " aria-labelledby="dropdownMenuButton1">
                                {{-- nuevas vistas para maquillaje y accesorios cambiar la vista de product--}}
                              <li><a class="dropdown-item" href="{{route('maquillaje')}}">Maquillaje</a></li>
                              <li><a class="dropdown-item" href="{{route('accesorio')}}">Accesorios</a></li>
                            </ul>
                          </div>
                        <li class="nav-item">
                            <a class="nav-link fw-bolder" href="{{route('contact')}}">Contacto</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-secondary mr-1"></i>
                        <span
                            class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="{{route('login')}}">
                        <i class="fa fa-fw fa-user text-secondary mr-3"></i>
                        <span
                            class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">9</span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
@endsection

@section('modal')
<div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="w-100 pt-1 mb-5 text-right">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="get" class="modal-content modal-body border-0 p-0">
            <div class="input-group mb-2">
                <input type="text" class="form-control" id="inputModalSearch" name="buscador" placeholder="Buscar ...">
                <button type="submit" class="input-group-text colorPropio text-light">
                    <i class="fa fa-fw fa-search text-white"></i>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('footer')
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-white  border-bottom pb-3 border-light logo">Jauz Shop</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            calle del viento
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">95-472-xx-xx</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="jauzcosmetics@gmail.com">jauzcosmetics@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Productos</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="{{route('maquillaje')}}">Maquillaje</a></li>
                        <li><a class="text-decoration-none"href="{{route('accesorio')}}">Accesorios</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">+Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="/about">Sobre nosotros</a></li>
                        <li><a class="text-decoration-none" href="/contact">Contacto</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i
                                    class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank"
                                href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i
                                    class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank"
                                href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="w-100 bg-black py-3 text-center">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2023 Jauz Company
                        </p>
                    </div>
                </div>
            </div>
            <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">
                <img alt="Licencia de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" />
            </a>
        </div>
    </footer>

@endsection

