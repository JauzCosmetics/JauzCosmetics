@extends('template')

@section('editar')
<div class="container py-5 col-2">
    <div class="row py-5 text-center">
        <h2 class="mb-5">Editando el producto {{ $product->id }}</h2>

        @if (session('mensaje'))
            <div class="alert alert-success">{{ session('mensaje') }}</div>
        @endif
    
            <input type="text" name="price" placeholder="Descripción del producto" class="form-control mb-2"
            value="{{ $product-> price }}">
    
            <input type="text" name="stock" placeholder="Descripción del producto" class="form-control mb-2"
            value="{{ $product-> stock }}">
    
            <input type="text" name="description" placeholder="Descripción del producto" class="form-control mb-2"
            value="{{ $product-> description }}">
    
            <button class="btn btn-primary btn-block mt-5" type="submit">Guardar cambios</button>
    
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
        </form>   
    </div>
</div>





    
@endsection
