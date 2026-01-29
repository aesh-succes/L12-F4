<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleDeletion extends Model
{
    protected $fillable = [
        'vehicle_id',
        'deletion_date',
        'decree_number',
        'remarks',
        'created_by',
    ];

    protected $casts = [
        'deletion_date' => 'date',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
