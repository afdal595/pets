<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeralatanHewan extends Model
{
    use HasFactory;

    protected $table = 'tr_peralatan_hewan';
    protected $fillable = ['hewan_id', 'peralatan_id', 'keterangan', 'wajib'];

    public function hewan()
    {
        return $this->belongsTo(Hewan::class, 'hewan_id');
    }

    public function peralatan()
    {
        return $this->belongsTo(Peralatan::class, 'peralatan_id');
    }
}