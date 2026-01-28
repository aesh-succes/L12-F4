<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    use HasFactory;

    protected $table = 'service_details';

    protected $fillable = [
        'service_id',
        'suku_cadang_id',
        'harga',
        'jumlah',
        'total',
        'approve',
    ];

    // RELATION
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function sukuCadang()
    {
        return $this->belongsTo(SukuCadang::class);
    }
}
