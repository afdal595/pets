<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petshop extends Model
{
    use HasFactory;

    // Tambahkan properti yang relevan jika diperlukan, seperti $fillable
    protected $fillable = ['name', 'address'];
}