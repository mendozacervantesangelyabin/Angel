@extends('layout.plantilla')

@section('titulo', 'Actualizar')

@section('contenido')

<div class="card">
    <h5 class="card-header">Actualizar Usuario</h5>
    <div class="card-body">

      <p class="card-text">
        <form action="{{route('usuarios.update',  $usuarios->id_usuario)}}" method="POST">
            @csrf
            @method("PUT")

            <label for="">Clave</label>
            <input type="text" name="clave" class="form-control" required value="{{$usuarios->clave}}">

            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required value="{{$usuarios->nombre}}">

            <label for="">Apellido Paterno</label>
            <input type="text" name="app" class="form-control" required value="{{$usuarios->app}}">

            <label for="">Apellido Materno</label>
            <input type="text" name="apm" class="form-control" required value="{{$usuarios->apm}}">

            <label for="">Fecha de Nacimiento</label>
            <input type="date" name="fn" class="form-control" required value="{{$usuarios->fn}}">

            <label for="">Genero</label>
            <input type="text" name="gen" class="form-control" required value="{{$usuarios->gen}}">

            <label for="">Foto</label>
            <input type="file" name="foto" class="form-control" required value="{{$usuarios->foto}}">

            <label for="">Gmail</label>
            <input type="text" name="email" class="form-control" required value="{{$usuarios->email}}">

            <label for="">Password</label>
            <input type="password" name="pass" class="form-control" required value="{{$usuarios->pass}}">

            <label for="">Nivel</label>
            <input type="text" name="nivel" class="form-control" required value="{{$usuarios->nivel}}">

            <label for="">updated_at</label>
            <input type="text" name="subir" class="form-control" required value="{{$usuarios->updated_at}}">

            <label for="">created_at</label>
            <input type="text" name="crear" class="form-control" required value="{{$usuarios->created_at}}">

            <label for="">Activo</label>
            <input type="text" name="activo" class="form-control" required value="{{$usuarios->activo}}">


            <a href="{{route('usuarios.index')}}" class="btn btn-primary">Regresar</a>
            <button class="btn btn-primary">Actualizar</button>

        </form>


      </p>
    </div>
  </div>


  @endsection
