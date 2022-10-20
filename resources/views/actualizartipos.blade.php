@extends('layout.plantilla')

@section('titulo', 'Actualizar')

@section('contenido')

<div class="card">
    <h5 class="card-header">Actualizar Tipo</h5>
    <div class="card-body">

      <p class="card-text">
        <form action="{{route('tiendas.update',  $tiendas->id_tienda)}}" method="POST">
            @csrf
            @method("PUT")

            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required value="{{$tipos->nombre}}">

            <label for="">Detalle</label>
            <input type="text" name="detalle" class="form-control" required value="{{$tipos->detalle}}">

            <label for="">Activo</label>
            <input type="text" name="activo" class="form-control" required value="{{$tipos->activo}}">

            <a href="{{route('tiendas.index')}}" class="btn btn-primary">Regresar</a>
            <button class="btn btn-primary">Actualizar</button>

        </form>


      </p>
    </div>
  </div>


  @endsection
