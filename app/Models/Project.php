<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = [
        'title', 'slug', 'client', 'project_date', 'location', 'domain', 'category',
        'short_description', 'context', 'summary', 'hero_image', 'features', 'benefits',
        'target_audience', 'gallery', 'is_featured', 'is_active'
    ];

    protected $casts = [
        'project_date' => 'date',
        'features' => 'array',
        'benefits' => 'array',
        'target_audience' => 'array',
        'gallery' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->title);
            }
        });
    }
}
