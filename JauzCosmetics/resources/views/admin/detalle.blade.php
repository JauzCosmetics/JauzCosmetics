@extends('template')

@section('detalle')
  <div class="container !direction !spacing">   
      <h1>Detalle de la nota</h1>
      <h3>ID: {{ $product -> id }}</h3>
      <h3>Nombre: {{ $product -> nombre }}</h3>
      <h3>Descripción: {{ $product -> description }}</h3> 
  </div>
@endsection