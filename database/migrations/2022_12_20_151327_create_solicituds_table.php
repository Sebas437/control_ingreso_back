<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {

            $table->bigIncrements("id");
            $table->string("descripcion", 500);
            $table->date("fecha_inicio");
            $table->boolean("ok_seguridad")->nullable();
            $table->boolean("ok_sst")->nullable();
            $table->boolean("ok_mantenimiento")->nullable();
            $table->bigInteger("id_estado")->unsigned();
            $table->timestamps();

            //Relaciones
            $table->foreign('id_estado')->references('id')->on('estados');
        });
    }

    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
};
