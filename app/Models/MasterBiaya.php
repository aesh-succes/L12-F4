<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MasterBiaya extends Model
{
    use HasFactory;

    protected $table = 'master_biayas';

    protected $fillable = [
        'biaya',
    ];

    public function biaya()
    {
        return $this->hasMany(Biaya::class);
    }
}
