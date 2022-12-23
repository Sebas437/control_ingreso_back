<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Solicitud;

class SolicitudController extends Controller
{

    public function index()
    {
        $solicitudes= Solicitud::all();
        return $solicitudes;
    }

    public function store(Request $request)
    {
        $solicitud = new Solicitud();
        $solicitud->NULL;
        $solicitud->descripcion      = $request->descripcion;
        $solicitud->fecha_inicio     = $request->fecha_inicio;
        $solicitud->ok_seguridad     = $request->ok_seguridad;
        $solicitud->ok_sst           = $request->ok_sst;
        $solicitud->ok_mantenimiento = $request->ok_mantenimiento;
        $solicitud->id_estado        = $request->id_estado;


        $solicitud->save();
    }

    public function show($id)
    {
        $solicitud = Solicitud::find($id);

        return $solicitud;
    }

    public function update(Request $request, $id)
    {
        
        $solicitud = Solicitud::findOrFail($request->id);
        
        $solicitud->descripcion      = $request->descripcion;
        $solicitud->fecha_inicio     = $request->fecha_inicio;
        $solicitud->ok_seguridad     = $request->ok_seguridad;
        $solicitud->ok_sst           = $request->ok_sst;
        $solicitud->ok_mantenimiento = $request->ok_mantenimiento;
        $solicitud->id_estado        = $request->id_estado;

        $solicitud->save();
        return $solicitud;
    }

    public function destroy($id)
    {
        $solicitud = Solicitud::destroy($id);
        return $solicitud;
    }
}
