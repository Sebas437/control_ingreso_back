<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{
    public function index()
    {
        $roles= Rol::all();
        return $roles;
    }

    public function store(Request $request)
    {
        $rol = new Rol();

        $rol->NULL;
        $rol->descripcion = $request->descripcion;

        $rol->save();
    }

    public function show($id)
    {
        $rol = Rol::find($id);

        return $rol;
    }

    public function update(Request $request, $id)
    {
        
        $rol = Rol::findOrFail($request->id);
        
        $rol->descripcion = $request->descripcion;

        $rol->save();
        return $rol;
    }

    public function destroy($id)
    {
        $rol = Rol::destroy($id);
        return $rol;
    }
}
