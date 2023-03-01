@extends('template')

@section('about')
    <section class="bgpropio py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1 class="pb-3"><strong>Sobre nosotros</strong></h1>
                    <p>
                        Dedicados a la venta online de productos cosméticos y accesorios. <br>
                        Apertura de futuras tiendas físicas a nivel nacional, reclamadas por nuestros clientes.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/makeup.png" alt="make up">
                </div>
            </div>
        </div>
    </section>
    <!-- Close Banner -->



    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">¿Dónde estamos?</h1>
        </div>
    </div>

    <!-- Start Map -->
    <div id="mapid" style="width: 100%; height: 300px;"></div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <script>
        let mymap = L.map('mapid').setView([37.406851, -5.9321853, 17], 17);

        L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                maxZoom: 18,
                attribution: 'Zay Telmplte | Template Design by <a href="https://templatemo.com/">Templatemo</a> | Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1
            }).addTo(mymap);

        L.marker([37.406851, -5.9321853, 17], 17).addTo(mymap)
            .bindPopup("<b>Jauz group</b><br />Location.").openPopup();

        mymap.scrollWheelZoom.disable();
        mymap.touchZoom.disable();
    </script>
    <!-- Ena Map -->

    <!-- Start Brands -->
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Nuestras marcas</h1>
                </div>
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col ">
                            <div class="carousel  slide carousel-multi-item pt-2 pt-md-0" id="templatemo-slide-brand"
                                data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap " role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active ">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <img class="img-fluid brand-img" src="assets/img/mac.png" alt="Brand Logo">
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <img class="img-fluid brand-img" src="assets/img/loreal.png"
                                                    alt="Brand Logo">
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <img class="img-fluid brand-img" src="assets/img/guerlain.png"
                                                    alt="Brand Logo">
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <img class="img-fluid brand-img" src="assets/img/gillette.png"
                                                    alt="Brand Logo">
                                            </div>
                                        </div>
                                    </div>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <img class="img-fluid brand-img pt-4" src="assets/img/clarins.png"
                                                    alt="Brand Logo">
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <img class="img-fluid brand-img" src="assets/img/dior.png" alt="Brand Logo">
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <img class="img-fluid brand-img pt-4" src="assets/img/blender.png"
                                                    alt="Brand Logo">
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <img class="img-fluid brand-img" src="assets/img/sisley.png"
                                                    alt="Brand Logo">
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Second slide-->
                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->

                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brands-->
@endsection
