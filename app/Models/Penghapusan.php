<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghapusan extends Model
{
    use HasFactory;

    protected $table = 'penghapusans';

    protected $fillable = [
        'kendaraan_id',
        'tgl',
        'no_sk',
        'memo',
        'input_by',
        'input_date',
    ];

    // RELATION
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

    public function inputBy()
    {
        return $this->belongsTo(Admin::class, 'input_by');
    }
}
