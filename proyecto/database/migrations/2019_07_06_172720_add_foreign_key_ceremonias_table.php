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
            $table->unsignedBigInteger('transporte_id');
            $table->unsignedBigInteger('lugar_id');

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
