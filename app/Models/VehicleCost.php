<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleCost extends Model
{
    protected $fillable = [
        'vehicle_id',
        'cost_type_id',
        'amount',
        'date',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function costType()
    {
        return $this->belongsTo(CostType::class);
    }
}
