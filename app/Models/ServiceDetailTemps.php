<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceDetailTemp extends Model
{
    protected $fillable = [
        'temp_id',
        'detail_id',
        'service_id',
        'spare_part',
        'price',
        'quantity',
        'total_price',
        'username',
    ];
}
