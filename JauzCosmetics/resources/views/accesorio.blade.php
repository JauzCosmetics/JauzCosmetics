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
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="{{route('maquillaje')}}">
                        Maquillaje
                    </a>
                </li>
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="{{route('accesorio')}}">
                        Accesorios
                    </a>
                </li>

            </ul>
        </div>
        <div class="col-lg-9">
            <div class="row">
                @foreach ($products as $product)
                {{-- aquí comienza la carta que se generará al pasar la categoria y todo lo que haya dentro d esta categoría --}}
                @if ($product -> category_id === 2)
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="assets/img/shop_01.jpg">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        {{-- <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li> --}}
                                        <li><a class="btn bgpropio text-white mt-2" href="./article"><i class="far fa-eye"></i></a></li>
                                        <li><a class="btn bgpropio text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none">{{$product -> name}}</a>

                                <p class="text-center mb-0">{{$product -> price}}€</p>
                            </div>
                        </div>
                    </div>
                @endif
                @endforeach
                {{-- aqui finalia la carta las demás sobran solo estan a modo de poder ver el diseño final --}}
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
