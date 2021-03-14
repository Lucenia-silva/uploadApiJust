<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_empresa');
            $table->string('nif')->unique;
            $table->string('email');
            $table->integer('telefone');
            $table->string('logo');

            $table->integer('id_localizacao')->unsigned();
            $table->foreign('id_localizacao')->references('id')->on('localizacao');

            $table->integer('id_servico')->unsigned();
            $table->foreign('id_servico')->references('id')->on('servico');
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
        Schema::dropIfExists('cliente');
    }
}
