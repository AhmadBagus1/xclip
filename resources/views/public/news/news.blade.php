@extends('layouts.app')

@section('title', 'News & Updates — Xclip')

@section(
'meta_description',
'Dapatkan berita dan informasi terbaru dari Xclip mengenai proyek, layanan, aktivitas perusahaan, dan berbagai perkembangan bisnis.'
)

@section('og_title', 'News & Updates — Xclip')

@section(
'og_description',
'Ikuti berita, aktivitas, proyek, dan perkembangan terbaru dari Xclip.'
)

@section('content')


{{-- =========================================================
     NEWS HERO
========================================================= --}}

<section class="news-hero">

    <div class="container">

        <div class="news-hero-inner">

            {{-- HERO CONTENT --}}

            <div class="news-hero-content">

                <p class="section-label">
                    NEWS & UPDATES
                </p>

                <h1>
                    Berita,
                    <span>Aktivitas & Perkembangan.</span>
                </h1>

                <p class="news-hero-description">
                    Ikuti berbagai berita, aktivitas, proyek,
                    dan perkembangan terbaru Xclip dari
                    berbagai bidang usaha dan layanan.
                </p>

            </div>


            {{-- HERO NOTE --}}

            <div class="news-hero-note">

                <span class="news-note-mark">
                    ✦
                </span>

                <strong>
                    Tetap Terhubung.
                </strong>

                <strong>
                    Ikuti Perkembangan Xclip.
                </strong>

                <p>
                    Informasi terbaru mengenai aktivitas,
                    proyek, dan perkembangan perusahaan.
                </p>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     FEATURED NEWS
========================================================= --}}

<section class="featured-news">

    <div class="container">

        <p class="section-label">
            BERITA PILIHAN
        </p>


        {{-- =================================================
             1 FEATURED NEWS
             Editorial layout besar
        ================================================== --}}

        @if($featuredNews->count() === 1)

        @php
        $featured = $featuredNews->first();
        @endphp


        <article class="featured-news-card">


            {{-- IMAGE --}}

            <div class="featured-news-image">

                @if($featured->thumbnail)

                <img
                    src="{{ asset('storage/' . $featured->thumbnail) }}"
                    alt="{{ $featured->title }} — Xclip"
                    loading="lazy">

                @else

                <span>
                    FEATURED NEWS
                </span>

                @endif

            </div>


            {{-- CONTENT --}}

            <div class="featured-news-content">

                {{-- META --}}

                <div class="news-meta">

                    <span>
                        {{ strtoupper($featured->category) }}
                    </span>

                    <span>
                        {{ $featured->published_at->format('d M Y') }}
                    </span>

                </div>


                {{-- TITLE --}}

                <h2>
                    {{ $featured->title }}
                </h2>


                {{-- EXCERPT --}}

                @if($featured->excerpt)

                <p>
                    {{ $featured->excerpt }}
                </p>

                @endif


                {{-- LINK --}}

                <a
                    href="{{ route('news.show', $featured->slug) }}"
                    class="news-read-more">

                    Baca Berita

                </a>

            </div>

        </article>



        {{-- =================================================
             2+ FEATURED NEWS
             Equal editorial cards
        ================================================== --}}

        @elseif($featuredNews->count() > 1)

        <div class="featured-news-grid">

            @foreach($featuredNews as $index => $item)

            <article class="featured-news-grid-card">


                {{-- IMAGE --}}

                <div class="featured-news-grid-image">

                    @if($item->thumbnail)

                    <img
                        src="{{ asset('storage/' . $item->thumbnail) }}"
                        alt="{{ $item->title }} — Xclip"
                        loading="lazy">

                    @else

                    <span>
                        NEWS
                    </span>

                    @endif

                </div>


                {{-- CONTENT --}}

                <div class="featured-news-grid-content">


                    {{-- NUMBER --}}

                    <div class="featured-news-grid-number">

                        BERITA
                        {{ str_pad(
                                    $index + 1,
                                    2,
                                    '0',
                                    STR_PAD_LEFT
                                ) }}

                    </div>


                    {{-- META --}}

                    <div class="news-meta">

                        <span>
                            {{ strtoupper($item->category) }}
                        </span>

                        <span>
                            {{ $item->published_at->format('d M Y') }}
                        </span>

                    </div>


                    {{-- TITLE --}}

                    <h3>
                        {{ $item->title }}
                    </h3>


                    {{-- EXCERPT --}}

                    @if($item->excerpt)

                    <p>
                        {{ \Illuminate\Support\Str::limit(
                                        $item->excerpt,
                                        120
                                    ) }}
                    </p>

                    @endif


                    {{-- LINK --}}

                    <a
                        href="{{ route('news.show', $item->slug) }}"
                        class="news-read-more">

                        Baca Berita

                    </a>

                </div>

            </article>

            @endforeach

        </div>



        {{-- =================================================
             0 FEATURED NEWS
             Fallback
        ================================================== --}}

        @else

        <div class="featured-news-card">


            {{-- EMPTY IMAGE --}}

            <div class="featured-news-image">

                <span>
                    FEATURED NEWS
                </span>

            </div>


            {{-- FALLBACK CONTENT --}}

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



{{-- =========================================================
     LATEST NEWS
========================================================= --}}

<section class="latest-news">

    <div class="container">


        {{-- =================================================
             SECTION HEADING
        ================================================== --}}

        <div class="news-heading">

            <div>

                <p class="section-label">
                    UPDATE TERBARU
                </p>

                <h2>
                    Berita Terkini
                </h2>

            </div>


            <p>
                Temukan berita, aktivitas, proyek, dan
                perkembangan terbaru dari Xclip.
            </p>

        </div>



        {{-- =================================================
             NEWS GRID
        ================================================== --}}

        @if($latestNews->count() > 0)

        <div class="news-grid">

            @foreach($latestNews as $item)

            <article class="news-card">


                {{-- IMAGE --}}

                <div class="news-card-image">

                    @if($item->thumbnail)

                    <img
                        src="{{ asset('storage/' . $item->thumbnail) }}"
                        alt="{{ $item->title }} — Xclip"
                        loading="lazy">

                    @else

                    <span>
                        NEWS
                    </span>

                    @endif

                </div>


                {{-- CONTENT --}}

                <div class="news-card-content">


                    {{-- META --}}

                    <div class="news-meta">

                        <span>
                            {{ strtoupper($item->category) }}
                        </span>

                        <span>
                            {{ $item->published_at->format('d M Y') }}
                        </span>

                    </div>


                    {{-- TITLE --}}

                    <h3>
                        {{ $item->title }}
                    </h3>


                    {{-- EXCERPT --}}

                    @if($item->excerpt)

                    <p>
                        {{ \Illuminate\Support\Str::limit(
                                        $item->excerpt,
                                        150
                                    ) }}
                    </p>

                    @endif


                    {{-- LINK --}}

                    <a
                        href="{{ route('news.show', $item->slug) }}"
                        class="news-read-more">

                        Baca Berita

                    </a>

                </div>

            </article>

            @endforeach

        </div>


        @else

        {{-- =================================================
                 EMPTY STATE
            ================================================== --}}

        <div class="news-empty">

            <p class="section-label">
                BELUM ADA UPDATE
            </p>

            <h3>
                Berita Segera Hadir.
            </h3>

            <p>
                Belum ada berita yang dipublikasikan saat ini.
                Silakan kembali lagi untuk melihat informasi
                terbaru dari Xclip.
            </p>

        </div>

        @endif

    </div>

</section>


@endsection