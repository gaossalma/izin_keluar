<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataSantrisTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_santris', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nis');
            $table->string('nama');
            $table->integer('kelas')->unsigned();
            $table->string('tgl_lahir');
            $table->integer('asrama')->unsigned();
            $table->string('orang_tua');
            $table->string('no_hp');
            $table->text('alamat');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('kelas')->references('id')->on('kelas');
            $table->foreign('asrama')->references('id')->on('asramas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('data_santris');
    }
}
