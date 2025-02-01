<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubchildKategori extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'parent_child_kategori_id'];

    public function parent()
    {
        return $this->belongsTo(ChildKategori::class, 'parent_child_kategori_id');
    }
}
