<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hewan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tr_hewan';
    protected $fillable = [
        'ras_id',
        'nama',
        'biografi',
        'gambar_utama',
        'umur_min_perawatan',
        'umur_max_perawatan'
    ];

    public function ras()
    {
        return $this->belongsTo(Ras::class, 'ras_id');
    }

    public function jenisHewan()
    {
        return $this->hasOneThrough(
            JenisHewan::class,
            Ras::class,
            'id', // Foreign key on Ras table...
            'id', // Foreign key on JenisHewan table...
            'ras_id', // Local key on Hewan table...
            'jenis_hewan_id' // Local key on Ras table...
        );
    }

    public function galeri()
    {
        return $this->hasMany(GaleriHewan::class, 'hewan_id');
    }

    public function peralatan()
    {
        return $this->belongsToMany(Peralatan::class, 'tr_peralatan_hewan', 'hewan_id', 'peralatan_id')
                   ->withPivot('keterangan', 'wajib')
                   ->withTimestamps();
    }

    public function getGambarUtamaAttribute($value)
    {
        return $value ? asset('storage/' . $value) : asset('images/default-pet.png');
    }
}