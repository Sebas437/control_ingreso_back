<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{

    public function index()
    {
        $usuarios= Usuario::all();
        return $usuarios;
    }

    public function store(Request $request)
    {
        $usuario = new Usuario();

        $usuario->NULL;
        $usuario->usuario = $request->usuario;
        $usuario->contra  = $request->contra;
        $usuario->id_rol  = $request->id_rol;

        $usuario->save();
    }

    public function show($id)
    {
        $usuario = Usuario::find($id);

        return $usuario;
    }

    public function update(Request $request, $id)
    {
        
        $usuario = Usuario::findOrFail($request->id);
        
        $usuario->usuario = $request->usuario;
        $usuario->contra  = $request->contra;
        $usuario->id_rol  = $request->id_rol;

        $usuario->save();
        return $usuario;
    }

    public function destroy($id)
    {
        $usuario = Usuario::destroy($id);
        return $usuario;
    }
}
