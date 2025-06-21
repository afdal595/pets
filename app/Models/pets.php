<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    use HasFactory;

    // Jika ingin menggunakan tabel yang sudah ada (tr_hewan)
    protected $table = 'tr_hewan';
    
    protected $fillable = [
        'ras_id',
        'nama',
        'biografi',
        'gambar_utama',
        'umur_min_perawatan',
        'umur_max_perawatan'
    ];

    // Relasi ke Ras
    public function ras()
    {
        return $this->belongsTo(Ras::class, 'ras_id');
    }

    // Relasi ke Galeri
    public function galeri()
    {
        return $this->hasMany(GaleriHewan::class, 'hewan_id');
    }

    // Relasi ke Peralatan
    public function peralatan()
    {
        return $this->belongsToMany(Peralatan::class, 'tr_peralatan_hewan', 'hewan_id', 'peralatan_id')
                   ->withPivot('keterangan', 'wajib')
                   ->withTimestamps();
    }
}