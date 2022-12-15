<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kamar extends Model
{
    use SoftDeletes;
    protected $fillable = ['nama_kamar', 'kelas', 'harga'];
    protected $hidden = [];
}
