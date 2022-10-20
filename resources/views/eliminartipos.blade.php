@extends('layout.plantilla')

@section('titulo', 'Eliminar Tipos')

@section('contenido')

<div class="card">
    <h5 class="card-header">Eliminar Tipos</h5>
    <div class="card-body">

      <p class="card-text">
        <div class="alert alert-danger" role="alert">
            ¿Estas seguro de querer eliminar este registro?
        </div>
        <div class="table table-responsive">
        <table class="table table-striped table-dark">
         <thead>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Detalle</th>
            <th scope="col">Activo</th>
            <th scope="col">Subido</th>
            <th scope="col">Creado</th>
            </thead>
                    <tr>
                        <td>{{ $tipos->id_tipo }}</td>
                        <td>{{ $tipos->nombre }}</td>
                        <td>{{ $tipos->detalle }}</td>
                        <td>{{ $tipos->activo }}</td>
                        <td>{{ $tipos->updated_at }}</td>
                        <td>{{ $tipos->created_at }}</td>
                    </tr>
        </table>
        </div>
        <hr>
        <form action="{{ route('tipos.destroy', $tipos->id_tipo) }}" method="POST">
            @csrf
            @method('DELETE')
            <a href="{{ route('paginaprincipal')}}" class="btn btn-info">Regresar</a>
            <button class="btn btn-danger">Eliminar</button>


        </form>
      </p>
    </div>
  </div>


  @endsection
