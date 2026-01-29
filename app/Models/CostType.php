<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CostType extends Model
{
    protected $fillable = ['name'];

    public function vehicleCosts()
    {
        return $this->hasMany(VehicleCost::class);
    }
}
