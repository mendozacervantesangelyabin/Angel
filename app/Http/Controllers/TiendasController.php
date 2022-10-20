<?php

namespace App\Http\Controllers;

use App\Models\Tiendas;
use Illuminate\Http\Request;

class TiendasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indextiendas()
    {
        //
        $tiendas1 = Tiendas::all();
        return view('iniciotiendas', compact('tiendas1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createtiendas()
    {
        //
        $tiendas = new Tiendas();
        Return view('agregartiendas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storetiendas(Request $request)
    {
        //Sirve para guardar datos en la BD
        Tiendas::create(array(
            'clave' => $request->input('clave'),
            'nombre' => $request->input('nombre'),
            'foto' => $request->input('required|image|mimes:jpeg,jpg,gif,svg|max:2048'),
            'subir' => $request->input('updated_at'),
            'crear' => $request->input('created_at'),

        ));
        return redirect()->route("tiendas.index")->with("success", "Agregado con exito");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tiendas  $tiendas
     * @return \Illuminate\Http\Response
     */
    public function showtiendas($id_tienda)
    {
        //
        $tiendas = Tiendas::find($id_tienda);
        return view('eliminartiendas', compact('tiendas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tiendas  $tiendas
     * @return \Illuminate\Http\Response
     */
    public function edittiendas($id_tienda)
    {
        //
        $tiendas = Tiendas::find($id_tienda);
        return view('actualizartiendas', compact('tiendas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tiendas  $tiendas
     * @return \Illuminate\Http\Response
     */
    public function updatetiendas(Request $request, $id_tienda)
    {
        //
        $tiendas = Tiendas::find($id_tienda);
        $tiendas->clave = $request->post('clave');
        $tiendas->nombre = $request->post('nombre');
        $tiendas->foto = $request->post('foto');

        return redirect()->route("tiendas.index")->with("success", "Actualizado con exito");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tiendas  $tiendas
     * @return \Illuminate\Http\Response
     */
    public function destroytiendas($id_tienda)
    {
        //
        $tiendas = Tiendas::find($id_tienda);
        $tiendas->delete();
        return redirect()->route("tiendas.index")->with("success", "Eliminado con exito");
    }
}
