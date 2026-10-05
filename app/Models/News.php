<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'content', 'category_id', 'image_url', 'published_date'];

    protected function casts(): array
    {
        return [
            'published_date' => 'date',
        ];
    }

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

    public function getImageUrlAttribute($value)
    {
        if (empty($value)) {
            return [];
        }

        if (is_array($value)) {
            return $value;
        }

        $decoded = json_decode($value, true);
        if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
            return $decoded;
        }

        return [$value];
    }

    public function setImageUrlAttribute($value)
    {
        if (is_array($value)) {
            $this->attributes['image_url'] = json_encode(array_values(array_filter($value)));
        } else {
            $this->attributes['image_url'] = $value;
        }
    }
}
