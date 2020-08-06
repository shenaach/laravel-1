<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKomentarJawabanProfil1IdToKomentarJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komentar_jawaban', function (Blueprint $table) {
            $table->unsignedBigInteger('komentar_jawaban_profil1_id');
            $table->foreign('komentar_jawaban_profil1_id')->references('id')->on('profil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('komentar_jawaban', function (Blueprint $table) {
            $table->dropForeign(['komentar_jawaban_profil1_id']);
            $table->dropColumn(['komentar_jawaban_profil1_id']);
        });
    }
}
