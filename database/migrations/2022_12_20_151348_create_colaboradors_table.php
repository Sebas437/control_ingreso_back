<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('colaboradores', function (Blueprint $table) {

            $table->string("documento", 15)->primary();
            $table->string("nombre", 40);
            $table->string("apellidos", 80);
            $table->string("n_contacto", 15);
            $table->string("arl");
            $table->string("f_cedula");
            $table->string("c_alturas")->nullable();
            $table->string("nit_empresa", 15);
            $table->bigInteger("id_estado")->unsigned();
            $table->bigInteger("id_solicitud")->unsigned();
            $table->timestamps();

            //Relaciones
            $table->foreign('nit_empresa')->references('nit')->on('empresas');
            $table->foreign('id_estado')->references('id')->on('estados');
            $table->foreign('id_solicitud')->references('id')->on('solicitudes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('colaboradores');
    }
};
