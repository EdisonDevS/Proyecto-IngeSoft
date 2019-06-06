<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->unsignedBigInteger('person_id')->nullable();
            $table->unsignedBigInteger('conyugue_id')->nullable();
            $table->timestamps();
            $table->foreign('person_id')->references('id')->on('people');
            $table->foreign('conyugue_id')->references('id')->on('conyugues');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guests');
    }
}
