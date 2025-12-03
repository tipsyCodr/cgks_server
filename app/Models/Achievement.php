<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = [
        'image_url',
        'content',
        'published_date',
    ];

    protected $casts = [
        'published_date' => 'date',
    ];
}
