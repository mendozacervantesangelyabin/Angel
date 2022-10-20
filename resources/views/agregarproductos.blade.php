@extends('layout.plantilla')

@section('titulo', 'Crear Nuevo registro')

@section('contenido')

<div class="card">
    <h5 class="card-header">Agregar Producto</h5>
    <div class="card-body">

      <p class="card-text">
        <form action="{{ route('productos.store')}}" method="POST">
            @csrf
            <label for="">Clave</label>
            <input type="text" name="clave" class="form-control" required>

            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>

            <label for="">Cantidad</label>
            <input type="text" name="cantidad" class="form-control" required>

            <label for="">Costo</label>
            <input type="text" name="costo" class="form-control" required>

            <label for="">ID Tipo</label>
            <input type="text" name="id_tipo" class="form-control" required>

            <label for="">ID Tienda</label>
            <input type="text" name="id_tienda" class="form-control" required>

            <label for="">Activo</label>
            <input type="text" name="activo" class="form-control" required>

            <label for="">Foto</label>
            <input type="file" name="foto" class="form-control" required>

            <a href="{{route('productos.index')}}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>  Regresar</a>
            <button class="btn btn-primary"><i class="fa-solid fa-check"></i>  Agregar</button>



        </form>


      </p>
    </div>
  </div>


  @endsection
