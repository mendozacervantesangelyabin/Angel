@extends('layout.plantilla')

@section('titulo', 'Crud con laravel 9')

@section('contenido')

<div class="card">
    <h5 class="card-header">Tiendas</h5>
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
      <h5 class="card-title text-center">Tiendas en Sistema</h5>
    <div class="table table-responsive">

<table class="table table-dark table-striped">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Clave</th>
      <th scope="col">Nombre</th>
      <th scope="col">Subido</th>
      <th scope="col">Creado</th>
      <th scope="col">Foto</th>

      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>

    </tr>
  </thead>

@foreach($tiendas1 as $tienda)
<tr>
    <td>{{ $tienda->id_tienda }}</td>
    <td>{{ $tienda->clave }}</td>
    <td>{{ $tienda->nombre }}</td>
        <td>{{ $tienda->updated_at }}</td>
        <td>{{ $tienda->created_at }}</td>
        <td><img src="{{ asset ('archivos/'.$tienda->foto) }}" style="width:50px"></td>
    <td>
        <form action="{{route('tiendas.edit', $tienda->id_tienda)}}" method="GET">
            <button class="btn btn-warning btn-sm">
                <i class="fa-solid fa-user-pen"></i>
            </button>
        </form>
    </td>
    <td>
        <form action="{{route('tiendas.show', $tienda->id_tienda)}}" method="GET">
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
    <a href="{{route("tiendas.create")}}" class="btn btn-primary">
        <span class="fas fa-user-plus"></span> Agregar nueva tienda
    </a>
  </p>
</div>
</div>

@endsection
