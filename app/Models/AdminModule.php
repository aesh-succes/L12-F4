<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminModule extends Model
{
    protected $fillable = [
        'username',
        'module_id',
        'active',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'username', 'username');
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
