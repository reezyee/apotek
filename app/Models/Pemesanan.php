<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanan';

    protected $fillable = [
        'user_id',
        'kasir_id',
        'kode_pemesanan',
        'tanggal_pemesanan',
        'status',
        'catatan'
    ];
    // Relasi ke user (pelanggan)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi ke kasir
    public function kasir()
    {
        return $this->belongsTo(User::class, 'kasir_id');
    }

    // Relasi ke transaksi
    public function transaksi()
    {
        return $this->hasOne(Transaksi::class, 'pemesanan_id');
    }
}
