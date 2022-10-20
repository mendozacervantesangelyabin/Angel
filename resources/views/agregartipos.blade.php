@extends('layout.plantilla')

@section('titulo', 'Crear Nuevo registro')

@section('contenido')

<div class="card">
    <h5 class="card-header">Agregar Tipo</h5>
    <div class="card-body">

      <p class="card-text">
        <form action="{{ route('tipos.store')}}" method="POST">
            @csrf
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>

            <label for="">Detalle</label>
            <input type="text" name="detalle" class="form-control" required>

            <label for="">Activo</label>
            <input type="text" name="activo" class="form-control" required>

            <a href="{{route('tipos.index')}}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>  Regresar</a>
            <button class="btn btn-primary"><i class="fa-solid fa-check"></i>  Agregar</button>



        </form>


      </p>
    </div>
  </div>


  @endsection
