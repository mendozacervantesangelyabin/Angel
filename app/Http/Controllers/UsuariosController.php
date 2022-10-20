<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        //Pagina principal de inicio
        $usuarios1 = Usuarios::all();
        return view('inicio', compact('usuarios1'));
    }

    public function create()
    {
        //Formulario donde agregamos datos
        $usuarios = new Usuarios();
        Return view('agregar');
    }

    public function store(Request $request)
    {
        //Sirve para guardar datos en la BD
        Usuarios::create(array(
            'clave' => $request->input('clave'),
            'nombre' => $request->input('nombre'),
            'app' => $request->input('app'),
            'apm' => $request->input('apm'),
            'fn' => $request->input('fn'),
            'gen' => $request->input('gen'),
            'email' => $request->input('email'),
            'pass' => $request->input('pass'),
            'nivel' => $request->input('nivel'),
            'subir' => $request->input('update_at'),
            'crear' => $request->input('created_at'),
            'activo' => $request->input('activo'),
            'foto' => $request->input('foto','required|image|mimes:jpeg,jpg,gif,svg|max:2048'),


        ));


        return redirect()->route("usuarios.index")->with("success", "Agregado con exito");
    }

    public function show($id_usuario)
    {
        //Obtener un registro de las tablas
        $usuarios = Usuarios::find($id_usuario);
        return view('eliminar', compact('usuarios'));
    }

    public function edit($id_usuario)
    {
        //Sirve para traer datos a editar y los coloca en un formulario
    $usuarios = Usuarios::find($id_usuario);

        return view('actualizar', compact('usuarios'));
    }

    public function update(Request $request, $id_usuario)
    {
        //Actualiza los datos en la BD
        $usuarios = Usuarios::find($id_usuario);
        $usuarios->clave = $request->post('clave');
        $usuarios->nombre = $request->post('nombre');
        $usuarios->app = $request->post('app');
        $usuarios->apm = $request->post('apm');
        $usuarios->fn = $request->post('fn');
        $usuarios->gen = $request->post('gen');
        $usuarios->foto = $request->post('foto');
        $usuarios->email = $request->post('email');
        $usuarios->pass = $request->post('pass');
        $usuarios->nivel = $request->post('nivel');
        $usuarios->activo = $request->post('activo');
        $usuarios->save();

    return redirect()->route("usuarios.index")->with("success", "Actualizado con exito");

    }

    public function destroy($id_usuario)
    {
        //Elimina un registro
        $usuarios = Usuarios::find($id_usuario);
        $usuarios->delete();
        return redirect()->route("usuarios.index")->with("success", "Eliminado con exito");

    }

    public function principal()
    {
        $usuarios = new Usuarios();
        Return view('index');
    }
}
