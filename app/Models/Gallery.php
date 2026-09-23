<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'cover_image',
        'post_date',
    ];

    public function photos()
    {
        return $this->hasMany(GalleryPhoto::class);
    }
}
