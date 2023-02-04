@extends('template')

@section('crear')
<form action="{{ route('admin.crear') }}" method="POST">
  <h1>Crear una nota nueva</h1>
  @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
  <input type="text" name="name" placeholder="Nombre de la nota" class="form-control mb-2" autofocus>
  <input type="text" name="description" placeholder="Descripción de la nota" class="form-control mb-2">
  <button class="btn btn-primary btn-block" type="submit">Enviar</button>
  @if (session('mensaje'))
      <div class="alert alert-success" role="alert">
      {{ session('mensaje') }}
      </div>
  @endif
  @error('nombre') <div class="alert alert-danger"> No olvides rellenar el nombre </div> @enderror
@endsection