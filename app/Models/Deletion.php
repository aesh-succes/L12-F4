<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deletion extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'vehicle_id',
        'deleted_at_date',
        'sk_number',
        'memo',
        'input_by',
        'input_date',
    ];
}

