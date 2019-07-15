<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLugarUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugar_usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('estado');
            $table->unsignedBigInteger('lugar_id')->nullable();
            $table->foreign('lugar_id')->references('id')->on('lugars');
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
        Schema::dropIfExists('lugar_usuarios');
    }
}
