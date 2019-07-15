<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActRecepUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('act_recep_usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('estado');
            $table->unsignedBigInteger('actividad_recepcion_id')->nullable();
            $table->foreign('actividad_recepcion_id')->references('id')->on('actividad_recepcions');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('act_recep_usuarios');
    }
}
