<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'video_id',
        'title',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
