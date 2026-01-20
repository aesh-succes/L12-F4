<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = ['name'];

    public function userModules()
    {
        return $this->hasMany(UserModule::class);
    }
}
