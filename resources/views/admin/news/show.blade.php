@extends('layouts.admin')

@section('title', $news->title . ' - Xclip Admin')

@section('page-title', 'News Detail')

@section('content')

<div class="admin-page-header">

    <div>

        <p class="section-label">
            CONTENT MANAGEMENT
        </p>

        <h2>
            News Detail.
        </h2>

        <p>
            View the complete information of this news article.
        </p>

    </div>


    <div class="admin-page-header-action">

        <a
            href="{{ route('admin.news.edit', $news) }}"
            class="admin-primary-button">
            <span>✎</span>
            Edit News
        </a>

    </div>

</div>


{{-- NEWS DETAIL --}}

<div class="admin-news-detail">


    {{-- THUMBNAIL --}}

    <div class="admin-news-detail-image">

        @if($news->thumbnail)

        <img
            src="{{ asset('storage/' . $news->thumbnail) }}"
            alt="{{ $news->title }}">

        @else

        <div class="admin-news-detail-image-empty">

            <span>
                NO IMAGE
            </span>

        </div>

        @endif

    </div>


    {{-- INFORMATION --}}

    <div class="admin-news-detail-content">


        {{-- CATEGORY --}}

        <div class="admin-news-detail-category">

            <span class="admin-project-category">

                @if($news->category === 'company')
                Company

                @elseif($news->category === 'project')
                Project

                @elseif($news->category === 'business')
                Business

                @elseif($news->category === 'industry')
                Industry

                @elseif($news->category === 'event')
                Event

                @elseif($news->category === 'announcement')
                Announcement

                @else
                {{ ucfirst($news->category) }}
                @endif

            </span>


            @if($news->is_featured)

            <span class="admin-featured-badge">
                ★ FEATURED
            </span>

            @endif


            @if($news->is_active)

            <span class="admin-visibility-active">
                ACTIVE
            </span>

            @else

            <span class="admin-visibility-hidden">
                HIDDEN
            </span>

            @endif

        </div>


        {{-- TITLE --}}

        <h2 class="admin-news-detail-title">
            {{ $news->title }}
        </h2>


        {{-- META --}}

        <div class="admin-news-detail-meta">


            @if($news->author)

            <div>

                <span>
                    AUTHOR
                </span>

                <strong>
                    {{ $news->author }}
                </strong>

            </div>

            @endif


            @if($news->published_at)

            <div>

                <span>
                    PUBLISHED
                </span>

                <strong>
                    {{ $news->published_at->format('d M Y, H:i') }}
                </strong>

            </div>

            @else

            <div>

                <span>
                    STATUS
                </span>

                <strong>
                    Not Published
                </strong>

            </div>

            @endif


            <div>

                <span>
                    CREATED
                </span>

                <strong>
                    {{ $news->created_at->format('d M Y, H:i') }}
                </strong>

            </div>


        </div>


        {{-- EXCERPT --}}

        @if($news->excerpt)

        <div class="admin-news-detail-excerpt">

            <p class="section-label">
                EXCERPT
            </p>

            <p>
                {{ $news->excerpt }}
            </p>

        </div>

        @endif


        {{-- CONTENT --}}

        @if($news->content)

        <div class="admin-news-detail-body">

            <p class="section-label">
                CONTENT
            </p>

            <div class="admin-news-content-text">
                {!! nl2br(e($news->content)) !!}
            </div>

        </div>

        @endif





    </div>

</div>


{{-- ACTIONS --}}

<div class="admin-news-detail-actions">


    <a
        href="{{ route('admin.news.index') }}"
        class="admin-secondary-button">
        ← Back to News
    </a>



    </form>


</div>

@endsection