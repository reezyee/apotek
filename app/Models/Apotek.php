<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apotek extends Model
{
    use HasFactory;

    /**
     * Nama tabel di database.
     */
    protected $table = 'apotek';

    /**
     * Kolom-kolom yang bisa diisi secara massal (mass-assignable).
     */
    protected $fillable = [
        'nama_apotek',
        'nomor_izin_apotek',
        'alamat_apotek',
        'lokasi_apotek',
        'nama_apoteker',
        'sipa',
        'jadwal_praktik',
    ];
}
