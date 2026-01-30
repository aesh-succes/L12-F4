<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'name',
        'plate_number',
        'year',
        'brand_id',
        'vehicle_type_id',
        'directorate_id',
        'position_id',
        'is_active',
    ];
        /* ======================
     | RELATIONSHIPS
     |====================== */

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class);
    }

    public function directorate()
    {
        return $this->belongsTo(Directorate::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function maintenances()
    {
        return $this->hasMany(Maintenance::class);
    }

    public function costs()
    {
        return $this->hasMany(VehicleCost::class);
    }
}
