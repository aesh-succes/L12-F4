<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SparePart extends Model
{
    protected $fillable = ['name', 'price'];

    public function maintenanceDetails()
    {
        return $this->hasMany(MaintenanceDetail::class);
    }
    public function serviceNotes()
{
    return $this->belongsToMany(
        ServiceNote::class,
        'service_note_details'
    );
}

}
