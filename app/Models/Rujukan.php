<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Rujukan extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'tanggal', 'nama_rumah_sakit', 'diagnosis', 'pertolongan_pertama',
        'id_pasien'
    ];
    protected $hidden = [];

    public function pasien()
    {
        return $this->belongsTo(PasienRawatInap::class, 'id_pasien', 'id');
    }
}
