<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyRelacionActividadRecepcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('relacion_actividad_recepcions', function (Blueprint $table) {
            $table->unsignedBigInteger('recepcion_id');
            $table->unsignedBigInteger('actividad_recepcion_id');

            $table->foreign('recepcion_id')->references('id')->on('recepcions');
            $table->foreign('actividad_recepcion_id')->references('id')->on('actividad_recepcions'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('relacion_actividad_recepcions', function (Blueprint $table) {
            //
        });
    }
}
