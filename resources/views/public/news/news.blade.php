@extends('layouts.app')

@section('title', 'News - Xclip')

@section('content')

{{-- =========================
     NEWS HERO
========================= --}}

<section class="news-hero">

    <div class="container">

        <div class="news-hero-box">

            <p class="section-label">
                NEWS & UPDATES
            </p>

            <h1>
                Stories,
                <span>Updates & Ideas.</span>
            </h1>

            <p class="news-hero-description">
                Stay informed about Xclip, our projects,
                services, activities, and the latest updates.
            </p>

        </div>

    </div>

</section>


{{-- =========================
     FEATURED NEWS
========================= --}}

<section class="featured-news">

    <div class="container">

        <p class="section-label">
            FEATURED
        </p>


        @if($featured)

        <div class="featured-news-card">

            {{-- FEATURED IMAGE --}}

            <div class="featured-news-image">

                @if($featured->thumbnail)

                <img
                    src="{{ asset('storage/' . $featured->thumbnail) }}"
                    alt="{{ $featured->title }}">

                @else

                <span>
                    FEATURED NEWS
                </span>

                @endif

            </div>


            {{-- FEATURED CONTENT --}}

            <div class="featured-news-content">

                <div class="news-meta">

                    <span>
                        {{ strtoupper($featured->category) }}
                    </span>

                    <span>
                        {{ $featured->published_at->format('d M Y') }}
                    </span>

                </div>


                <h2>
                    {{ $featured->title }}
                </h2>


                @if($featured->excerpt)

                <p>
                    {{ $featured->excerpt }}
                </p>

                @endif


                <a
                    href="{{ route('news.show', $featured->slug) }}"
                    class="news-read-more">
                    Read More →
                </a>

            </div>

        </div>

        @else

        {{-- DEFAULT FEATURED CONTENT --}}

        <div class="featured-news-card">

            <div class="featured-news-image">

                <span>
                    FEATURED NEWS
                </span>

            </div>


            <div class="featured-news-content">

                <div class="news-meta">

                    <span>
                        XCLIP
                    </span>

                    <span>
                        NEWS
                    </span>

                </div>


                <h2>
                    Building Better Solutions
                    for Our Clients
                </h2>


                <p>
                    Discover how Xclip continues to develop
                    business solutions and services to support
                    client projects and business needs.
                </p>

            </div>

        </div>

        @endif

    </div>

</section>


{{-- =========================
     LATEST NEWS
========================= --}}

<section class="latest-news">

    <div class="container">

        <div class="news-heading">

            <div>

                <p class="section-label">
                    LATEST UPDATES
                </p>

                <h2>
                    What's New
                </h2>

            </div>

            <p>
                Explore the latest stories, activities,
                and updates from Xclip.
            </p>

        </div>


        {{-- NEWS GRID --}}

        @if($news->count() > 0)

        <div class="news-grid">

            @foreach($news as $item)

            <article class="news-card">

                {{-- NEWS IMAGE --}}

                <div class="news-card-image">

                    @if($item->thumbnail)

                    <img
                        src="{{ asset('storage/' . $item->thumbnail) }}"
                        alt="{{ $item->title }}">

                    @else

                    <span>
                        NEWS
                    </span>

                    @endif

                </div>


                {{-- NEWS CONTENT --}}

                <div class="news-card-content">

                    <div class="news-meta">

                        <span>
                            {{ strtoupper($item->category) }}
                        </span>

                        <span>
                            {{ $item->published_at->format('d M Y') }}
                        </span>

                    </div>


                    <h3>
                        {{ $item->title }}
                    </h3>


                    @if($item->excerpt)

                    <p>
                        {{ \Illuminate\Support\Str::limit($item->excerpt, 150) }}
                    </p>

                    @endif


                    <a
                        href="{{ route('news.show', $item->slug) }}"
                        class="news-read-more">
                        Read More →
                    </a>

                </div>

            </article>

            @endforeach

        </div>

        @else

        <div class="news-empty">

            <p class="section-label">
                NO UPDATES
            </p>

            <h3>
                No News Available Yet.
            </h3>

            <p>
                There are currently no published news
                articles. Please check back soon for
                the latest updates from Xclip.
            </p>

        </div>

        @endif

    </div>

</section>


{{-- =========================
     NEWS CTA
========================= --}}

<section class="news-cta">

    <div class="container">

        <div class="news-cta-box">

            <p class="section-label">
                STAY CONNECTED
            </p>

            <h2>
                Want to Know
                More About Xclip?
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