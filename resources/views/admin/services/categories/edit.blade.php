@extends('layouts.admin')

@section('title', 'Edit Service Category - Xclip Admin')

@section('page-title', 'Edit Service Category')

@section('content')

<div class="admin-services-page">

    {{-- =========================================================
         PAGE HEADER
    ========================================================== --}}

    <div class="admin-page-header">

        <div>

            <p class="admin-page-kicker">
                SERVICES / CATEGORIES
            </p>

            <h2>
                Edit Service Category
            </h2>

            <p class="admin-page-description">
                Perbarui informasi kategori layanan Xclip.
            </p>

        </div>


        <div class="admin-page-actions">

            <a
                href="{{ route('admin.services.index') }}"
                class="admin-action-link">

                Back to Categories

            </a>

        </div>

    </div>


    {{-- =========================================================
         VALIDATION ERROR
    ========================================================== --}}

    @if($errors->any())

    <div class="admin-alert admin-alert-error">

        <span class="admin-alert-icon">
            !
        </span>

        <div>

            @foreach($errors->all() as $error)

            <div>
                {{ $error }}
            </div>

            @endforeach

        </div>

    </div>

    @endif


    {{-- =========================================================
         CATEGORY FORM
    ========================================================== --}}

    <div class="admin-dashboard-section">

        <div class="admin-section-heading">

            <div>

                <p class="admin-section-kicker">
                    CATEGORY INFORMATION
                </p>

                <h3>
                    {{ $category->name }}
                </h3>

            </div>

        </div>


        <form
            action="{{ route('admin.services.update', $category) }}"
            method="POST"
            class="admin-form">

            @csrf

            @method('PUT')


            {{-- =================================================
                 CATEGORY NAME
            ================================================== --}}

            <div class="admin-form-group">

                <label for="name">
                    Category Name
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name', $category->name) }}"
                    placeholder="Contoh: Construction"
                    required>

                @error('name')

                <span class="admin-form-error">
                    {{ $message }}
                </span>

                @enderror

            </div>


            {{-- =================================================
                 SLUG
            ================================================== --}}

            <div class="admin-form-group">

                <label for="slug">
                    Slug
                </label>

                <input
                    type="text"
                    id="slug"
                    name="slug"
                    value="{{ old('slug', $category->slug) }}"
                    placeholder="Contoh: construction">

                <small>
                    Slug digunakan sebagai identitas URL kategori.
                </small>

                @error('slug')

                <span class="admin-form-error">
                    {{ $message }}
                </span>

                @enderror

            </div>


            {{-- =================================================
                 ICON
            ================================================== --}}

            <div class="admin-form-group">

                <label for="icon">
                    Icon / Symbol
                </label>

                <input
                    type="text"
                    id="icon"
                    name="icon"
                    value="{{ old('icon', $category->icon) }}"
                    placeholder="Contoh: +">

                <small>
                    Bisa menggunakan simbol seperti +, ×, ○, * atau karakter lainnya.
                </small>

                @error('icon')

                <span class="admin-form-error">
                    {{ $message }}
                </span>

                @enderror

            </div>


            {{-- =================================================
                 DESCRIPTION
            ================================================== --}}

            <div class="admin-form-group">

                <label for="description">
                    Description
                </label>

                <textarea
                    id="description"
                    name="description"
                    rows="6"
                    placeholder="Deskripsi singkat kategori layanan...">{{ old('description', $category->description) }}</textarea>

                @error('description')

                <span class="admin-form-error">
                    {{ $message }}
                </span>

                @enderror

            </div>


            {{-- =================================================
                 DISPLAY ORDER
            ================================================== --}}

            <div class="admin-form-group">

                <label for="sort_order">
                    Display Order
                </label>

                <input
                    type="number"
                    id="sort_order"
                    name="sort_order"
                    value="{{ old('sort_order', $category->sort_order) }}"
                    min="0">

                <small>
                    Angka yang lebih kecil akan ditampilkan lebih dahulu.
                </small>

                @error('sort_order')

                <span class="admin-form-error">
                    {{ $message }}
                </span>

                @enderror

            </div>


            {{-- =================================================
                 PUBLISH SETTINGS
            ================================================== --}}

            <div class="admin-form-group">



                <div class="admin-checkbox-wrapper">

                    <label class="admin-checkbox">

                        <input
                            type="checkbox"
                            name="is_active"
                            value="1"
                            {{ old('is_active', $category->is_active) ? 'checked' : '' }}>

                        <span class="admin-checkbox-content">

                            <strong>
                                Active
                            </strong>

                            <small>
                                Kategori aktif akan ditampilkan pada halaman public Services.
                            </small>

                        </span>

                    </label>

                </div>

            </div>


            {{-- =================================================
                 FORM ACTIONS
            ================================================== --}}

            <div class="admin-form-actions">

                <a
                    href="{{ route('admin.services.index') }}"
                    class="admin-action-link">

                    Cancel

                </a>


                <button
                    type="submit"
                    class="admin-primary-button">

                    Save Changes

                </button>

            </div>

        </form>

    </div>

</div>

@endsection