<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceDetail extends Model
{
    protected $fillable = [
        'maintenance_id',
        'spare_part_id',
        'qty',
        'price',
    ];

    public function maintenance()
    {
        return $this->belongsTo(Maintenance::class);
    }

    public function sparePart()
    {
        return $this->belongsTo(SparePart::class);
    }
}
