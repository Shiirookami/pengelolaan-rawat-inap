<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dokter;
use App\Models\PasienRawatInap;

class VisitDokter extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'tensi_darah', 'penyakit', 'obat',
        'perkembangan', 'id_dokter',
        'id_pasien_rawat_inap'
    ];
    protected $hidden = [];

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter', 'id');
    }
    public function pasien()
    {
        return $this->belongsTo(PasienRawatInap::class, 'id_pasien_rawat_inap', 'id');
    }
}
