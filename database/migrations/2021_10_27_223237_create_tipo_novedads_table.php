<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoNovedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_novedads', function (Blueprint $table) {
            $table->id();
            $table->string('fecha_realizacion');
            $table->string('respuesta',100);
            $table->string('observacion',100);
            $table->string('fecha_reintegro');
            $table->string('estado_nov',100);
            $table->foreignId('novedad_id');
            $table->timestamps();

            $table->foreign('novedad_id')->references('id')->on('novedads');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_novedads');
    }
}
