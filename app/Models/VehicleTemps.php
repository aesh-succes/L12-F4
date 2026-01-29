<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;

class VehicleTemp extends Model
{
    protected $fillable = [
        'vehicle_id',
        'license_plate',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
