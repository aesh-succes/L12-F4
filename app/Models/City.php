<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model

{
    protected $table = 'citys';
    
    protected $fillable = [
        'city_name',
    ];
    public function directorates()
{
    return $this->hasMany(Directorate::class);
}
}
