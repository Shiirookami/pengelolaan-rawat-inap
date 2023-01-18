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
        Schema::create('rujukans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal');
            $table->string('nama_rumah_sakit');
            $table->string('diagnosis');
            $table->string('pertolongan_pertama');
            // $table->unsignedBigInteger('id_pasien_rawat_inap');
            // $table->foreign('id_pasien_rawat_inap')->references('id')->on('pasien_rawat_inaps')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');
            $table->char('no_identitas', 16);
            $table->string('nama_pasien');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('alamat');
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
        Schema::dropIfExists('rujukans');
    }
};
