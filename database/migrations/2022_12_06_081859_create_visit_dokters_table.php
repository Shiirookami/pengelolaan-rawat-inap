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
        Schema::create('visit_dokters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tensi_darah');
            $table->string('penyakit');
            $table->string('obat');
            $table->string('perkembangan');
            $table->unsignedBigInteger('id_dokter');
            $table->unsignedBigInteger('id_pasien_rawat_inap');
            $table->foreign('id_dokter')->references('id')->on('dokters')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_pasien_rawat_inap')->references('id')->on('pasien_rawat_inaps')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('visit_dokters');
    }
};
