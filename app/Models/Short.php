<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Short extends Model
{
    protected $fillable = [
        'title',
        'url',
        'platform',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
