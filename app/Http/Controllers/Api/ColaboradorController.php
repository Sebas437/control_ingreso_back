<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Colaborador;

class ColaboradorController extends Controller
{
    public function index()
    {
        $colaboradores= Colaborador::all();
        return $colaboradores;
    }

    public function store(Request $request)
    {
        $colaborador = new Colaborador();

        $colaborador->documento    = $request->documento;
        $colaborador->nombre       = $request->nombre;
        $colaborador->apellidos    = $request->apellidos;
        $colaborador->n_contacto   = $request->n_contacto;
        $colaborador->arl          = $request->arl;
        $colaborador->f_cedula     = $request->f_cedula;
        $colaborador->c_alturas    = $request->c_alturas;
        $colaborador->nit_empresa  = $request->nit_empresa;
        $colaborador->id_estado    = $request->id_estado;
        $colaborador->id_solicitud = $request->id_solicitud;

        $colaborador->save();
    }

    public function show($id)
    {
        $colaborador = Colaborador::find($id);

        return $colaborador;
    }

    public function update(Request $request, $id)
    {
        
        $colaborador = Colaborador::findOrFail($request->id);

        $colaborador->nombre       = $request->nombre;
        $colaborador->apellidos    = $request->apellidos;
        $colaborador->n_contacto   = $request->n_contacto;
        $colaborador->arl          = $request->arl;
        $colaborador->f_cedula     = $request->f_cedula;
        $colaborador->c_alturas    = $request->c_alturas;
        $colaborador->nit_empresa  = $request->nit_empresa;
        $colaborador->id_estado    = $request->id_estado;
        $colaborador->id_solicitud = $request->id_solicitud;

        $colaborador->save();
        return $colaborador;
    }

    public function destroy($id)
    {
        $colaborador = Colaborador::destroy($id);
        return $colaborador;
    }
}
