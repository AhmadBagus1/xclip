<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of news.
     */
    public function index()
    {
        $news = News::latest()->get();

        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new news article.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created news article.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],

            'excerpt' => ['nullable', 'string'],

            'content' => ['nullable', 'string'],

            'category' => [
                'required',
                'in:company,project,business,industry,event,announcement',
            ],

            'thumbnail' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:5120',
            ],

            'author' => ['nullable', 'string', 'max:255'],

            'published_at' => ['nullable', 'date'],

            'is_featured' => ['nullable', 'boolean'],

            'is_active' => ['nullable', 'boolean'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Generate unique slug
        |--------------------------------------------------------------------------
        */

        $validated['slug'] = Str::slug($validated['title']);

        $originalSlug = $validated['slug'];
        $counter = 1;

        while (News::where('slug', $validated['slug'])->exists()) {
            $validated['slug'] = $originalSlug . '-' . $counter;
            $counter++;
        }

        /*
        |--------------------------------------------------------------------------
        | Checkbox values
        |--------------------------------------------------------------------------
        */

        $validated['is_featured'] = $request->boolean('is_featured');

        $validated['is_active'] = $request->boolean('is_active');

        /*
        |--------------------------------------------------------------------------
        | Upload thumbnail
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request
                ->file('thumbnail')
                ->store('news', 'public');
        }

        /*
        |--------------------------------------------------------------------------
        | Create news
        |--------------------------------------------------------------------------
        */

        News::create($validated);

        return redirect()
            ->route('admin.news.index')
            ->with('success', 'News berhasil ditambahkan.');
    }

    /**
     * Display the specified news article.
     */
    public function show(News $news)
    {
        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified news article.
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified news article.
     */
    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],

            'excerpt' => ['nullable', 'string'],

            'content' => ['nullable', 'string'],

            'category' => [
                'required',
                'in:company,project,business,industry,event,announcement',
            ],

            'thumbnail' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:5120',
            ],

            'author' => ['nullable', 'string', 'max:255'],

            'published_at' => ['nullable', 'date'],

            'is_featured' => ['nullable', 'boolean'],

            'is_active' => ['nullable', 'boolean'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Generate unique slug
        |--------------------------------------------------------------------------
        */

        $newSlug = Str::slug($validated['title']);

        $originalSlug = $newSlug;
        $counter = 1;

        while (
            News::where('slug', $newSlug)
            ->where('id', '!=', $news->id)
            ->exists()
        ) {
            $newSlug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $validated['slug'] = $newSlug;

        /*
        |--------------------------------------------------------------------------
        | Checkbox values
        |--------------------------------------------------------------------------
        */

        $validated['is_featured'] = $request->boolean('is_featured');

        $validated['is_active'] = $request->boolean('is_active');

        /*
        |--------------------------------------------------------------------------
        | Upload new thumbnail
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('thumbnail')) {

            if (
                $news->thumbnail &&
                Storage::disk('public')->exists($news->thumbnail)
            ) {
                Storage::disk('public')->delete($news->thumbnail);
            }

            $validated['thumbnail'] = $request
                ->file('thumbnail')
                ->store('news', 'public');
        }

        /*
        |--------------------------------------------------------------------------
        | Update news
        |--------------------------------------------------------------------------
        */

        $news->update($validated);

        return redirect()
            ->route('admin.news.index')
            ->with('success', 'News berhasil diperbarui.');
    }

    /**
     * Remove the specified news article.
     */
    public function destroy(News $news)
    {
        /*
        |--------------------------------------------------------------------------
        | Delete thumbnail
        |--------------------------------------------------------------------------
        */

        if (
            $news->thumbnail &&
            Storage::disk('public')->exists($news->thumbnail)
        ) {
            Storage::disk('public')->delete($news->thumbnail);
        }

        /*
        |--------------------------------------------------------------------------
        | Delete news
        |--------------------------------------------------------------------------
        */

        $news->delete();

        return redirect()
            ->route('admin.news.index')
            ->with('success', 'News berhasil dihapus.');
    }
}
