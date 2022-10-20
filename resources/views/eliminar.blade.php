@extends('layout.plantilla')

@section('titulo', 'Eliminar Usuarios')

@section('contenido')

<div class="card">
    <h5 class="card-header">Eliminar Usuario</h5>
    <div class="card-body">

      <p class="card-text">
        <div class="alert alert-danger" role="alert">
            ¿Estas seguro de querer eliminar este registro?
        </div>
        <div class="table table-responsive">
        <table class="table table-striped table-dark">
         <thead>
        <th scope="col">ID</th>
        <th scope="col">clave</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido Paterno</th>
        <th scope="col">Apellido Materno</th>
        <th scope="col">Fecha de Nacimiento</th>
        <th scope="col">Genero</th>
        <th scope="col">Foto</th>
        <th scope="col">Gmail</th>
        <th scope="col">Password</th>
        <th scope="col">Nivel</th>
        <th scope="col">Activo</th>
        <th scope="col">Subida</th>
        <th scope="col">Creada</th>
            </thead>
                    <tr>
                        <td>{{ $usuarios->id_usuario }}</td>
                        <td>{{ $usuarios->clave }}</td>
                        <td>{{ $usuarios->nombre }}</td>
                        <td>{{ $usuarios->app }}</td>
                        <td>{{ $usuarios->apm }}</td>
                        <td>{{ $usuarios->fn }}</td>
                        <td>{{ $usuarios->gen }}</td>
                        <td><img src="{{asset ('archivos/'.$usuarios->foto) }}" style="width:50px"></td>
                        <td>{{ $usuarios->email }}</td>
                        <td>{{ $usuarios->pass }}</td>
                        <td>{{ $usuarios->nivel }}</td>
                        <td>
                        @if($usuarios->activo == 1)
                        <button type="button" class="btn btn-sm btn-success">Activo</button>
                        @else
                        <button type="button" class="btn btn-sm btn-danger">Inactivo</button>
                        @endif
                        </td>
                        <td>{{ $usuarios->updated_at }}</td>
                        <td>{{ $usuarios->created_at }}</td>
                    </tr>
        </table>
        </div>
        <hr>
        <form action="{{ route('usuarios.destroy', $usuarios->id_usuario) }}" method="POST">
            @csrf
            @method('DELETE')
            <a href="{{ route('usuarios.index')}}" class="btn btn-info">Regresar</a>
            <button class="btn btn-danger">Eliminar</button>


        </form>
      </p>
    </div>
  </div>


  @endsection
