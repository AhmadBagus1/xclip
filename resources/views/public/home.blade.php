@extends('layouts.app')


@section('title', 'PT Xclip Subcon Asia — Integrated Business Solutions')


@section(
'meta_description',
'PT Xclip Subcon Asia menyediakan solusi terintegrasi untuk kebutuhan konstruksi, industrial, perdagangan, teknologi, dan jasa profesional.'
)


@section('og_title', 'PT Xclip Subcon Asia — Integrated Business Solutions')


@section(
'og_description',
'Solusi terintegrasi untuk mendukung kebutuhan bisnis, proyek, dan operasional Anda.'
)


@section('content')


{{-- =========================================================
     01. HERO
========================================================= --}}

<section class="home-hero">

    <div class="home-hero-bg"></div>

    <div class="container">

        <div class="home-hero-grid">

            <div class="home-hero-content">

                <span class="home-eyebrow">
                    PT. XCLIP SUBCON ASIA
                </span>

                <h1>
                    One Partner.
                    <span>Multiple Capabilities</span>
                </h1>

                <p class="home-hero-description">
                    PT Xclip Subcon Asia menghubungkan berbagai
                    kapabilitas lintas sektor untuk mendukung
                    kebutuhan bisnis, proyek, dan operasional
                    melalui solusi yang terintegrasi dan fleksibel
                    sesuai kebutuhan klien.
                </p>

                <div class="home-hero-actions">

                    <a
                        href="{{ route('services') }}"
                        class="home-button home-button-primary">

                        Explore Our Services

                    </a>

                    <a
                        href="{{ route('about') }}"
                        class="home-button home-button-secondary">

                        Discover Xclip

                    </a>

                </div>

            </div>


            <div class="home-hero-visual">

                <div class="home-hero-image-frame">

                    <img
                        src="{{ asset('images/doodle-construction.jpg') }}"
                        alt="Gedung PT Xclip Subcon Asia">

                </div>


                <span class="home-doodle home-doodle-star">
                    ✦
                </span>

                <span class="home-doodle home-doodle-circle">
                </span>

                <span class="home-doodle home-doodle-arrow">
                    ↘
                </span>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     02. ONE COMPANY
========================================================= --}}

<section class="home-company">

    <div class="container">

        <div class="home-company-header">

            <div class="home-company-title">

                <span class="home-section-label">
                    ABOUT XCLIP
                </span>

                <h2>
                    One Company.
                    <span>Multiple Capabilities.</span>
                    One Integrated Approach.
                </h2>

            </div>


            <div class="home-company-intro">

                <span class="home-company-intro-label">
                    WHO WE ARE
                </span>

                <p>
                    PT Xclip Subcon Asia merupakan perusahaan
                    multi-layanan yang menghadirkan solusi
                    profesional untuk mendukung kebutuhan bisnis,
                    proyek, dan operasional di berbagai sektor.
                </p>

                <p>
                    Kami menghubungkan berbagai kapabilitas dalam
                    satu pendekatan terintegrasi untuk membantu
                    klien mendapatkan solusi yang relevan,
                    efektif, dan berorientasi pada kebutuhan nyata.
                </p>

            </div>

        </div>


        {{-- COMPANY INFORMATION --}}

        <div class="home-company-facts">

            <div class="home-company-fact">

                <span class="home-company-fact-label">
                    ESTABLISHED
                </span>

                <strong>
                    2023
                </strong>

                <p>
                    Officially established
                    as a business entity.
                </p>

            </div>


            <div class="home-company-fact">

                <span class="home-company-fact-label">
                    LOCATION
                </span>

                <strong>
                    Kebumen
                </strong>

                <p>
                    Central Java,
                    Indonesia.
                </p>

            </div>


            <div class="home-company-fact">

                <span class="home-company-fact-label">
                    BUSINESS
                </span>

                <strong>
                    Multi-Sector
                </strong>

                <p>
                    Solutions across
                    different business needs.
                </p>

            </div>


            <div class="home-company-fact">

                <span class="home-company-fact-label">
                    APPROACH
                </span>

                <strong>
                    Integrated
                </strong>

                <p>
                    Connecting capabilities
                    into one solution.
                </p>

            </div>

        </div>


        {{-- COMPANY CAPABILITIES --}}

        <div class="home-company-footer">

            <div class="home-company-capabilities">

                <span class="home-company-capabilities-label">
                    OUR CAPABILITIES
                </span>

                <div class="home-company-tags">

                    <span>
                        Construction
                    </span>

                    <span>
                        Industrial
                    </span>

                    <span>
                        Trade
                    </span>

                    <span>
                        Technology
                    </span>

                    <span>
                        Professional Services
                    </span>

                </div>

            </div>


            <a
                href="{{ route('about') }}"
                class="home-text-link">

                Explore Xclip

            </a>

        </div>

    </div>

</section>


{{-- =========================================================
     03. PROJECTS
========================================================= --}}

<section class="home-projects">

    <div class="container">

        <div class="home-section-title text-center">

            <span class="home-section-title-sub">
                Our Projects
            </span>

            <h2 class="home-section-title-main">
                Here you find our latest projects
            </h2>

        </div>

    </div>


    @if($featuredProjects->count())

    <div class="home-project-wrapper">

        @foreach($featuredProjects as $project)

        <div class="home-project-item">

            <a
                href="{{ route('projects.show', $project->slug) }}"
                class="home-project-link">

                @if($project->thumbnail)

                <img
                    src="{{ asset('storage/' . $project->thumbnail) }}"
                    alt="{{ $project->title }}"
                    class="home-project-image"
                    loading="lazy">

                @else

                <div class="home-project-placeholder">

                    <span>
                        PROJECT
                    </span>

                </div>

                @endif


                <span class="home-project-title">

                    {{ $project->title }}

                    @if($project->category)

                    <small>
                        {{ $project->category }}
                    </small>

                    @endif

                </span>

            </a>

        </div>

        @endforeach

    </div>

    @else

    <div class="container">

        <div class="home-empty-state">

            <span>✦</span>

            <h3>
                Projects Coming Soon
            </h3>

            <p>
                Featured projects will appear here
                once they are published.
            </p>

        </div>

    </div>

    @endif


    <div class="container">

        <div class="home-project-footer">

            <a
                href="{{ route('projects') }}"
                class="home-text-link">

                View All Projects

            </a>

        </div>

    </div>

</section>


{{-- =========================================================
     04. OUR PROJECTS / CLIENT LOGOS
========================================================= --}}

<section class="home-clients">

    <div class="container">


        {{-- SECTION HEADER --}}
        <div class="home-clients-header">
            <span class="home-clients-eyebrow">
                Klien Kami
            </span>

            <h2 class="home-clients-heading">
                Telah Dipercaya Oleh:
            </h2>
        </div>



        {{-- LOGO SLIDER --}}
        @php
        $clientLogos = [
        'logo-1.png',
        'logo-2.png',
        'logo-3.png',
        'logo-4.png',
        'logo-5.png',
        'logo-6.png',
        'logo-7.png',
        'logo-8.png',
        'logo-9.png',
        'logo-10.png',
        ];
        @endphp

        <div
            class="home-clients-slider"
            aria-label="Logo klien dan mitra Xclip">

            <div class="home-clients-track">

                {{-- SET LOGO PERTAMA --}}
                <div class="home-clients-group">

                    @foreach($clientLogos as $index => $logo)

                    <div class="home-client-card">
                        <img
                            src="{{ asset('images/clients/' . $logo) }}"
                            alt="Logo {{ $index + 1 }}"
                            loading="lazy"
                            decoding="async">
                    </div>

                    @endforeach

                </div>


                {{-- SET DUPLIKAT UNTUK ANIMASI TANPA PUTUS --}}
                <div class="home-clients-group" aria-hidden="true">

                    @foreach($clientLogos as $logo)

                    <div class="home-client-card">
                        <img
                            src="{{ asset('images/clients/' . $logo) }}"
                            alt=""
                            loading="lazy"
                            decoding="async">
                    </div>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     05. HOW WE WORK
========================================================= --}}

<section class="home-how">

    <div class="container">

        <div class="home-how-header">

            <div class="home-how-title">

                <span class="home-section-label">
                    HOW WE WORK
                </span>

                <h2>
                    From Need
                    <span>to Solution.</span>
                </h2>

            </div>


            <div class="home-how-intro">

                <span class="home-how-note">
                    OUR PROCESS
                </span>

                <p>
                    Setiap proyek dimulai dari kebutuhan yang berbeda.
                    Xclip mengembangkan proses kerja yang terstruktur
                    untuk memahami kebutuhan, menentukan pendekatan,
                    menjalankan pekerjaan, dan memastikan solusi dapat
                    memberikan hasil yang relevan.
                </p>

            </div>

        </div>


        <div class="home-how-process">


            {{-- STEP 01 --}}

            <article class="home-how-step">

                <div class="home-how-step-top">

                    <span class="home-how-number">
                        01
                    </span>

                </div>

                <div class="home-how-step-content">

                    <span class="home-how-label">
                        UNDERSTAND
                    </span>

                    <h3>
                        Understand the Need
                    </h3>

                    <p>
                        Kami memulai dengan memahami kebutuhan,
                        tujuan, kondisi, dan tantangan yang dihadapi
                        klien sebelum menentukan solusi.
                    </p>

                </div>

            </article>


            {{-- STEP 02 --}}

            <article class="home-how-step">

                <div class="home-how-step-top">

                    <span class="home-how-number">
                        02
                    </span>

                </div>

                <div class="home-how-step-content">

                    <span class="home-how-label">
                        PLAN
                    </span>

                    <h3>
                        Plan the Approach
                    </h3>

                    <p>
                        Kebutuhan yang telah dipahami diterjemahkan
                        menjadi pendekatan, ruang lingkup pekerjaan,
                        dan langkah yang sesuai dengan kebutuhan proyek.
                    </p>

                </div>

            </article>


            {{-- STEP 03 --}}

            <article class="home-how-step">

                <div class="home-how-step-top">

                    <span class="home-how-number">
                        03
                    </span>

                </div>

                <div class="home-how-step-content">

                    <span class="home-how-label">
                        EXECUTE
                    </span>

                    <h3>
                        Execute the Solution
                    </h3>

                    <p>
                        Tim menjalankan pekerjaan dengan koordinasi
                        yang jelas, komunikasi yang terarah, dan
                        perhatian terhadap kebutuhan teknis maupun
                        operasional proyek.
                    </p>

                </div>

            </article>


            {{-- STEP 04 --}}

            <article class="home-how-step">

                <div class="home-how-step-top">

                    <span class="home-how-number">
                        04
                    </span>

                </div>

                <div class="home-how-step-content">

                    <span class="home-how-label">
                        DELIVER
                    </span>

                    <h3>
                        Deliver the Result
                    </h3>

                    <p>
                        Pekerjaan diarahkan pada hasil yang jelas,
                        relevan, dan sesuai dengan tujuan yang telah
                        disepakati bersama.
                    </p>

                </div>

            </article>

        </div>


        <div class="home-how-bottom">

            <div class="home-how-doodle-line"></div>

            <div class="home-how-bottom-content">

                <div>

                    <span class="home-how-bottom-label">
                        ONE CONNECTED PROCESS
                    </span>

                    <p>

                        <strong>Understand.</strong>

                        <strong>Plan.</strong>

                        <strong>Execute.</strong>

                        <strong>Deliver.</strong>

                    </p>

                </div>


                <a
                    href="{{ route('contact') }}"
                    class="home-text-link">

                    Start a Conversation

                </a>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     06. LATEST NEWS
========================================================= --}}

<section class="home-news">

    <div class="container">

        <div class="home-section-title text-center">

            <span class="home-section-title-sub">
                Latest News
            </span>

            <h2 class="home-section-title-main">
                News and updates about
                our latest activities
            </h2>

        </div>


        @if($latestNews->count())

        <div class="home-news-grid">

            @foreach($latestNews as $news)

            <article class="home-news-item">

                <div class="home-news-image">

                    <a
                        href="{{ route('news.show', $news->slug) }}">

                        @if($news->thumbnail)

                        <img
                            src="{{ asset('storage/' . $news->thumbnail) }}"
                            alt="{{ $news->title }}"
                            loading="lazy">

                        @else

                        <div class="home-news-placeholder">
                            XCLIP NEWS
                        </div>

                        @endif

                    </a>

                </div>


                <div class="home-news-content">

                    <h3 class="home-news-title">

                        <a
                            href="{{ route('news.show', $news->slug) }}">

                            {{ $news->title }}

                        </a>

                    </h3>


                    @if($news->excerpt)

                    <p class="home-news-text">

                        {{ \Illuminate\Support\Str::limit(
                                        $news->excerpt,
                                        150
                                    ) }}

                    </p>

                    @endif


                    <div class="home-news-meta">

                        @if($news->category)

                        <span>
                            {{ $news->category }}
                        </span>

                        @endif


                        @if($news->published_at)

                        <time
                            datetime="{{ $news->published_at->toDateString() }}">

                            {{ $news->published_at->format('d M Y') }}

                        </time>

                        @endif

                    </div>

                </div>

            </article>

            @endforeach

        </div>

        @else

        <div class="home-empty-state">

            <span>✎</span>

            <h3>
                News Coming Soon
            </h3>

            <p>
                The latest Xclip news and updates
                will appear here.
            </p>

        </div>

        @endif


        <div class="home-news-footer">

            <a
                href="{{ route('news') }}"
                class="home-text-link">

                View All News

            </a>

        </div>

    </div>

</section>


{{-- =========================================================
     07. CTA
========================================================= --}}

<section class="home-cta">

    <div class="container">

        <div class="home-cta-content">

            <span class="home-section-label">
                LET'S WORK TOGETHER
            </span>

            <h2>
                Have a Project
                <span>in Mind?</span>
            </h2>

            <p>
                Tell us about your needs and let's explore
                how Xclip can support your project.
            </p>

            <a
                href="{{ route('rfq') }}"
                class="home-button home-button-light">

                Request a Quote

            </a>

        </div>


        <div class="home-cta-doodle">

            <span>✦</span>

            <span>〰</span>

            <span>↗</span>

        </div>

    </div>

</section>


@endsection