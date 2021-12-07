<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('apellido')->default();
            $table->string('telefono')->default();
            $table->integer('id_tipo_funcionario')->default();
            $table->string('tipo_documento')->default();
            $table->string('num_documento')->default();
            $table->string('rol')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
           /* $table->foreignId('categorie_id');

            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('categorie_id')->references('id')->on('categories');*/
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
