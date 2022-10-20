@extends('layout.plantilla')

@section('titulo', 'Crear Nuevo registro')

@section('contenido')

<div class="card">
    <h5 class="card-header">Agregar Usuario</h5>
    <div class="card-body">

      <p class="card-text">
        <form action="{{ route('usuarios.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">Clave</label>
            <input type="text" name="clave" class="form-control" required>

            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>

            <label for="">Apellido Paterno</label>
            <input type="text" name="app" class="form-control" required>

            <label for="">Apellido Materno</label>
            <input type="text" name="apm" class="form-control" required>

            <label for="">Fecha de Nacimiento</label>
            <input type="date" name="fn" class="form-control" required>

            <label for="">Genero</label>
            <input type="text" name="gen" class="form-control" required>

            <label for="">Foto</label>
            <input type="file" name="foto" class="form-control" required>

            <label for="">Gmail</label>
            <input type="text" name="email" class="form-control" required>

            <label for="">Password</label>
            <input type="password" name="pass" class="form-control" required>

            <label for="">Nivel</label>
            <input type="text" name="nivel" class="form-control" required>

            <label for="">Activo</label>
            <input type="text" name="activo" class="form-control" required>



            <a href="{{route('usuarios.index')}}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>  Regresar</a>
            <button class="btn btn-primary"><i class="fa-solid fa-check"></i>  Agregar</button>



        </form>


      </p>
    </div>
  </div>


  @endsection
