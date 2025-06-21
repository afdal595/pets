<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PencarianLog extends Model
{
    use HasFactory;

    protected $table = 'tr_pencarian_log';
    protected $fillable = [
        'user_id',
        'keyword',
        'results_count',
        'ip_address',
        'user_agent',
        'created_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}