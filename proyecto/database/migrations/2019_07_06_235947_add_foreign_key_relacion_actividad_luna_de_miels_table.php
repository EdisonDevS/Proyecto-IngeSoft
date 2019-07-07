<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyRelacionActividadLunaDeMielsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('relacion_actividad_luna_de_miels', function (Blueprint $table) {
            $table->unsignedBigInteger('luna_de_miel_id');
            $table->unsignedBigInteger('actividad_luna_de_miel_id');

            $table->foreign('luna_de_miel_id')->references('id')->on('luna_de_miels');
            $table->foreign('actividad_luna_de_miel_id')->references('id')->on('actividad_luna_de_miels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('relacion_actividad_luna_de_miels', function (Blueprint $table) {
            //
        });
    }
}
