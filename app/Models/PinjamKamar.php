<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;;
class PinjamKamar extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'id_kamar', 'id_pasien_rawat_inap', 'tanggal_masuk', 'tanggal_keluar'
    ];
    protected $hidden = [];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar', 'id');
    }

    public function pasien()
    {
        return $this->belongsTo(PasienRawatInap::class, 'id_pasien_rawat_inap', 'id');
    }
}
