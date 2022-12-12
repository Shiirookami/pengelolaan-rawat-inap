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
        Schema::create('pasien_rawat_inaps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('no_identitas', 16);
            $table->string('nama_lengkap');
            $table->char('no_hp', 12);
            $table->string('alamat');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->date('tanggal_masuk');
            $table->enum('golongan_darah', ['A', 'B', 'AB', 'O']);
            $table->string('pekerjaan');
            $table->enum('warga_negara', ['WNI', 'WNA']);
            $table->string('agama');
            $table->char('status_pernikahan', 1);
            $table->string('nama_kepala_keluarga');
            $table->string('pekerjaan_kepala_keluarga');
            $table->char('no_hp_orang_bertanggung_jawab', 12);
            $table->enum('status_asuransi', ['BPJS', 'UMUM']);
            $table->unsignedBigInteger('id_kamar');
            $table->foreign('id_kamar')->references('id')->on('kamars')
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
        Schema::dropIfExists('pasien_rawat_inaps');
    }
};
