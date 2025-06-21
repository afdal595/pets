<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Makanan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'mst_makanan';
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'gambar',
        'stok'
    ];

    public function hewan()
    {
        return $this->belongsToMany(Hewan::class, 'tr_makanan_hewan', 'makanan_id', 'hewan_id')
                   ->withTimestamps();
    }
    
    public function ras()
    {
        return $this->belongsToMany(Ras::class, 'tr_makanan_ras', 'makanan_id', 'ras_id');
    }

    public function getGambarAttribute($value)
    {
        return $value ? asset('storage/' . $value) : asset('images/default-product.png');
    }
}