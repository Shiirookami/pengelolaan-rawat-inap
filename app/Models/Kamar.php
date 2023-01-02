<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\PasienRawatInap;

class Kamar extends Model
{
    use SoftDeletes;
    protected $fillable = ['id','nama_kamar', 'kelas', 'harga'];
    protected $hidden = [];
    protected $primaryKey = "id";

    public function PasienRawatInap()
    {
        return $this->hasMany(PasienRawatInap::class);
    }
}
