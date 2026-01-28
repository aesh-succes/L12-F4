<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraans';

    protected $fillable = [
        'jenis_kendaraan_id',
        'merk_kendaraan_id',
        'directorate_id',
        'jabatan_id',
        'no_polisi',
        'no_rangka',
        'no_mesin',
        'tgl_stnk',
        'tahun_beli',
        'warna',
        'active',
        'lat',
        'long',
        'posisi',
        'memo',
        'type',
        'nilai_perolehan',
        'no_bast',
        'tgl_bast',
        'kondisi_mesin',
        'kondisi_body',
        'biaya_stnk',
        'biaya_stnk_5_tahun',
        'penghapusan',
        'lock',
        'asuransi',
        'kir',
        'pemakai',
        'no_hp',
    ];

    /* ================= RELATION ================= */

    public function jenisKendaraan()
    {
        return $this->belongsTo(JenisKendaraan::class);
    }

    public function merkKendaraan()
    {
        return $this->belongsTo(MerkKendaraan::class);
    }

    public function direktorat()
    {
        return $this->belongsTo(Direktorat::class);
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
