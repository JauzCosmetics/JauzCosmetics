@extends('template')

@section('register')

    <section style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center p-5">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Registro de usuario</p>

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        {{-- @if (session('mensaje'))
                    <div class="alert alert-info text-center" role="alert">
                        <strong>Usuario creado correctamente</strong>
                    </div>
                    @endif --}}

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw pb-5"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input id="username" type="text"
                                                    class="form-control @error('username') is-invalid @enderror"
                                                    name="username" value="{{ old('username') }}" required
                                                    autocomplete="username" autofocus>
                                                <label for="username"
                                                    class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw pb-5"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" required autocomplete="email">
                                                <label for="email"
                                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw pb-5"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password">
                                                <label for="password"
                                                    class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw pb-5"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation" required autocomplete="new-password">
                                                <label for="password-confirm"
                                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirma tu contraseña') }}</label>
                                            </div>
                                        </div>


                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                        <div class="text-center">
                                            <p>Volver a <a href="{{ route('login') }}">Iniciar sesión</a></p>
                                        </div>

                                        @if (count($errors) > 0)
                                            <div class="alert alert-danger" role="alert">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection
