@extends('layout.plantilla')

@section('titulo', 'Crud con laravel 9')

@section('contenido')

<div class="card">
    <h5 class="card-header">Inicio</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $mensaje }}
                </div>
                @endif


            </div>
        </div>
      <h5 class="card-title text-center">Lista de Usuarios en sistema</h5>
    <div class="table table-responsive">

        <table class="table table-striped table-dark">
        <thead>
            <tr>
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

            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
            </tr>


        </thead>

        @foreach($usuarios1 as $usuario)
        <tr>
            <td>{{ $usuario->id_usuario }}</td>
            <td>{{ $usuario->clave }}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->app }}</td>
            <td>{{ $usuario->apm }}</td>
            <td>{{ $usuario->fn }}</td>
            <td>{{ $usuario->gen }}</td>
            <td><img src="{{ asset ('archivos/'.$usuario->foto) }}" style="width:70px" ></td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->pass }}</td>
            <td>{{ $usuario->nivel }}</td>
            <td>
            @if($usuario->activo == 1)
            <button type="button" class="btn btn-sm btn-success">Activo</button>
            @else
            <button type="button" class="btn btn-sm btn-danger">Inactivo</button>
            @endif
            </td>
            <td>{{ $usuario->updated_at }}</td>
            <td>{{ $usuario->created_at }}</td>
         <td>
            <!--Boton Modificar-->
                <form action="{{route('usuarios.edit', $usuario->id_usuario)}}" method="GET">
                    <button class="btn btn-warning btn-sm">
                        <i class="fa-solid fa-user-pen"></i>
                    </button>
                </form>
            </td>
            <td>
            <!--Boton Eliminar-->
                <form action="{{route('usuarios.show', $usuario->id_usuario)}}" method="GET">
                    <button class="btn btn-danger btn-sm">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </form>
            </td>

        </tr>
        @endforeach

        </table>
    </div>
    <p>
        <a href="{{ route('paginaprincipal')}}" class="btn btn-info">Salir</a>
        <a href="{{route("usuarios.create")}}" class="btn btn-primary">
            <span class="fas fa-user-plus"></span> Agregar nueva persona
        </a>
      </p>
    </div>
  </div>
@endsection
