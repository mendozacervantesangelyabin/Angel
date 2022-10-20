@extends('layout.plantilla')

@section('titulo', 'Eliminar Productos')

@section('contenido')

<div class="card">
    <h5 class="card-header">Eliminar Producto</h5>
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
        <th scope="col">Cantidad</th>
        <th scope="col">Costo</th>
        <th scope="col">ID_Tipo</th>
        <th scope="col">ID_Tienda</th>
        <th scope="col">Activo</th>
        <th scope="col">Subido</th>
        <th scope="col">Creado</th>
        <th scope="col">Foto</th>
            </thead>
                    <tr>
                        <td>{{ $productos->id_producto }}</td>
                        <td>{{ $productos->clave }}</td>
                        <td>{{ $productos->nombre }}</td>
                        <td>{{ $productos->cantidad }}</td>
                        <td>{{ $productos->costo }}</td>
                        <td>{{ $productos->id_tipo }}</td>
                        <td>{{ $productos->id_tienda }}</td>
                        <td>
                            @if($productos->activo == 1)
                            <button type="button" class="btn btn-sm btn-success">Activo</button>
                            @else
                            <button type="button" class="btn btn-sm btn-danger">Inactivo</button>
                            @endif
                            </td>
                        <td>{{ $productos->updated_at }}</td>
                        <td>{{ $productos->created_at }}</td>
                        <td><img src="{{asset ('archivos/'.$productos->foto) }}" style="width:50px"></td>
                    </tr>
        </table>
        </div>
        <hr>
        <form action="{{ route('productos.destroy', $productos->id_producto) }}" method="POST">
            @csrf
            @method('DELETE')
            <a href="{{ route('productos.index')}}" class="btn btn-info">Regresar</a>
            <button class="btn btn-danger">Eliminar</button>


        </form>
      </p>
    </div>
  </div>


  @endsection
