@extends('layouts.admin')

@section('title', 'News - Xclip Admin')

@section('page-title', 'News')

@section('content')

<div class="admin-page-header">

    <div>

        <p class="section-label">
            MANAJEMEN BERITA
        </p>

        <h2>
            News.
        </h2>

        <p>
            Manage news and articles displayed on the Xclip website.
        </p>

    </div>


    <div class="admin-page-header-action">

        <a
            href="{{ route('admin.news.create') }}"
            class="admin-primary-button">

            <span>+</span>

            Add News

        </a>

    </div>

</div>




{{-- =====================================================
     NEWS LIST
===================================================== --}}

<div class="admin-dashboard-section">

    <div class="admin-section-header">

        <div>

            <p class="section-label">
                NEWS MANAGEMENT
            </p>

            <h2>
                All News
            </h2>

        </div>


        <span class="admin-section-count">

            {{ $news->count() }}

            News

        </span>

    </div>


    @if($news->count() > 0)

    <div class="admin-table-wrapper">

        <table class="admin-table">

            <thead>

                <tr>

                    <th>
                        NEWS
                    </th>

                    <th>
                        CATEGORY
                    </th>

                    <th>
                        AUTHOR
                    </th>

                    <th>
                        DATE
                    </th>

                    <th>
                        VISIBILITY
                    </th>

                    <th>
                        ACTION
                    </th>

                </tr>

            </thead>


            <tbody>

                @foreach($news as $item)

                <tr>

                    {{-- =================================================
                         NEWS
                    ================================================== --}}

                    <td>

                        <div class="admin-project-cell">


                            {{-- THUMBNAIL --}}

                            @if($item->thumbnail)

                            <img
                                src="{{ asset('storage/' . $item->thumbnail) }}"
                                alt="{{ $item->title }}"
                                class="admin-project-thumbnail">

                            @else

                            <div
                                class="admin-project-thumbnail admin-project-thumbnail-empty">

                                <span>
                                    NO IMAGE
                                </span>

                            </div>

                            @endif


                            {{-- NEWS INFO --}}

                            <div class="admin-project-info">

                                <strong>
                                    {{ $item->title }}
                                </strong>


                                @if($item->excerpt)

                                <span>
                                    {{ \Illuminate\Support\Str::limit($item->excerpt, 70) }}
                                </span>

                                @endif

                            </div>

                        </div>

                    </td>


                    {{-- =================================================
                         CATEGORY
                    ================================================== --}}

                    <td>

                        <span class="admin-project-category">

                            @if($item->category === 'company')

                            Company

                            @elseif($item->category === 'project')

                            Project

                            @elseif($item->category === 'business')

                            Business

                            @elseif($item->category === 'industry')

                            Industry

                            @elseif($item->category === 'event')

                            Event

                            @elseif($item->category === 'announcement')

                            Announcement

                            @else

                            {{ ucfirst($item->category) }}

                            @endif

                        </span>

                    </td>


                    {{-- =================================================
                         AUTHOR
                    ================================================== --}}

                    <td>

                        {{ $item->author ?: '—' }}

                    </td>


                    {{-- =================================================
                         DATE
                    ================================================== --}}

                    <td>

                        @if($item->published_at)

                        {{ $item->published_at->format('d M Y') }}

                        @else

                        <span class="admin-muted">
                            Not Published
                        </span>

                        @endif

                    </td>


                    {{-- =================================================
                         VISIBILITY
                    ================================================== --}}

                    <td>

                        <div class="admin-project-visibility">


                            {{-- ACTIVE / HIDDEN --}}

                            @if($item->is_active)

                            <span class="admin-visibility-active">
                                ACTIVE
                            </span>

                            @else

                            <span class="admin-visibility-hidden">
                                HIDDEN
                            </span>

                            @endif


                            {{-- FEATURED --}}

                            @if($item->is_featured)

                            <span class="admin-featured-badge">
                                ★ FEATURED
                            </span>

                            @endif

                        </div>

                    </td>


                    {{-- =================================================
                         ACTION
                    ================================================== --}}

                    <td>

                        <div class="admin-table-actions">


                            {{-- VIEW --}}

                            <a
                                href="{{ route('admin.news.show', $item) }}"
                                class="admin-action-link">

                                View

                            </a>


                            {{-- EDIT --}}

                            <a
                                href="{{ route('admin.news.edit', $item) }}"
                                class="admin-action-link">

                                Edit

                            </a>


                            {{-- DELETE --}}

                            <form
                                method="POST"
                                action="{{ route('admin.news.destroy', $item) }}"
                                class="swal-delete-form">

                                @csrf

                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="admin-action-delete">

                                    Hapus

                                </button>

                            </form>


                        </div>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>


    @else


    {{-- =====================================================
         EMPTY STATE
    ====================================================== --}}

    <div class="admin-empty-state">

        <div class="admin-empty-icon">
            +
        </div>


        <h3>
            No News Yet.
        </h3>


        <p>
            You haven't added any news articles to your website.
        </p>


        <a
            href="{{ route('admin.news.create') }}"
            class="admin-primary-button">

            <span>
                +
            </span>

            Add Your First News

        </a>

    </div>


    @endif

</div>

@endsection