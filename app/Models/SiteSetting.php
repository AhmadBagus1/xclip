<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        // General
        'site_name',
        'tagline',
        'description',
        'logo',
        'favicon',

        // Business
        'email',
        'phone',
        'whatsapp',
        'address',
        'business_days',
        'business_hours',

        // Social Media
        'instagram',
        'facebook',
        'linkedin',
        'youtube',

        // SEO
        'seo_title',
        'seo_description',
        'seo_keywords',
        'canonical_url',
        'robots',

        // Open Graph
        'og_title',
        'og_description',
        'og_image',

        // Google Tools
        'google_analytics_id',
        'google_site_verification',

        // Google Maps
        'google_maps_embed',
    ];
}
