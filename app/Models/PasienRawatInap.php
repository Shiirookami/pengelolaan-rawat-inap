<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PasienRawatInap extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'no_identitas', 'nama_lengkap', 'no_hp', 'alamat',
        'tanggal_lahir', 'jenis_kelamin', 'tanggal_masuk',
        'golongan_darah', 'pekerjaan', 'warga_negara', 'agama',
        'status_pernikahan', 'nama_kepala_keluarga', 'pekerjaan_kepala_keluarga',
        'no_hp_orang_bertanggung_jawab', 'status_asuransi', 'id_kamar'
    ];
    protected $hidden = [];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar', 'id');
    }
}
