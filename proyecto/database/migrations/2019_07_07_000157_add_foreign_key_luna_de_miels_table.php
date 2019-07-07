<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyLunaDeMielsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('luna_de_miels', function (Blueprint $table) {
            $table->unsignedBigInteger('lugar_id');

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
        Schema::table('luna_de_miels', function (Blueprint $table) {
            //
        });
    }
}
