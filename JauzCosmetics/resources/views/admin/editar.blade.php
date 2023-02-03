@extends('template')

@section ('editar')
<h2>Editando el producto {{ $product -> id }}</h2> 

@if (session('mensaje')) 
    <div class="alert alert-success">{{ session('mensaje')}}</div> 
@endif 

<form action="{{ route('admin.actualizar', $product -> id) }}" method="POST"> 
    @method('PUT') {{-- Necesitamos cambiar al método PUT para editar --}} 
    @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}} 

    @error('nombre') 
        <div class="alert alert-danger"> El nombre es obligatorio </div> 
    @enderror 

    @error('description') 
        <div class="alert alert-danger"> La descripción es obligatoria </div> 
    @enderror 

    <input type="text" name="nombre" class="form-control mb-2" value="{{ $product -> nombre }}" placeholder="Nombre de la nota" autofocus > 
    <input type="text" name="description" placeholder="Descripción de la nota" class="form-control mb-2" value="{{ $product -> description }}" > 
    <button class="btn btn-primary btn-block" type="submit">Guardar cambios</button> 
</form>
@endsection