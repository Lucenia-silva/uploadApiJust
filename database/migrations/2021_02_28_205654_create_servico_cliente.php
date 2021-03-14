<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicoCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('servico_cliente', function (Blueprint $table) {

            $table->integer('id_servico')->unsigned();
            $table->foreign('id_servico')->references('id')->on('servico');

            $table->integer('id_cliente')->unsigned();
            $table->foreign('id_cliente')->references('id')->on('cliente');

        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servico_cliente');
    }
}
