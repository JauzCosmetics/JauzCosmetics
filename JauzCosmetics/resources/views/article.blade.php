@extends('template')


@section('article')
    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-6 mt-5 p-lg-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" style="max-width: 640px; max-height: 526px;"
                            src="/assets/img/{{ $product->id }}/{{ $product->id }}_0.jpg" alt="Card image cap"
                            id="product-detail">
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark fas fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item "
                            data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" style="max-width: 120px; max-height: 110px;"
                                                    src="/assets/img/{{ $product->id }}/{{ $product->id }}_0.jpg"
                                                    alt="Product Image 1">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" style="max-width: 120px; max-height: 110px;"
                                                    src="/assets/img/{{ $product->id }}/{{ $product->id }}_1.jpg"
                                                    alt="Product Image 2">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" style="max-width: 120px; max-height: 110px;"
                                                    src="/assets/img/{{ $product->id }}/{{ $product->id }}_2.jpg"
                                                    alt="Product Image 3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" style="max-width: 120px; max-height: 110px;"
                                                    src="/assets/img/{{ $product->id }}/{{ $product->id }}_3.jpg"
                                                    alt="Product Image 4">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" style="max-width: 120px; max-height: 110px;"
                                                    src="/assets/img/{{ $product->id }}/{{ $product->id }}_4.jpg"
                                                    alt="Product Image 5">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" style="max-width: 120px; max-height: 110px;"
                                                    src="/assets/img/{{ $product->id }}/{{ $product->id }}_5.jpg"
                                                    alt="Product Image 6">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.Second slide-->

                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-dark fas fa-chevron-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-6 mt-5 p-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">{{ $product->name }}</h1>
                            <p class="h3 py-2">{{ $product->price }}€</p>
                            <ul class="list-inline">
                                <li>
                                    <h6>Producto:</h6>
                                    <p class="text-muted"><strong>{{ $product->category }}</strong></p>
                                </li>
                                <li>
                                    <h6>Descripción:</h6>
                                    <p>{{ $product->description }}</p>
                                </li>
                            </ul>

                            <form action="" method="POST">


                                <form action="" method="POST">
                                    <input type="hidden" name="product-title" value="Activewear">

                                    <div class="row pb-3">
                                        <div class="col d-grid">
                                            <button type="submit" class="btn bgpropio text-white m-0 p-0 btn-lg"
                                                name="submit" value="viewCart">
                                                <p class="m-0">Añadir al carrito</p>
                                            </button>
                                        </div>
                                        <div class="col d-grid">
                                            <a href="{{ route('allProducts') }}" type="button"
                                                class="btn bgpropio text-white text-decoration-none btn-lg" name="submit"
                                                value="addcart">Seguir comprando</a>
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script defer src="{{ URL::asset('assets/js/templatemo.js') }}"></script>
    </section>
@endsection
