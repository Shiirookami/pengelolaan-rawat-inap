<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use SoftDeletes;
    protected $fillable = ['nama_dokter', 'no_identitas', 'spesialis', 'jadwal_dokter'];
    protected $hidden = [];

}
