@extends('layout.plantilla')

@section('titulo', 'Crear Nuevo registro')

@section('contenido')

<div class="card">
    <h5 class="card-header">Agregar Tienda</h5>
    <div class="card-body">

      <p class="card-text">
        <form action="{{ route('tiendas.store')}}" method="POST">
            @csrf

            <label for="">Clave</label>
            <input type="text" name="clave" class="form-control" required>

            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>

            <label for="">Foto</label>
            <input type="file" name="foto" class="form-control" required>

            <a href="{{route('tiendas.index')}}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>  Regresar</a>
            <button class="btn btn-primary"><i class="fa-solid fa-check"></i>  Agregar</button>



        </form>


      </p>
    </div>
  </div>


  @endsection
