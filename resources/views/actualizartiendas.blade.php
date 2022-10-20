@extends('layout.plantilla')

@section('titulo', 'Actualizar')

@section('contenido')

<div class="card">
    <h5 class="card-header">Actualizar Tienda</h5>
    <div class="card-body">

      <p class="card-text">
        <form action="{{route('tiendas.update',  $tiendas->id_tienda)}}" method="POST">
            @csrf
            @method("PUT")

            <label for="">Clave</label>
            <input type="text" name="clave" class="form-control" required value="{{$tiendas->clave}}">

            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required value="{{$tiendas->nombre}}">

            <label for="">Foto</label>
            <input type="file" name="foto" class="form-control" required value="{{$tiendas->foto}}">

            <a href="{{route('tiendas.index')}}" class="btn btn-primary">Regresar</a>
            <button class="btn btn-primary">Actualizar</button>

        </form>


      </p>
    </div>
  </div>


  @endsection
