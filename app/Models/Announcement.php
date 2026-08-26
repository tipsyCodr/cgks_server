<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = ['title', 'content', 'category_id', 'image_url', 'published_date'];
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
