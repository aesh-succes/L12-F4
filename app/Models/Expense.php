<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang digunakan oleh model ini.
     */
    protected $table = 'expenses';

    /**
     * Kolom yang boleh diisi secara mass-assignment.
     */
    protected $fillable = [
        'transaction_date',
        'vehicle_name',
        'directorate',
        'expense_type',
        'amount',
        'memo',
    ];

    /**
     * Casting tipe data agar Laravel mengenali format tanggal dan angka secara otomatis.
     */
    protected $casts = [
        'transaction_date' => 'date',
        'amount' => 'decimal:2',
    ];
}