@extends('layout.plantilla')

@section('titulo', 'Actualizar')

@section('contenido')

<div class="card">
    <h5 class="card-header">Actualizar Producto</h5>
    <div class="card-body">

      <p class="card-text">
        <form action="{{route('productos.update',  $productos->id_producto)}}" method="POST">
            @csrf
            @method("PUT")

            <label for="">Clave</label>
            <input type="text" name="clave" class="form-control" required value="{{$productos->clave}}">

            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required value="{{$productos->nombre}}">

            <label for="">Cantidad</label>
            <input type="text" name="cantidad" class="form-control" required value="{{$productos->cantidad}}">

            <label for="">Costo</label>
            <input type="text" name="costo" class="form-control" required value="{{$productos->costo}}">

            <label for="">ID Tipo</label>
            <input type="text" name="id_tipo" class="form-control" required value="{{$productos->id_tipo}}">

            <label for="">ID Tienda</label>
            <input type="text" name="id_tienda" class="form-control" required value="{{$productos->id_tienda}}">

            <label for="">Activo</label>
            <input type="text" name="activo" class="form-control" required value="{{$productos->activo}}">

            <label for="">Subido</label>
            <input type="text" name="subir" class="form-control" required value="{{$productos->updated_at}}">

            <label for="">Creado</label>
            <input type="text" name="crear" class="form-control" required value="{{$productos->created_at}}">

            <label for="">Foto</label>
            <input type="file" name="foto" class="form-control" required value="{{$productos->fotol}}">


            <a href="{{route('productos.index')}}" class="btn btn-primary">Regresar</a>
            <button class="btn btn-primary">Actualizar</button>

        </form>


      </p>
    </div>
  </div>


  @endsection
