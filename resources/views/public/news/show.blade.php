@extends('layouts.app')

@section('title', $news->title . ' - Xclip')

@section('content')

{{-- =========================================================
     NEWS DETAIL HERO
========================================================= --}}

<section class="news-detail-hero">

    <div class="container">

        <div class="news-detail-header">

            <a
                href="{{ route('news') }}"
                class="news-back-link">
                ← Back to News
            </a>

            <div class="news-detail-meta">

                <span>
                    {{ strtoupper($news->category) }}
                </span>

                <span>
                    {{ $news->published_at->format('d M Y') }}
                </span>

                @if($news->author)
                <span>
                    By {{ $news->author }}
                </span>
                @endif

            </div>

            <h1>
                {{ $news->title }}
            </h1>

            @if($news->excerpt)

            <p class="news-detail-excerpt">
                {{ $news->excerpt }}
            </p>

            @endif

        </div>

    </div>

</section>


{{-- =========================================================
     NEWS CONTENT
========================================================= --}}

<section class="news-detail-content">

    <div class="container">

        <div class="news-detail-layout">

            {{-- IMAGE --}}
            <div class="news-detail-image">

                @if($news->thumbnail)

                <img
                    src="{{ asset('storage/' . $news->thumbnail) }}"
                    alt="{{ $news->title }}">

                @else

                <div class="news-detail-image-empty">
                    <span>NEWS</span>
                </div>

                @endif

            </div>


            {{-- ARTICLE --}}
            <article class="news-detail-article">

                @if($news->content)

                {!! nl2br(e($news->content)) !!}

                @else

                <p>
                    This news article does not have any
                    additional content yet.
                </p>

                @endif

            </article>

        </div>

    </div>

</section>


{{-- =========================================================
     NEWS CTA
========================================================= --}}

<section class="news-cta">

    <div class="container">

        <div class="news-cta-box">

            <p class="section-label">
                STAY CONNECTED
            </p>

            <h2>
                Want to Know More About Xclip?
            </h2>

            <p>
                Explore our services and projects or get
                in touch with our team to discuss your needs.
            </p>

            <div class="news-cta-actions">

                <a
                    href="{{ route('services') }}"
                    class="news-button">
                    Explore Services →
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="news-button-outline">
                    Contact Us
                </a>

            </div>

        </div>

    </div>

</section>

@endsection