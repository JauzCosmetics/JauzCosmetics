@extends('template')

@section('products')
    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Categorias</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        {{-- aqui al pinchar debemos mostrar en las cartas que se generen de la tabla producto categoria maquillaje  --}}
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none"
                            href="{{ route('allProducts') }}">
                            @if ($category == 'allProducts')
                                <h3>Todo</h3>
                            @else
                                Todo
                            @endif
                        </a>
                    </li>
                    <li class="pb-3">
                        {{-- aqui al pinchar debemos mostrar en las cartas que se generen de la tabla producto categoria maquillaje  --}}
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none"
                            href="{{ route('maquillaje') }}">
                            @if ($category == 'maquillaje')
                                <h3>Maquillaje</h3>
                            @else
                                Maquillaje
                            @endif
                        </a>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none"
                            href="{{ route('accesorio') }}">
                            @if ($category == 'accesorio')
                                <h3>Accesorio</h3>
                            @else
                                Accesorio
                            @endif
                        </a>
                    </li>

                </ul>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    @foreach ($products as $product)
                        {{-- aquí comienza la carta que se generará al pasar la categoria y todo lo que haya dentro d esta categoría --}}

                        <div class="col-md-4">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid"
                                        src="/assets/img/{{ $product->id }}/{{ $product->id }}_0.jpg">
                                    <div
                                        class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li><a class="btn bgpropio text-white mt-2"
                                                    href="{{ route('article.details', $product->id) }}"><i
                                                        class="far fa-eye">
                                                    </i>
                                                </a>
                                            </li>
                                             {{-- comprobamos que esta logueado si NO lo está lo mandamos al login --}}
                                            @if (!Auth::user())
                                                <li><a href="{{ route('login') }}"
                                                        class="btn bgpropio text-white mt-2 text-decoration-none"
                                                        type="submit"><i class="fas fa-cart-plus"></i></a>
                                                </li>
                                                <form action="{{ route('login') }}" method="POST"
                                                    class="row justify-content-center">
                                                @else
                                                    <form action="{{ route('cart.addProduct', $product->id) }}"
                                                        method="POST" class="row justify-content-center">
                                                        <input type='number' name="product_id" value="{{ $product->id }}"
                                                            hidden>
                                                        @method('POST')
                                                        @csrf
                                                        <li><button
                                                                class="btn bgpropio text-white mt-2 text-decoration-none"
                                                                type="submit"><i class="fas fa-cart-plus"></i></button>
                                                        </li>
                                                    </form>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="shop-single.html" class="h3 text-decoration-none">{{ $product->name }}</a>

                                    <p class="text-center mb-0">{{ $product->price }}€</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- paginación --}}
        <div class="justify-content-center d-flex">
            {{ $products->links() }}
        </div>
    </div>
    <!-- End Content -->
@endsection
