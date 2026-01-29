<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GpsLog extends Model
{
    protected $fillable = [
        'license_plate',
        'latitude',
        'longitude',
        'logged_at',
    ];

    protected $casts = [
        'logged_at' => 'datetime',
    ];
}
