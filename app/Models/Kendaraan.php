<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    public $table = "kendaraan";

    protected $fillable = [
        'nama',
        'dept',
        'kategori',
        'merk',
        'jenis',
        'no_plat',
        'helm',
        'knalpot',
        'spion',
        'plat',
        'sim',
        'exp_sim',
        'stnk',
        'exp_stnk',
        'sticker'
    ];
}
