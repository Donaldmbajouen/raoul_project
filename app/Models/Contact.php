<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'subject', 'message', 'status', 'notes'
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
