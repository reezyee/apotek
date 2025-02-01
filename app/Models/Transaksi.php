<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = [
        'pemesanan_id',
        'kasir_id',
        'kode_transaksi',
        'total_harga',
        'metode_pembayaran',
        'status_pembayaran',
        'catatan',
    ];

    // Relasi ke tabel pemesanan_obat
    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'pemesanan_id');
    }

    // Relasi ke kasir
    public function kasir()
    {
        return $this->belongsTo(User::class, 'kasir_id');
    }
}
