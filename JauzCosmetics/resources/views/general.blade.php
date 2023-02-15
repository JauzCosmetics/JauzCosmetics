<!DOCTYPE html>
<html lang="en">
@yield('head')

<body>

    @include('notify::components.notify')

    {{-- <div id="loader" class="spinner-border text-dark" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <div id="all" hidden> --}}
        @yield('nav')
        @yield('modal')
        @yield('carrousel')
        @yield('novedades')
        @yield('bestSeller')
        @yield('article')
        @yield('crear')
        @yield('detalle')
        @yield('editar')
        @yield('products')
        @yield('contact')
        @yield('adminTable')
        @yield('about')
        @yield('cart')
        @yield('login')
        @yield('register')
        @yield('footer')
    {{-- </div> --}}
</body>

</html>
