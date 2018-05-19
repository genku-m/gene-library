<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTunePlyaersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tune_plyaers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tune_id')->unsigned();
            $table->foreign('tune_id')->references('id')->on('tunes');
            $table->integer('player_id')->unsigned();
            $table->foreign('player_id')->references('id')->on('players');
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
        Schema::dropIfExists('tune_plyaers');
    }
}
