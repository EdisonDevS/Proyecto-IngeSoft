<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyCeremoniasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ceremonias', function (Blueprint $table) {
            $table->integer('transporte_id')->unsigned();
            $table->integer('lugar_id')->unsigned();

            $table->foreign('transporte_id')->references('id')->on('transportes');
            $table->foreign('lugar_id')->references('id')->on('lugars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ceremonias', function (Blueprint $table) {
            //
        });
    }
}
