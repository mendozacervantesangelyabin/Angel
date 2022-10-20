@extends('layout.plantilla')

@section('titulo', 'Crud con laravel 9')

@section('contenido')

<div class="card">
    <h5 class="card-header">Tipos</h5>
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
      <h5 class="card-title text-center">Tipos</h5>
    <div class="table table-responsive">

<table class="table table-dark table-striped">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Detalle</th>
      <th scope="col">Activo</th>
      <th scope="col">Subido</th>
      <th scope="col">Creado</th>

      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>

    </tr>
  </thead>

@foreach($tipos1 as $tipo)
<tr>
    <td>{{ $tipo->id_tipo }}</td>
    <td>{{ $tipo->nombre }}</td>
    <td>{{ $tipo->detalle }}</td>
    <td>{{ $tipo->activo }}</td>
        <td>{{ $tipo->updated_at }}</td>
        <td>{{ $tipo->created_at }}</td>
    <td>
        <form action="{{route('tipos.edit', $tipo->id_tipo)}}" method="GET">
            <button class="btn btn-warning btn-sm">
                <i class="fa-solid fa-user-pen"></i>
            </button>
        </form>
    </td>
    <td>
        <form action="{{route('tipos.show', $tipo->id_tipo)}}" method="GET">
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
    <a href="{{ route('paginaprincipal')}}" class="btn btn-info">Regresar</a>
    <a href="{{route("tipos.create")}}" class="btn btn-primary">
        <span class="fas fa-user-plus"></span> Agregar nuevo
    </a>
  </p>
</div>
</div>

@endsection
