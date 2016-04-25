<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('FechaPedido');
            $table->date('FechaImp');
            $table->binary('Archivo');
            $table->string('Status');
             
             $table->integer('Cliente_id')->unsigned();
           $table->foreign('Cliente_id')->references('id')->on('clientes');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pedidos');
    }
}
