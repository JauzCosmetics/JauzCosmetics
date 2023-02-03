@extends('template')

@section ('adminTable')
<h1>Notas desde base de datos</h1>
<table class="table">
<thead>
<tr>
<th>Nombre</th>
<th>Descripción</th>
</tr>
</thead>
@foreach ($products as $product)
<tr>
<td>{{$product -> nombre}}</td>
<td>{{$product -> description}}</td>
<td><a href="{{{'admin/'.$product->id}}}"><button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button></a></td>
<td><a href="{{route('admin.editar',$product)}}"><button class="btn btn-secondary" type="submit"><i class="bi bi-pencil"></i></button></a></td>
<td><form action="{{ route('admin.eliminar', $product->id) }}" method="POST" class="d-inline">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger" type="submit"><i class="bi bi-trash"></i></button>
    </form></td>
</tr>
@endforeach
</table>

<form action="{{ route('admin.crear') }}" method="POST">
    <h1>Crear una nota nueva</h1>
    @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
    <input type="text" name="nombre" placeholder="Nombre de la nota" class="form-control mb-2" autofocus>
    <input type="text" name="description" placeholder="Descripción de la nota" class="form-control mb-2">
    <button class="btn btn-primary btn-block" type="submit">Enviar</button>
    @if (session('mensaje'))
        <div class="alert alert-success" role="alert">
        {{ session('mensaje') }}
        </div>
    @endif
    @error('nombre') <div class="alert alert-danger"> No olvides rellenar el nombre </div> @enderror
    @endsection