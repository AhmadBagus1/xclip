<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = SiteSetting::first();

        return view(
            'admin.settings.index',
            compact('setting')
        );
    }

    public function update(Request $request)
    {
        $validated = $request->validate([

            // =========================
            // GENERAL
            // =========================

            'site_name' => [
                'required',
                'string',
                'max:255'
            ],

            'tagline' => [
                'nullable',
                'string',
                'max:255'
            ],

            'description' => [
                'nullable',
                'string'
            ],


            // =========================
            // BUSINESS
            // =========================

            'email' => [
                'nullable',
                'email',
                'max:255'
            ],

            'phone' => [
                'nullable',
                'string',
                'max:50'
            ],

            'whatsapp' => [
                'nullable',
                'string',
                'max:50'
            ],

            'address' => [
                'nullable',
                'string'
            ],

            'business_days' => [
                'nullable',
                'string',
                'max:255'
            ],

            'business_hours' => [
                'nullable',
                'string',
                'max:255'
            ],


            // =========================
            // SOCIAL MEDIA
            // =========================

            'instagram' => [
                'nullable',
                'string',
                'max:255'
            ],

            'facebook' => [
                'nullable',
                'string',
                'max:255'
            ],

            'linkedin' => [
                'nullable',
                'string',
                'max:255'
            ],

            'youtube' => [
                'nullable',
                'string',
                'max:255'
            ],


            // =========================
            // SEO
            // =========================

            'seo_title' => [
                'nullable',
                'string',
                'max:255'
            ],

            'seo_description' => [
                'nullable',
                'string',
                'max:500'
            ],

            'seo_keywords' => [
                'nullable',
                'string'
            ],

            'canonical_url' => [
                'nullable',
                'url',
                'max:255'
            ],

            'robots' => [
                'required',
                'string',
                'max:100'
            ],


            // =========================
            // OPEN GRAPH
            // =========================

            'og_title' => [
                'nullable',
                'string',
                'max:255'
            ],

            'og_description' => [
                'nullable',
                'string',
                'max:500'
            ],


            // =========================
            // GOOGLE TOOLS
            // =========================

            'google_analytics_id' => [
                'nullable',
                'string',
                'max:255'
            ],

            'google_site_verification' => [
                'nullable',
                'string',
                'max:255'
            ],


            // =========================
            // GOOGLE MAPS
            // =========================

            'google_maps_embed' => [
                'nullable',
                'string'
            ],
        ]);


        // =========================
        // GET CURRENT SETTINGS
        // =========================

        $setting = SiteSetting::first();


        // =========================
        // CREATE / UPDATE
        // =========================

        if (!$setting) {

            $setting = SiteSetting::create(
                $validated
            );
        } else {

            $setting->update(
                $validated
            );
        }


        // =========================
        // REDIRECT
        // =========================

        return redirect()
            ->route('admin.settings.index')
            ->with(
                'success',
                'Settings berhasil diperbarui.'
            );
    }
}
