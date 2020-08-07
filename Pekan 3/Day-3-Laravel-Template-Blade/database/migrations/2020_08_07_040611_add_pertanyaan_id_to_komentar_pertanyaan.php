<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPertanyaanIdToKomentarPertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komentar_pertanyaan', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('pertanyaan_id');
            $table->unsignedBigInteger('profil_id');
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
            $table->foreign('profil_id')->references('id')->on('profil');
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
            //
            $table->dropForeign('komentar_pertanyaan_pertanyaan_id_foreign');
            $table->dropForeign('komentar_pertanyaan_profil_id_foreign');
            $table->dropColumn(['pertanyaan_id', 'profil_id']);
        });
    }
}
