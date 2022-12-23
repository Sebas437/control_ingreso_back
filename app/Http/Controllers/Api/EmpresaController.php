<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    public function index()
    {
        $empresas= Empresa::all();
        return $empresas;
    }

    public function store(Request $request)
    {
        $empresa = new Empresa();

        $empresa->nit    = $request->nit;
        $empresa->nombre = $request->nombre;

        $empresa->save();
    }

    public function show($id)
    {
        $empresa = Empresa::find($id);

        return $empresa;
    }

    public function update(Request $request, $id)
    {
        
        $empresa = Empresa::findOrFail($request->id);

        $empresa->nombre = $request->nombre;

        $empresa->save();
        return $empresa;
    }

    public function destroy($id)
    {
        $empresa = Empresa::destroy($id);
        return $empresa;
    }
}
