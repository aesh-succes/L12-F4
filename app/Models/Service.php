<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'kendaraan_id',
        'tgl_service',
        'km_service',
        'biaya',
        'note',
        'input_by',
        'input_date',
        'change_by',
        'change_date',
        'edit_number',
        'no_register',
        'tgl_next_service',
        'tgl_nota_dinas',
        'nota_dinas',
        'kata_pengantar',
        'nama',
        'nip',
        'jabatan',
        'tembusan',
        'approve',
    ];

    // RELATION
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

    public function serviceDetails()
    {
        return $this->hasMany(ServiceDetail::class);
    }

    public function inputBy()
    {
        return $this->belongsTo(Admin::class, 'input_by');
    }

    public function changeBy()
    {
        return $this->belongsTo(Admin::class, 'change_by');
    }
}
