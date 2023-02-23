@extends('template')

@section('cart')
    <section class=" gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Carrito de compra</h5>
                        </div>
                        <div class="card-body pb-0">
                            <!-- Single item -->
                            @foreach ($products as $product)
                                {{-- for --}}
                                <div class="row">
                                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                        <!-- Image -->
                                        <div class="zoom bg-image rounded" data-mdb-ripple-color="light">
                                            <img src="/assets/img/{{ $product->id }}/{{ $product->id }}_0.jpg"
                                                class="w-100" alt="Blue Jeans Jacket" />
                                        </div>
                                        <!-- Image -->
                                    </div>

                                    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                        <!-- Data -->
                                        <p><strong>{{ $product->name }}</strong></p>
                                        <p><strong>{{ $product->price }}€</strong></p>
                                        <form action="{{ route('cart.eliminar', $product->id) }}" method="POST"
                                            class="justify-content-center">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn text-white btn-danger btn-sm me-1 mb-2"
                                                data-mdb-toggle="tooltip" title="Remove item">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>

                                        <!-- Data -->
                                    </div>

                                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                        <!-- Quantity -->
                                        <div class="d-flex mb-4 mt-5 " style="max-width: 300px">
                                            <a href="{{ route('cart.lessAmount', $product->id) }}">
                                                <button class="btn bgpropio px-3 me-2 text-white">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </a>

                                            <div class="form-outline col-4">
                                                <input id="form1" min="1" name="amount"
                                                    value="{{ $product->pivot->amount }}" type="number"
                                                    class="form-control form-control-sm" />
                                            </div>
                                            <a href="{{ route('cart.moreAmount', $product->id) }}">
                                                <button class="btn bgpropio px-3 ms-2 text-white">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </a>
                                        </div>
                                        <!-- Quantity -->

                                        <!-- Price -->
                                        <p class="text-start text-md-center">
                                            {{-- Obtenemos el precio de la tabla product por la cantidad obtenida en la tabla pivote product_cart --}}
                                            <strong>{{ $product->price * $product->pivot->amount }}€</strong>
                                        </p>
                                        <!-- Price -->
                                    </div>
                                </div>
                                <!-- Single item -->

                                <hr class="my-4" />
                                {{-- end for --}}
                            @endforeach
                        </div>

                    </div>

                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body d-flex">
                            <p class="px-2"><strong>Aceptamos</strong></p>
                            <img class="me-2" width="45px"
                                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                                alt="Visa" />
                            <img class="me-2" width="45px"
                                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                                alt="American Express" />
                            <img class="me-2" width="45px"
                                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                                alt="Mastercard" />
                            <img class="me-2" width="45px"
                                src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/pp-acceptance-small.png"
                                alt="Buy now with PayPal" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Resumen</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Productos
                                    <span>{{ count($products) }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Envío
                                    <span>Gratis</span>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Total a pagar</strong>
                                        <strong>
                                            <p class="mb-0">(IVA incluido)</p>
                                        </strong>
                                    </div>
                                    <span><strong>{{ $total }}€</strong></span>
                                </li>
                            </ul>
                            <div class="text-white ms-4">

                                <form action="{{ route('order.buy') }}" method="POST"
                                    class="row justify-content-center">
                                    <input type='number' name="order_id" hidden>
                                    @method('POST')
                                    @csrf
                                    <button class="btn bgpropio text-white text-decoration-none btn-lg"
                                        type="submit">Añadir al carrito</button>
                                </form>
         {{--                        <a href="{{ route('order.buy') }}" type="button" method='POST'
                                    class="btn bgpropio btn-lg btn-block text-white ms-4 text-center ">
                                    Seguir comprando
                                </a> --}}
                                <a href="{{ route('order.buy') }}" type="button"
                                    class="btn bgpropio btn-lg btn-block text-white ms-3">
                                    Pagar

                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
