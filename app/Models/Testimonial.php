<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'client_name', 'company', 'position', 'testimonial', 'rating',
        'photo', 'icon', 'bg_color', 'display_order', 'is_active'
    ];

    protected $casts = [
        'rating' => 'integer',
        'display_order' => 'integer',
        'is_active' => 'boolean',
    ];
}
