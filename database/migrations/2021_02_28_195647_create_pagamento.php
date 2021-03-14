<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('pagamento', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('tipo_pagamento');
                $table->integer('id_cliente')->unsigned();
                $table->foreign('id_cliente')->references('id')->on('cliente');
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
        Schema::dropIfExists('pagamento');
    }
}
