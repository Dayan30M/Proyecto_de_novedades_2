<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNovedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novedads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aprendiz_id');
            $table->string('nom_novedad',50);
            $table->string('fecha_peticion',50);
            $table->string('motivo',50);
            
            
            $table->timestamps();
            $table->foreign('aprendiz_id')->references('id')->on('aprendizs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('novedads');
    }
}
