<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Peralatan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'mst_peralatan';
    
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'gambar',
        'stok'
    ];

    public function hewan()
    {
        return $this->belongsToMany(Hewan::class, 'tr_peralatan_hewan', 'peralatan_id', 'hewan_id')
                   ->withPivot('keterangan', 'wajib')
                   ->withTimestamps();
    }

    public function ras()
    {
        return $this->belongsToMany(Ras::class, 'tr_peralatan_ras', 'peralatan_id', 'ras_id');
    }

    public function getGambarAttribute($value)
    {
        return $value ? asset('storage/' . $value) : asset('images/default-equipment.png');
    }
}