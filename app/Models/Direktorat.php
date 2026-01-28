<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Direktorat extends Model
{
    use HasFactory;

    protected $table = 'direktorats';

    protected $fillable = [
        'direktorat',
        'no_hp_1',
        'no_hp_2',
        'kota_kab_id',
    ];

    public function kotaKab()
    {
        return $this->belongsTo(KotaKab::class);
    }

    public function kendaraan()
    {
        return $this->hasMany(Kendaraan::class);
    }
}
