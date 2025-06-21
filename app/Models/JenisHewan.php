<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisHewan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'mst_jenis_hewan';
    protected $fillable = ['nama', 'deskripsi', 'icon'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $appends = ['ras_count'];
    

    public function ras()
    {
        return $this->hasMany(Ras::class, 'jenis_hewan_id');
    }

    public function getRasCountAttribute()
    {
        return $this->ras()->count();
    }
}