<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyComidaPlatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comida_platos', function (Blueprint $table) {
            $table->unsignedBigInteger('comida_id');
            $table->unsignedBigInteger('plato_id');

            $table->foreign('comida_id')->references('id')->on('comidas');
            $table->foreign('plato_id')->references('id')->on('platos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comida_platos', function (Blueprint $table) {
            //
        });
    }
}
