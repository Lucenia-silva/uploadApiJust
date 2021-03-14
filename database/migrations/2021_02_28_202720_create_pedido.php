<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('valor');
            $table->integer('id_tipo_pedido')->unsigned();
            $table->foreign('id_tipo_pedido')->references('id')->on('tipo_pedido');

            $table->integer('id_servico')->unsigned();
            $table->foreign('id_servico')->references('id')->on('servico');

            $table->integer('id_pagamento')->unsigned();
            $table->foreign('id_pagamento')->references('id')->on('pagamento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido');
    }
}
