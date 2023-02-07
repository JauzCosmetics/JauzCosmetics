@extends('template')

@section('editar')
    <h2>Editando el producto {{ $product->id }}</h2>

    @if (session('mensaje'))
        <div class="alert alert-success">{{ session('mensaje') }}</div>
    @endif
    <form action="{{ route('admin.actualizar', $product-> id) }}" method="POST">
        @method('PUT') {{-- Necesitamos cambiar al método PUT para editar --}}
        @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}

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

        @error('category')
            <div class="alert alert-danger"> La categoría es obligatoria </div>
        @enderror

        @error('fotosProd')
            <div class="alert alert-danger"> Las imágenes es obligatoria </div>
        @enderror

        <input type="text" name="name" class="form-control mb-2" value="{{ $product-> name }}"
            placeholder="Nombre del producto" autofocus>
        <input type="text" name="description" placeholder="Descripción del producto" class="form-control mb-2"
            value="{{ $product-> description }}">
        <button class="btn btn-primary btn-block" type="submit">Guardar cambios</button>
    </form>
@endsection
