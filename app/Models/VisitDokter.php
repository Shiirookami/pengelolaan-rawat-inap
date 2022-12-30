<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class VisitDokter extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'tensi_darah', 'penyakit', 'obat',
        'perkembangan', 'id_dokter',
        'id_pasien_rawat_inap'
    ];
    protected $hidden = [];
}
