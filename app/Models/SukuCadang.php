<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SukuCadang extends Model
{
    use HasFactory;

    protected $table = 'suku_cadangs';

    protected $fillable = [
        'nama',
        'harga',
    ];

    public function serviceDetails()
    {
        return $this->hasMany(ServiceDetail::class);
    }
}
