<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransporteUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transporte_usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('estado');
            $table->unsignedBigInteger('transporte_id')->nullable();
            $table->foreign('transporte_id')->references('id')->on('transportes');
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
        Schema::dropIfExists('transporte_usuarios');
    }
}
