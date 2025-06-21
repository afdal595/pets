<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PetGuild extends Model
{
    protected $fillable = ['name', 'description', 'level', 'master_id'];
}