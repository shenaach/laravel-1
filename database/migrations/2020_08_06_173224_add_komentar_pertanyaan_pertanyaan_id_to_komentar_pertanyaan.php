<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKomentarPertanyaanPertanyaanIdToKomentarPertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komentar_pertanyaan', function (Blueprint $table) {
            $table->unsignedBigInteger('komentar_pertanyaan_id');
            $table->foreign('komentar_pertanyaan_id')->references('id')->on('pertanyaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('komentar_pertanyaan', function (Blueprint $table) {
            $table->dropForeign(['komentar_pertanyaan_id']);
            $table->dropColumn(['komentar_pertanyaan_id']);
        });
    }
}
