<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprendizsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendizs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_apren',50);
            $table->string('apelli_apren',50);
            $table->integer('tel_apren');
            $table->string('estado_apren',50);
            $table->string('email')->unique();
            $table->string('tipo_doc_apren',50);
            $table->integer('num_doc_apren');
            $table->foreignId('ficha_id');
            //$table->foreignId('user_id');
            
            $table->foreign('ficha_id')->references('id')->on('fichas');


            $table->timestamps();
            //$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aprendizs');
    }
}
