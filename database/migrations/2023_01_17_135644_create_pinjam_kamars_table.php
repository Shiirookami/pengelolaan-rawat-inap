<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjam_kamars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kamar');
            $table->unsignedBigInteger('id_pasien_rawat_inap');
            $table->foreign('id_kamar')->references('id')->on('kamars')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_pasien_rawat_inap')->references('id')->on('pasien_rawat_inaps')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('pinjam_kamars');
    }
};
