<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVestuarioUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vestuario_usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('estado');
            $table->unsignedBigInteger('vestuario_id')->nullable();
            $table->foreign('vestuario_id')->references('id')->on('vestuarios');
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
        Schema::dropIfExists('vestuario_usuarios');
    }
}
