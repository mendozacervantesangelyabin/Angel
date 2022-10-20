@extends('layout.plantilla')

@section('titulo', 'Eliminar Productos')

@section('contenido')

<div class="card">
    <h5 class="card-header">Eliminar Tienda</h5>
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
        <th scope="col">Subido</th>
        <th scope="col">Creado</th>
        <th scope="col">Foto</th>
            </thead>
                    <tr>
                        <td>{{ $tiendas->id_tienda }}</td>
                        <td>{{ $tiendas->clave }}</td>
                        <td>{{ $tiendas->nombre }}</td>
                        <td>{{ $tiendas->updated_at }}</td>
                        <td>{{ $tiendas->created_at }}</td>
                        <td><img src="{{asset ('archivos/'.$tiendas->foto) }}" style="width:50px"></td>
                    </tr>
        </table>
        </div>
        <hr>
        <form action="{{ route('tiendas.destroy', $tiendas->id_tienda) }}" method="POST">
            @csrf
            @method('DELETE')
            <a href="{{ route('paginaprincipal')}}" class="btn btn-info">Regresar</a>
            <button class="btn btn-danger">Eliminar</button>


        </form>
      </p>
    </div>
  </div>


  @endsection
