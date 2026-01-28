<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KotaKab extends Model
{
    use HasFactory;

    protected $table = 'kota_kabs';

    protected $fillable = [
        'kota_kab',
    ];

    public function direktorats()
    {
        return $this->hasMany(Direktorat::class);
    }
}
