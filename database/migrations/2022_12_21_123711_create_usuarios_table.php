<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string('usuario', 80);
            $table->string('contra', 80);
            $table->bigInteger('id_rol')->unsigned();
            $table->timestamps();

            //Relaciones
            $table->foreign('id_rol')->references('id')->on('roles');
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
