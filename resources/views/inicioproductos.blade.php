@extends('layout.plantilla')

@section('titulo', 'Crud con laravel 9')

@section('contenido')

<div class="card">
    <h5 class="card-header">Productos</h5>
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
      <h5 class="card-title text-center">Lista de Productos en Sistema</h5>
    <div class="table table-responsive">

<table class="table table-dark table-striped">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Clave</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Costo</th>
      <th scope="col">ID Tpo</th>
      <th scope="col">ID Tienda</th>
      <th scope="col">Activo</th>
      <th scope="col">Subido</th>
      <th scope="col">Creado</th>
      <th scope="col">Foto</th>

      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>

    </tr>
  </thead>

@foreach($productos1 as $producto)
<tr>
    <td>{{ $producto->id_producto }}</td>
    <td>{{ $producto->clave }}</td>
    <td>{{ $producto->nombre }}</td>
    <td>{{ $producto->cantidad }}</td>
    <td>{{ $producto->costo }}</td>
    <td>{{ $producto->id_tipo }}</td>
    <td>{{ $producto->id_tienda }}</td>
    <td>
        @if($producto->activo == 1)
        <button type="button" class="btn btn-sm btn-success">Activo</button>
        @else
        <button type="button" class="btn btn-sm btn-danger">Inactivo</button>
        @endif
        </td>
        <td>{{ $producto->updated_at }}</td>
        <td>{{ $producto->created_at }}</td>
        <td><img src="{{ asset ('archivos/'.$producto->foto) }}" style="width:70px"></td>
    <td>
        <form action="{{route('productos.edit', $producto->id_producto)}}" method="GET">
            <button class="btn btn-warning btn-sm">
                <i class="fa-solid fa-user-pen"></i>
            </button>
        </form>
    </td>
    <td>
        <form action="{{route('productos.show', $producto->id_producto)}}" method="GET">
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
    <a href="{{route("productos.create")}}" class="btn btn-primary">
        <span class="fas fa-user-plus"></span> Agregar nuevo Producto
    </a>
  </p>
</div>
</div>

@endsection
