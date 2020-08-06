<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('isi',255);
            $table->date('tanggal_dibuat');
            $table->date('tanggal_diperbaharui');
            $table->integer('pertanyaan_id');
            $table->integer('profil_id');
            $table->unsignedBigInteger('jawaban_pertanyaan_id');
            $table->foreign('jawaban_pertanyaan_id')->references('id')->on('pertanyaan');
            
            $table->unsignedBigInteger('jawaban_profil1_id');
            $table->foreign('jawaban_profil1_id')->references('id')->on('profil');
            $table->timestamp('tanggal_diperbaharui')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban');
    }
}
