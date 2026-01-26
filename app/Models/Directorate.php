<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Directorate extends Model
{
    protected $fillable = [
    'name',
    'phone_number_1',
    'phone_number_2',
];


    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
