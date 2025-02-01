<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika mengikuti konvensi Laravel)
    protected $table = 'obats';

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama',         // Nama obat
        'kategori_id',  // ID kategori (foreign key)
        'banyak',       // Jumlah stok
        'sisa',         // Sisa stok
        'harga',        // Harga obat
        'foto',         // URL foto obat
        'is_available', // Ketersediaan obat
    ];

    /**
     * Relasi ke model Kategori.
     * Setiap obat hanya memiliki satu kategori.
     */
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
