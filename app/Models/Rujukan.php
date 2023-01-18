<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Rujukan extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'tanggal', 'nama_rumah_sakit', 
        'diagnosis', 'pertolongan_pertama', 'no_identitas', 
        'nama_pasien', 'tanggal_lahir', 'alamat',
    ];
    protected $hidden = [];
}
