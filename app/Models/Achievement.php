<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = [
        'image_url',
        'content',
        'category_id',
        'published_date',
    ];

    protected $casts = [
        'published_date' => 'date',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault([
            'name' => 'Uncategorized'
        ]);
    }

    protected $appends = ['category_name'];

    public function getCategoryNameAttribute()
    {
        return $this->category->name;
    }
}
