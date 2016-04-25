<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function ($table) {
            $table->increments('id');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->integer('Telefono');
             $table->string('mail')->unique();
             $table->string('Direccion');
             $table->string('Cuidad');
             $table->string('Estado');
             $table->integer('CodigoP');
             $table->string('Pais');
             $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clientes');
    }
}
