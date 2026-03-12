<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    protected $fillable = [
        'title', 'slug', 'category', 'short_description', 'full_description',
        'image', 'icon', 'base_price', 'display_order', 'advantages', 'process_steps',
        'faq', 'is_active'
    ];

    protected $casts = [
        'base_price' => 'decimal:2',
        'display_order' => 'integer',
        'advantages' => 'array',
        'process_steps' => 'array',
        'faq' => 'array',
        'is_active' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($service) {
            if (empty($service->slug)) {
                $service->slug = Str::slug($service->title);
            }
        });
    }
}
