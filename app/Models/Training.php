<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Training extends Model
{
    protected $fillable = [
        'title', 'slug', 'short_description', 'full_description', 'image',
        'duration', 'level', 'price', 'features', 'solutions', 'pricing_packs',
        'related_services', 'is_active'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'features' => 'array',
        'solutions' => 'array',
        'pricing_packs' => 'array',
        'related_services' => 'array',
        'is_active' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($training) {
            if (empty($training->slug)) {
                $training->slug = Str::slug($training->title);
            }
        });
    }
}
