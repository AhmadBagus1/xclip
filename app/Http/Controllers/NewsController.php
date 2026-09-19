<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::where('is_active', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->latest('published_at')
            ->get();

        $featuredNews = $news
            ->where('is_featured', true)
            ->values();

        $latestNews = $news
            ->where('is_featured', false)
            ->values();

        return view('public.news.news', compact(
            'featuredNews',
            'latestNews'
        ));
    }

    public function show(News $news)
    {
        if (
            !$news->is_active ||
            !$news->published_at ||
            $news->published_at->isFuture()
        ) {
            abort(404);
        }

        return view('public.news.show', compact('news'));
    }
}
