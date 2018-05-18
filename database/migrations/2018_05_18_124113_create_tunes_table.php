<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTunesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tunes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->integer('library_id')->unsigned();
            $table->foreign('library_id')->references('id')->on('libraries');
            $table->text('composer');
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
        Schema::dropIfExists('tunes');
    }
}
