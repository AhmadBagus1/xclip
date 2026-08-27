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

        <div class="featured-news-card">

            <div class="featured-news-image">
                <span>
                    FEATURED NEWS
                </span>
            </div>

            <div class="featured-news-content">

                <div class="news-meta">

                    <span>
                        COMPANY
                    </span>

                    <span>
                        27 AUG 2026
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

                <a href="#" class="news-read-more">
                    Read More →
                </a>

            </div>

        </div>

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

        <div class="news-grid">


            {{-- NEWS 1 --}}

            <article class="news-card">

                <div class="news-card-image news-image-1">

                    <span>
                        NEWS 01
                    </span>

                </div>

                <div class="news-card-content">

                    <div class="news-meta">

                        <span>
                            COMPANY
                        </span>

                        <span>
                            20 AUG 2026
                        </span>

                    </div>

                    <h3>
                        Xclip and Our Commitment
                        to Better Solutions
                    </h3>

                    <p>
                        Learn more about Xclip's commitment
                        to delivering professional solutions
                        for our clients.
                    </p>

                    <a href="#" class="news-read-more">
                        Read More →
                    </a>

                </div>

            </article>


            {{-- NEWS 2 --}}

            <article class="news-card">

                <div class="news-card-image news-image-2">

                    <span>
                        NEWS 02
                    </span>

                </div>

                <div class="news-card-content">

                    <div class="news-meta">

                        <span>
                            PROJECT
                        </span>

                        <span>
                            15 AUG 2026
                        </span>

                    </div>

                    <h3>
                        Supporting Projects
                        Through Professional Services
                    </h3>

                    <p>
                        Our professional services are designed
                        to help clients move their projects
                        forward.
                    </p>

                    <a href="#" class="news-read-more">
                        Read More →
                    </a>

                </div>

            </article>


            {{-- NEWS 3 --}}

            <article class="news-card">

                <div class="news-card-image news-image-3">

                    <span>
                        NEWS 03
                    </span>

                </div>

                <div class="news-card-content">

                    <div class="news-meta">

                        <span>
                            INDUSTRIAL
                        </span>

                        <span>
                            10 AUG 2026
                        </span>

                    </div>

                    <h3>
                        Exploring New Opportunities
                        in Industrial Solutions
                    </h3>

                    <p>
                        Xclip continues to explore opportunities
                        across industrial and manufacturing sectors.
                    </p>

                    <a href="#" class="news-read-more">
                        Read More →
                    </a>

                </div>

            </article>


            {{-- NEWS 4 --}}

            <article class="news-card">

                <div class="news-card-image news-image-4">

                    <span>
                        NEWS 04
                    </span>

                </div>

                <div class="news-card-content">

                    <div class="news-meta">

                        <span>
                            TRADE
                        </span>

                        <span>
                            05 AUG 2026
                        </span>

                    </div>

                    <h3>
                        Expanding Business
                        and Trade Solutions
                    </h3>

                    <p>
                        Discover how Xclip supports business
                        activities through trading and distribution.
                    </p>

                    <a href="#" class="news-read-more">
                        Read More →
                    </a>

                </div>

            </article>


        </div>

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

                <a href="/services" class="news-button">
                    Explore Services →
                </a>

                <a href="/contact" class="news-button-outline">
                    Contact Us
                </a>

            </div>

        </div>

    </div>

</section>

@endsection