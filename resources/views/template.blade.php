@extends('general')

@section('head')

    <title>Jauz Cosmetics</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/custom.css') }}">
    @notifyCss
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/templatemo.css') }}">
    <script defer src="{{ URL::asset('assets/js/jquery-1.11.0.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/custom.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('https://unpkg.com/leaflet@1.7.1/dist/leaflet.css') }}"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    {{-- @vite(['resources/js/app.js', 'resources/css/app.scss']) --}}
@endsection


@section('nav')
    <nav class="navbar  bgpropio navbar-expand-lg  navbar-light shadow sticky-top">
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
                            <a class="nav-link fw-bolder" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bolder" href="{{ route('allProducts') }}">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bolder" href="{{ route('contact') }}">Contacto</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="dropdown text-decoration-none ">
                        <button
                            class="nav-icon position-relative text-decoration-none btn nav-link fw-bolder text-white dropdown-toggle"
                            type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                            @if (Auth::user())
                                <span
                                    class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">

                                    {{ count(Auth::user()->cart->products) }}
                                </span>
                            @endif
                        </button>
                        {{-- aqui emplieza el dropdown de cart --}}


                        {{-- aqu?? crearemos un foreach para recorrer lo que haya en el carrito ---------------------------------------- --}}
                        <ul class="dropdown-menu dropdown-cart" role="menu">
                            @if (Auth::user())
                                @foreach (Auth::user()->cart->products as $product)
                                    <li>
                                        <span class="item">
                                            <div class="d-flex">
                                                <span class="item-left">
                                                    <img src="/assets/img/{{ $product->id }}/{{ $product->id }}_0.jpg"
                                                        alt="" style="width: 50px" />
                                                    <span class="item-info">
                                                        <span>{{ $product->name }}</span>
                                                        <span>{{ $product->price }}???</span>
                                                    </span>
                                                </span>
                                                <span class="item-right">
                                                    <form action="{{ route('cart.eliminar', $product->id) }}"
                                                        method="POST" class="justify-content-center">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn text-white btn-danger btn-sm me-1 mb-2"
                                                            data-mdb-toggle="tooltip" title="Remove item">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </span>
                                            </div>
                                        </span>
                                    </li>
                                @endforeach
                            @endif
                            {{-- hasta aqu?? el foreach ------------------------------------------------------------------------------------ --}}
                            {{-- esto no se borra viene luego del foreach --}}
                            <hr class="my-4" />
                            <li class=" text-center">
                                @if (!Auth::user())
                                    <strong>Para ver el carrito necesitas loguearte </strong> <br>
                                    <a class="text-dark" href="{{ route('login') }}">({{ __('Login') }})</a>
                                @else
                                    <a class="text-dark" href="{{ route('cart.details') }}">Ver carrito</a>
                                @endif
                            </li>
                        </ul>
                        {{-- aqu?? termina --}}
                    </div>
                    <div class="dropdown text-decoration-none ">
                        <button
                            class="nav-icon position-relative text-decoration-none btnnav-link fw-bolder text-white dropdown-toggle"
                            type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-cart bgpropio dropdown-menu dropdown-menu-end dropdown-menu-start"
                            role="menu">
                            @if (!Auth::user())
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <div class="dropdown text-center">
                                    <li class="nav-item"><a class="dropdown-item"
                                            href="{{ route('profile') }}">{{ Auth::user()->username }}</a>
                                    </li>
                                    @if (Auth::user()->rol == 'admin')
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="{{ route('table') }}">{{ __('Panel admin') }}</a>
                                        </li>
                                    @endif
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                    </li>
                                    <form id="logout-form" name="logout-form" action="{{ route('logout') }}"
                                        method="POST" class="d-none">
                                        @csrf
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
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
                        <li><a class="text-decoration-none" href="{{ route('maquillaje') }}">Maquillaje</a></li>
                        <li><a class="text-decoration-none"href="{{ route('accesorio') }}">Accesorios</a></li>
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
                <img alt="Licencia de Creative Commons" style="border-width:0"
                    src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" />
            </a>
        </div>
    </footer>
    @notifyJs
    <x:notify-messages />
@endsection
