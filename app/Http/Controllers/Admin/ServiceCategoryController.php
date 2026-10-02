<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of service categories.
     */
    public function index()
    {
        $categories = ServiceCategory::query()
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view(
            'admin.services.categories.index',
            compact('categories')
        );
    }


    /**
     * Show the form for creating a new service category.
     */
    public function create()
    {
        return view('admin.services.categories.create');
    }


    /**
     * Store a newly created service category.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                'unique:service_categories,name',
            ],

            'slug' => [
                'nullable',
                'string',
                'max:255',
                'unique:service_categories,slug',
            ],

            'icon' => [
                'nullable',
                'string',
                'max:50',
            ],

            'description' => [
                'nullable',
                'string',
            ],

            'image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:10240',
            ],

            'sort_order' => [
                'nullable',
                'integer',
                'min:0',
            ],

            'is_active' => [
                'nullable',
                'boolean',
            ],
        ]);


        /*
        |--------------------------------------------------------------------------
        | Generate slug
        |--------------------------------------------------------------------------
        */

        $slug = !empty($validated['slug'])
            ? Str::slug($validated['slug'])
            : Str::slug($validated['name']);


        /*
        |--------------------------------------------------------------------------
        | Pastikan slug tetap unik
        |--------------------------------------------------------------------------
        */

        $originalSlug = $slug;
        $counter = 1;

        while (
            ServiceCategory::where('slug', $slug)->exists()
        ) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }


        /*
        |--------------------------------------------------------------------------
        | Upload image
        |--------------------------------------------------------------------------
        */

        $imagePath = null;

        if ($request->hasFile('image')) {

            $imagePath = $request
                ->file('image')
                ->store('services', 'public');
        }


        /*
        |--------------------------------------------------------------------------
        | Create service category
        |--------------------------------------------------------------------------
        */

        ServiceCategory::create([
            'name' => $validated['name'],
            'slug' => $slug,
            'icon' => $validated['icon'] ?? null,
            'description' => $validated['description'] ?? null,
            'image' => $imagePath,
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active' => $request->boolean('is_active'),
        ]);


        return redirect()
            ->route('admin.services.index')
            ->with(
                'success',
                'Service category berhasil ditambahkan.'
            );
    }


    /**
     * Show the form for editing a service category.
     */
    public function edit(ServiceCategory $category)
    {
        return view(
            'admin.services.categories.edit',
            compact('category')
        );
    }


    /**
     * Update the specified service category.
     */
    public function update(
        Request $request,
        ServiceCategory $category
    ) {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                'unique:service_categories,name,' . $category->id,
            ],

            'slug' => [
                'nullable',
                'string',
                'max:255',
                'unique:service_categories,slug,' . $category->id,
            ],

            'icon' => [
                'nullable',
                'string',
                'max:50',
            ],

            'description' => [
                'nullable',
                'string',
            ],

            'image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:10240',
            ],

            'sort_order' => [
                'nullable',
                'integer',
                'min:0',
            ],

            'is_active' => [
                'nullable',
                'boolean',
            ],
        ]);


        /*
        |--------------------------------------------------------------------------
        | Generate slug
        |--------------------------------------------------------------------------
        */

        $slug = !empty($validated['slug'])
            ? Str::slug($validated['slug'])
            : Str::slug($validated['name']);


        /*
        |--------------------------------------------------------------------------
        | Pastikan slug tidak bentrok dengan category lain
        |--------------------------------------------------------------------------
        */

        $originalSlug = $slug;
        $counter = 1;

        while (
            ServiceCategory::where('slug', $slug)
            ->where('id', '!=', $category->id)
            ->exists()
        ) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }


        /*
        |--------------------------------------------------------------------------
        | Handle image
        |--------------------------------------------------------------------------
        */

        $imagePath = $category->image;

        if ($request->hasFile('image')) {

            // Hapus gambar lama
            if ($category->image) {
                Storage::disk('public')->delete(
                    $category->image
                );
            }

            // Simpan gambar baru
            $imagePath = $request
                ->file('image')
                ->store('services', 'public');
        }


        /*
        |--------------------------------------------------------------------------
        | Update service category
        |--------------------------------------------------------------------------
        */

        $category->update([
            'name' => $validated['name'],
            'slug' => $slug,
            'icon' => $validated['icon'] ?? null,
            'description' => $validated['description'] ?? null,
            'image' => $imagePath,
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active' => $request->boolean('is_active'),
        ]);


        return redirect()
            ->route('admin.services.index')
            ->with(
                'success',
                'Service category berhasil diperbarui.'
            );
    }


    /**
     * Remove the specified service category.
     */
    public function destroy(ServiceCategory $category)
    {
        /*
        |--------------------------------------------------------------------------
        | Hapus gambar jika category memiliki gambar
        |--------------------------------------------------------------------------
        */

        if ($category->image) {
            Storage::disk('public')->delete(
                $category->image
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Hapus service category
        |--------------------------------------------------------------------------
        */

        $category->delete();


        return redirect()
            ->route('admin.services.index')
            ->with(
                'success',
                'Service category berhasil dihapus.'
            );
    }
}
