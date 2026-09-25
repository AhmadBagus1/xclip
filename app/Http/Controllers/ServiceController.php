<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;

class ServiceController extends Controller
{
    /**
     * Menampilkan daftar service category
     * pada halaman public Services.
     */
    public function index()
    {
        $categories = ServiceCategory::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view(
            'public.services.services',
            compact('categories')
        );
    }
}
