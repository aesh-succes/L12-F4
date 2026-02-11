<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $fillable = [
        'vehicle_id',
        'service_date',
        'mileage',
        'cost',
        'issue_description',
    ];

    protected static function booted()
    {
        static::saved(function ($maintenance) {
            $maintenance->updateQuietly([
                'cost' => $maintenance->details
                    ->sum(fn ($d) => $d->quantity * $d->price),
            ]);
        });
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function details()
    {
        return $this->hasMany(MaintenanceDetail::class);
    }
}
