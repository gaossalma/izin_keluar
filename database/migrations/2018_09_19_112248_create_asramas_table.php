<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsramasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asramas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('kapasitas');
            $table->integer('pembimbing_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('pembimbing_id')->references('id')->on('pembimbings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('asramas');
    }
}
