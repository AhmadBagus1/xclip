<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'client',
        'category',
        'location',
        'year',
        'status',
        'description',
        'thumbnail',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'year' => 'integer',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];
}
