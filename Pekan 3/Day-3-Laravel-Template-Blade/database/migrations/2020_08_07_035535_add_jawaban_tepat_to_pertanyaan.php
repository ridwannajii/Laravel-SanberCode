<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJawabanTepatToPertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pertanyaan', function (Blueprint $table) {
            $table->unsignedBigInteger('jawaban_tepat_id');
            $table->unsignedBigInteger('profil_id');
            $table->foreign('jawaban_tepat_id')->references('id')->on('jawaban');
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
        Schema::table('pertanyaan', function (Blueprint $table) {
            //
            $table->dropForeign('pertanyaan_jawaban_tepat_id_foreign');
            $table->dropForeign('pertanyaan_profil_id_foreign');
            $table->dropColumn(['jawaban_tepat_id', 'profil_id']);
        });
    }
}
