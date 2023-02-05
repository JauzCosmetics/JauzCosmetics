@extends('template')

@section ('adminTable')
<div class="container">


<h3 class="text-center pt-5 pb-4">Gestión de los productos, bienvenido administrador.</h3>
<table class="table">
<thead>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Precio</th>
<th>Stock</th>
<th>Descripción</th>
<th>Imagen</th>
<th>Categoría</th>
</tr>
</thead>
{{-- Recorremos el compact que guardamos antes como 'products' --}}
@foreach ($products as $product)
<tr>
<td>{{$product -> id}}</td>
<td>{{$product -> name}}</td>
<td>{{$product -> price}}</td>
<td>{{$product -> stock}}</td>
<td>{{$product -> description}}</td>
<td>{{$product -> fotosProd}}</td>
<td>{{$product -> category_id}}</td>
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
    <h3 class="text-center pt-4 pb-5">Crear un nuevo producto
    @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
    <button class="btn btn-primary btn-block" type="submit">Crear</button></h3>
</div>
    @endsection
