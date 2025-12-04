<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'type',
        'status',
    ];

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }

    public function achievements()
    {
        return $this->hasMany(Achievement::class);
    }
}
