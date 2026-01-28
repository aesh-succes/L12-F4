<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MerkKendaraan extends Model
{
    use HasFactory;

    protected $table = 'merk_kendaraans';

    protected $fillable = [
        'merk',
    ];

    public function kendaraan()
    {
        return $this->hasMany(Kendaraan::class);
    }
}
