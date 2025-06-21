<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GaleriHewan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tr_galeri_hewan';
    
    protected $fillable = [
        'ras_id',
        'hewan_id',
        'judul',
        'gambar',
        'deskripsi'
    ];

    public function ras()
    {
        return $this->belongsTo(Ras::class, 'ras_id');
    }

    public function hewan()
    {
        return $this->belongsTo(Hewan::class, 'hewan_id');
    }

    public function getGambarAttribute($value)
    {
        return $value ? asset('storage/' . $value) : asset('images/default-pet.png');
    }
}