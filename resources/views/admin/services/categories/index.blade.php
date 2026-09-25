@extends('layouts.admin')

@section('title', 'Service Categories - Xclip Admin')

@section('page-title', 'Service Categories')

@section('content')

<div class="admin-services-page">

    {{-- =========================================================
         HEADER
    ========================================================== --}}

    <div class="admin-page-header">

        <div>

            <p class="admin-page-kicker">
                SERVICES / CATEGORIES
            </p>

            <h2>
                Service Categories
            </h2>

            <p class="admin-page-description">
                Kelola kategori layanan yang digunakan pada
                website Xclip.
            </p>

        </div>


        <div class="admin-page-actions">

            <a
                href="{{ route('admin.services.create') }}"
                class="admin-primary-button">

                <span>+</span>

                Add Category

            </a>



        </div>

    </div>


    {{-- =========================================================
         ERROR
    ========================================================== --}}

    @if(session('error'))

    <div class="admin-alert admin-alert-error">

        <span class="admin-alert-icon">
            !
        </span>

        <span>
            {{ session('error') }}
        </span>

    </div>

    @endif


    {{-- =========================================================
         SUCCESS
    ========================================================== --}}

    @if(session('success'))

    <div class="admin-alert admin-alert-success">

        <span class="admin-alert-icon">
            ✓
        </span>

        <span>
            {{ session('success') }}
        </span>

    </div>

    @endif


    {{-- =========================================================
         CATEGORY LIST
    ========================================================== --}}

    <div class="admin-dashboard-section">

        <div class="admin-section-heading">

            <div>

                <p class="admin-section-kicker">
                    CATEGORY LIST
                </p>

                <h3>
                    All Categories
                </h3>

            </div>

            <span class="admin-section-count">
                {{ $categories->count() }} Categories
            </span>

        </div>


        @if($categories->count())

        <div class="admin-service-category-grid">

            @foreach($categories as $category)

            <article class="admin-service-category-card">

                {{-- =================================================
                             ICON
                        ================================================== --}}

                <div class="admin-service-category-icon">

                    {{ $category->icon ?: '+' }}

                </div>


                <div class="admin-service-category-content">

                    {{-- =================================================
                                 TOP
                            ================================================== --}}

                    <div class="admin-service-category-top">

                        @if($category->is_active)

                        <span class="admin-status-badge admin-status-active">
                            Active
                        </span>

                        @else

                        <span class="admin-status-badge admin-status-inactive">
                            Inactive
                        </span>

                        @endif

                    </div>


                    {{-- =================================================
                                 CATEGORY NAME
                            ================================================== --}}

                    <h4>
                        {{ $category->name }}
                    </h4>


                    {{-- =================================================
                                 DESCRIPTION
                            ================================================== --}}

                    <p>
                        {{ $category->description
                                    ?: 'Belum ada deskripsi kategori.' }}
                    </p>


                    {{-- =================================================
                                 SORT ORDER
                            ================================================== --}}

                    <div class="admin-service-category-meta">

                        <strong>
                            #{{ $category->sort_order }}
                        </strong>

                        <span>
                            Display Order
                        </span>

                    </div>


                    {{-- =================================================
                                 ACTIONS
                            ================================================== --}}

                    <div class="admin-service-actions">

                        <a
                            href="{{ route(
                                        'admin.services.edit',
                                        $category
                                    ) }}"
                            class="admin-action-link">

                            Edit

                        </a>


                        <form
                            action="{{ route(
                                        'admin.services.destroy',
                                        $category
                                    ) }}"
                            method="POST"
                            class="swal-delete-form">

                            @csrf

                            @method('DELETE')

                            <button
                                type="submit"
                                class="admin-action-link admin-action-delete">

                                Delete

                            </button>

                        </form>

                    </div>

                </div>

            </article>

            @endforeach

        </div>

        @else

        {{-- =====================================================
                 EMPTY STATE
            ====================================================== --}}

        <div class="admin-empty-state">

            <div class="admin-empty-icon">
                +
            </div>

            <h4>
                Belum ada kategori
            </h4>

            <p>
                Belum ada service category.
                Buat kategori pertama untuk mulai mengelola
                layanan Xclip.
            </p>

            <a
                href="{{ route('admin.services.create') }}"
                class="admin-primary-button">

                <span>+</span>

                Add Category

            </a>

        </div>

        @endif

    </div>

</div>

@endsection