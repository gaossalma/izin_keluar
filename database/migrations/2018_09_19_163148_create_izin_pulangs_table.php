<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIzinPulangsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('izin_pulangs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nama_santri')->unsigned();
            $table->string('tgl_pulang');
            $table->string('tgl_kembali');
            $table->integer('keperluan')->unsigned();
            $table->string('jam_kedatangan');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('nama_santri')->references('id')->on('data_santris');
            $table->foreign('keperluan')->references('id')->on('keperluans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('izin_pulangs');
    }
}
