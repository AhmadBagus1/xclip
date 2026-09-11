<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RfqRequest extends Model
{
    protected $fillable = [
        'company',
        'company_type',
        'name',
        'position',
        'email',
        'phone',
        'project_name',
        'service',
        'project_location',
        'project_status',
        'budget',
        'timeline',
        'description',
        'document',
        'agreement',
        'status',
        'is_read',
    ];

    protected $casts = [
        'agreement' => 'boolean',
    ];
}
