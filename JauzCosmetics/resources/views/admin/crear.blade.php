@extends('layout.main')

@section('crear')
    <div class="container py-5">
        <div class="row py-5">

            <form class="col-md-9 m-auto" action="{{ route('admin.guardar') }}" method="POST" enctype="multipart/form-data">
                @if (session('mensaje'))
                <div class="alert alert-success">{{ session('mensaje') }}</div>
                @endif
                <h1>Crear un producto</h1>

                @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
                <input type="text" name="name" placeholder="Nombre del producto" class="form-control mb-2" autofocus>
                <input type="text" name="price" placeholder="Precio del producto" class="form-control mb-2">
                <input type="text" name="stock" placeholder="Cantidad de unidades del producto" class="form-control mb-2">
                <input type="text" name="description" placeholder="Descripción del producto" class="form-control mb-2">
                <select name="category" class="form-control mb-2 aria-label=" aria-label="Elija categoría" placeholder="Cantidad de unidades del producto"  Default select example>
                    <option disabled selected>Elija categoría</option>
                    <option value="1">Maquillaje</option>
                    <option value="2">Accesorios</option>
                  </select>
                <div class="mb-3 ">
                    {{-- <label for="formFileMultiple" class="form-label"></label> --}}
                    <input class="form-control" name="img[]" type="file" id="img" multiple>
                </div>
                <a href="admin">
                    <button class="btn btn-primary btn-block" type="submit">Guardar</button>
                </a>

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
@endsection
