<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexproductos()
    {
        //
        $productos1 = Productos::all();
        return view('inicioproductos', compact('productos1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createproductos()
    {
        //
        $productos = new Productos();
        Return view('agregarproductos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeproductos(Request $request)
    {
        //Sirve para guardar datos en la BD
        Productos::create(array(
            'clave' => $request->input('clave'),
            'nombre' => $request->input('nombre'),
            'cantidad' => $request->input('cantidad'),
            'costo' => $request->input('costo'),
            'id_tipo' => $request->input('id_tipo'),
            'id_tienda' => $request->input('id_tienda'),
            'activo' => $request->input('activo'),
            'foto' => $request->input('foto','required|image|mimes:jpeg,jpg,gif,svg|max:2048'),
            'subir' => $request->input('updated_at'),
            'crear' => $request->input('created_at'),

        ));
        return redirect()->route("productos.index")->with("success", "Agregado con exito");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function showproductos($id_producto)
    {
        //
        $productos = Productos::find($id_producto);
        return view('eliminarproductos', compact('productos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function editproductos($id_producto)
    {
        //
        $productos = Productos::find($id_producto);
        return view('actualizarproductos', compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function updateproductos(Request $request, $id_producto)
    {
                //Actualiza los datos en la BD
        $productos = Productos::find($id_producto);
        $productos->clave = $request->post('clave');
        $productos->nombre = $request->post('nombre');
        $productos->cantidad = $request->post('cantidad');
        $productos->costo = $request->post('costo');
        $productos->id_tipo = $request->post('id_tipo');
        $productos->id_tienda = $request->post('id_tienda');
        $productos->activo = $request->post('activo');
        $productos->foto = $request->post('foto');
        $productos->save();

    return redirect()->route("productos.index")->with("success", "Actualizado con exito");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroyproductos($id_producto)
    {
        //
        $productos = Productos::find($id_producto);
        $productos->delete();
        return redirect()->route("productos.index")->with("success", "Eliminado con exito");

    }

}
