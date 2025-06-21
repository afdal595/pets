<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ras extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'mst_ras';
    
    protected $fillable = [
        'jenis_hewan_id',
        'nama',
        'deskripsi',
        'karakteristik',
        'perawatan',
        'gambar',
        'gambar_thumbnail'
    ];

    public function jenisHewan()
    {
        return $this->belongsTo(JenisHewan::class, 'jenis_hewan_id');
    }

    public function hewan()
    {
        return $this->hasMany(Hewan::class, 'ras_id');
    }

    public function galeriHewan()
    {
        return $this->hasMany(GaleriHewan::class, 'ras_id');
    }

    public function makanan()
    {
        return $this->belongsToMany(Makanan::class, 'tr_makanan_ras', 'ras_id', 'makanan_id');
    }

    public function peralatan()
    {
        return $this->belongsToMany(Peralatan::class, 'tr_peralatan_ras', 'ras_id', 'peralatan_id');
    }

    public function getGambarThumbnailAttribute($value)
    {
        return $value ? asset('storage/' . $value) : asset('images/default-pet.png');
    }
}