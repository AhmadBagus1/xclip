<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Project;
use App\Models\ServiceCategory;

class HomeController extends Controller
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | SERVICE CATEGORIES
        |--------------------------------------------------------------------------
        | Mengambil kategori layanan aktif dari database.
        | Data ini digunakan oleh section Services di Home.
        */
        $serviceCategories = ServiceCategory::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        /*
        |--------------------------------------------------------------------------
        | FEATURED PROJECTS
        |--------------------------------------------------------------------------
        */
        $featuredProjects = Project::where('is_active', true)
            ->where('is_featured', true)
            ->latest()
            ->take(3)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | LATEST NEWS
        |--------------------------------------------------------------------------
        */
        $latestNews = News::where('is_active', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('public.home', compact(
            'serviceCategories',
            'featuredProjects',
            'latestNews'
        ));
    }
}
