<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Project;
use App\Models\SiteSetting;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * Generate dynamic XML sitemap.
     */
    public function index(): Response
    {
        $siteSetting = SiteSetting::first();
        $baseUrl = config('app.url');

        // Static routes
        $staticRoutes = [
            [
                'url' => route('home'),
                'lastmod' => $siteSetting?->updated_at?->toAtomString() ?? now()->toAtomString(),
                'changefreq' => 'daily',
                'priority' => '1.0',
            ],
            [
                'url' => route('about'),
                'lastmod' => $siteSetting?->updated_at?->toAtomString() ?? now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8',
            ],
            [
                'url' => route('services'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.8',
            ],
            [
                'url' => route('projects'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.8',
            ],
            [
                'url' => route('news'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'daily',
                'priority' => '0.8',
            ],
            [
                'url' => route('downloads'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.6',
            ],
            [
                'url' => route('contact'),
                'lastmod' => $siteSetting?->updated_at?->toAtomString() ?? now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.7',
            ],
            [
                'url' => route('rfq'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.7',
            ],
        ];

        // Dynamic Projects
        $projects = Project::where('is_active', true)
            ->latest('updated_at')
            ->get();

        $projectUrls = $projects->map(function ($project) {
            return [
                'url' => route('projects.show', $project->slug),
                'lastmod' => ($project->updated_at ?? $project->created_at ?? now())->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.7',
            ];
        });

        // Dynamic News
        $news = News::where('is_active', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->latest('published_at')
            ->get();

        $newsUrls = $news->map(function ($item) {
            $lastmod = $item->updated_at ?? $item->published_at ?? now();
            return [
                'url' => route('news.show', $item->slug),
                'lastmod' => $lastmod->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.7',
            ];
        });

        $urls = array_merge($staticRoutes, $projectUrls->toArray(), $newsUrls->toArray());

        $content = view('sitemap', [
            'urls' => $urls,
        ])->render();

        return response($content, 200)
            ->header('Content-Type', 'text/xml; charset=utf-8');
    }
}
