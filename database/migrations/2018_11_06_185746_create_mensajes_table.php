<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->dateTime('hora');
            $table->string('texto',200);
            $table->integer('tipo');
            $table->integer('estado');
            $table->integer('id_chat')->unsigned();
            $table->integer('tipo_mensaje');

            $table->timestamps();

           
            $table->foreign('id_chat')->references('id')->on('chat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensajes');
    }
}
