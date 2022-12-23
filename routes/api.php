<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Llamamos los controladores
use App\Http\Controllers\Api\ColaboradorController;
use App\Http\Controllers\Api\EmpresaController;
use App\Http\Controllers\Api\EstadoController;
use App\Http\Controllers\Api\RolController;
use App\Http\Controllers\Api\SolicitudController;
use App\Http\Controllers\Api\UsuarioController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ColaboradorController::class)->group(function () {
    //Ruta y Metodo
    Route::get('/colaboradores', 'index');
    Route::post('/colaboradores', 'store');
    Route::get('/colaborador/{id}', 'show');
    Route::put('/colaborador/{id}', 'update');
    Route::delete('/colaborador/{id}', 'destroy');
});

Route::controller(EmpresaController::class)->group(function () {
    //Ruta y Metodo
    Route::get('/empresas', 'index');
    Route::post('/empresas', 'store');
    Route::get('/empresa/{id}', 'show');
    Route::put('/empresa/{id}', 'update');
    Route::delete('/empresa/{id}', 'destroy');
});

Route::controller(EstadoController::class)->group(function () {
    //Ruta y Metodo
    Route::get('/estados', 'index');
    Route::post('/estados', 'store');
    Route::get('/estado/{id}', 'show');
    Route::put('/estado/{id}', 'update');
    Route::delete('/estado/{id}', 'destroy');
});

Route::controller(RolController::class)->group(function () {
    //Ruta y Metodo
    Route::get('/roles', 'index');
    Route::post('/roles', 'store');
    Route::get('/rol/{id}', 'show');
    Route::put('/rol/{id}', 'update');
    Route::delete('/rol/{id}', 'destroy');
});

Route::controller(SolicitudController::class)->group(function () {
    //Ruta y Metodo
    Route::get('/solicitudes', 'index');
    Route::post('/solicitudes', 'store');
    Route::get('/solicitud/{id}', 'show');
    Route::put('/solicitud/{id}', 'update');
    Route::delete('/solicitud/{id}', 'destroy');
});

Route::controller(UsuarioController::class)->group(function () {
    //Ruta y Metodo
    Route::get('/usuarios', 'index');
    Route::post('/usuarios', 'store');
    Route::get('/usuario/{id}', 'show');
    Route::put('/usuario/{id}', 'update');
    Route::delete('/usuario/{id}', 'destroy');
});

