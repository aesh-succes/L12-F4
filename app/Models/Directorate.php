<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Directorate extends Model
{
    protected $fillable = [
        'name',
        'city_id',
        'phone_number_1',
        'phone_number_2',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
