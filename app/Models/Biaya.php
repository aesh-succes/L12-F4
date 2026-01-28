<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biaya extends Model
{
    use HasFactory;

    protected $table = 'biayas';

    protected $fillable = [
        'master_biaya_id',
        'tanggal',
        'jumlah',
        'memo',
    ];
}
