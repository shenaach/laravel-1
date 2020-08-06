<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPertanyaanHasProfilProfil1IdToLikeDislikePertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('like_dislike_pertanyaan', function (Blueprint $table) {
            $table->unsignedBigInteger('pertanyaan_id')->nullable();
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('like_dislike_pertanyaan', function (Blueprint $table) {
            $table->dropForeign(['pertanyaan_id']);
            $table->dropColumn(['pertanyaan_id']);
        });
    }
}
