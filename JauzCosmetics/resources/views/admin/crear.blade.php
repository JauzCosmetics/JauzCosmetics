@extends('template')

@section('crear')
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" action="{{ route('admin.guardar') }}" method="POST">
                <h1>Crear un producto</h1>
                @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
                <input type="text" name="name" placeholder="Nombre del producto" class="form-control mb-2" autofocus>
                <input type="text" name="price" placeholder="Precio del producto" class="form-control mb-2">
                <input type="text" name="stock" placeholder="Cantidad de unidades del producto"
                    class="form-control mb-2">
                <input type="text" name="description" placeholder="Descripción del producto" class="form-control mb-2">
                {{--             <label for="category">Elige una categoría</label>
                <select id="category" name="category">
                    <option value="maquillaje">Maquillaje</option>
                    <option value="accesorio">Accesorios</option>
                </select>
            <input type="file" name="fotosProd[0]">
            <button type="submit">GUARDAR</button> --}}
                <a href="admin">
                    <button class="btn btn-primary btn-block" type="submit">Enviar</button>
                </a>

                @if (session('mensaje'))
                    <div class="alert alert-success" role="alert">
                        {{ session('mensaje') }}
                    </div>
                @endif

                @error('name')
                    <div class="alert alert-danger"> El nombre es obligatorio </div>
                @enderror

                @error('price')
                    <div class="alert alert-danger"> El precio es obligatorio </div>
                @enderror

                @error('stock')
                    <div class="alert alert-danger"> El stock es obligatorio </div>
                @enderror

                @error('description')
                    <div class="alert alert-danger"> La descripción es obligatoria </div>
                @enderror
            </form>
        </div>
    </div>
@endsection
{{-- 
        @error('category')
            <div class="alert alert-danger"> La categoría es obligatoria </div>
        @enderror

        @error('fotosProd')
            <div class="alert alert-danger"> Las imágenes es obligatoria </div>
        @enderror --}}
