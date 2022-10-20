<?php

namespace App\Http\Controllers;

use App\Models\Tipos;
use Illuminate\Http\Request;

class TiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indextipos()
    {
        //
        $tipos1 = Tipos::all();
        return view('iniciotipos', compact('tipos1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createtipos()
    {
        //
        $tipos = new Tipos();
        Return view('agregartipos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storetipos(Request $request)
    {
        //
        Tipos::create(array(
            'nombre' => $request->input('nombre'),
            'detalle' => $request->input('detalle'),
            'activo' => $request->input('activo'),
            'subir' => $request->input('updated_at'),
            'crear' => $request->input('created_at'),

        ));
        return redirect()->route("tipos.index")->with("success", "Agregado con exito");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function showtipos($id_tipo)
    {
        //
        $tipos = Tipos::find($id_tipo);
        return view('eliminartipos', compact('tipos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function edittipos($id_tipo)
    {
        //
        $tipos = Tipos::find($id_tipo);
        return view('actualizartipos', compact('tipos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function updatetipos(Request $request, $id_tipo)
    {
        //
        $tipos = Tipos::find($id_tipo);
        $tipos->nombre = $request->post('nombre');
        $tipos->detalle = $request->post('detalle');
        $tipos->activo = $request->post('activo');

        return redirect()->route("tipos.index")->with("success", "Actualizado con exito");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function destroytipos($id_tipo)
    {
        //
        $tipos = Tipos::find($id_tipo);
        $tipos->delete();
        return redirect()->route("tipos.index")->with("success", "Eliminado con exito");
    }
}
