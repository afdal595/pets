<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MstJenisHewan extends Model
{
    protected $table = 'mst_jenis_hewan';
    protected $fillable = ['nama', 'deskripsi'];
}
