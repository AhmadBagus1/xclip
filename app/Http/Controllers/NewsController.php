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

        $featured = $news
            ->where('is_featured', true)
            ->first();

        return view('public.news.news', compact(
            'news',
            'featured'
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
