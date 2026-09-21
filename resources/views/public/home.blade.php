@extends('layouts.app')

@section('title', 'Xclip — Business Solutions for Your Project')

@section('meta_description', 'Xclip menyediakan solusi bisnis, dukungan proyek, perdagangan, industrial, dan jasa profesional untuk kebutuhan proyek Anda.')

@section('og_title', 'Xclip — Business Solutions for Your Project')

@section('og_description', 'Solusi bisnis dan dukungan proyek dari Xclip.')

@section('content')

{{-- =========================================================
     HERO
========================================================= --}}
<section class="hero">
    <div class="container">

        <div class="hero-content">

            <span class="hero-label">
                PT. Xclip Subcon Asia
            </span>

            <h1>
                Business Solutions
                for Your Project
            </h1>

            <p>
                Discover our services, projects, and
                professional solutions for your business needs.
            </p>

            <div class="hero-actions">

                <a href="{{ route('services') }}">
                    Explore Services
                </a>

                <a href="{{ route('rfq') }}">
                    Request a Quote
                </a>

            </div>

        </div>

    </div>
</section>


{{-- =========================================================
     ABOUT PREVIEW
========================================================= --}}
<section class="about-preview">
    <div class="container">

        <p>
            ABOUT XCLIP
        </p>

        <h2>
            Building Solutions
            That Matter
        </h2>

        <p>
            Xclip provides various business services
            and solutions to support client projects
            through reliable and professional solutions.
        </p>

        <a href="{{ route('about') }}">
            Learn More
        </a>

    </div>
</section>


{{-- =========================================================
     SERVICES PREVIEW
========================================================= --}}
<section class="services-preview">
    <div class="container">

        <p>
            OUR SERVICES
        </p>

        <h2>
            What We Do
        </h2>

        <div class="service-grid">

            <div class="service-card">

                <span class="service-number">
                    01
                </span>

                <h3>
                    Construction
                </h3>

                <p>
                    Construction and infrastructure
                    related services.
                </p>

            </div>


            <div class="service-card">

                <span class="service-number">
                    02
                </span>

                <h3>
                    Trade
                </h3>

                <p>
                    Trading, distribution, and
                    retail solutions.
                </p>

            </div>


            <div class="service-card">

                <span class="service-number">
                    03
                </span>

                <h3>
                    Industrial
                </h3>

                <p>
                    Industrial and manufacturing
                    solutions.
                </p>

            </div>


            <div class="service-card">

                <span class="service-number">
                    04
                </span>

                <h3>
                    Professional
                </h3>

                <p>
                    Consulting, design, and
                    professional services.
                </p>

            </div>

        </div>

        <a href="{{ route('services') }}">
            View All Services
        </a>

    </div>
</section>


{{-- =========================================================
     FEATURED PROJECTS
========================================================= --}}
<section class="projects-preview">
    <div class="container">

        <p>
            OUR PROJECTS
        </p>

        <h2>
            Featured Projects
        </h2>


        @if($featuredProjects->count())

        <div class="home-project-grid">

            @foreach($featuredProjects as $project)

            <article class="home-project-card">

                <div class="home-project-image">

                    @if($project->thumbnail)

                    <img
                        src="{{ asset('storage/' . $project->thumbnail) }}"
                        alt="{{ $project->title }}">

                    @else

                    <div class="home-project-image-placeholder">

                        <span>
                            NO IMAGE
                        </span>

                    </div>

                    @endif

                </div>


                <div class="home-project-content">

                    @if($project->category)

                    <span class="home-project-category">
                        {{ $project->category }}
                    </span>

                    @endif


                    <h3>
                        {{ $project->title }}
                    </h3>


                    @if($project->description)

                    <p>
                        {{ \Illuminate\Support\Str::limit(
                                        $project->description,
                                        120
                                    ) }}
                    </p>

                    @endif


                    <div class="home-project-meta">

                        @if($project->location)

                        <span>
                            {{ $project->location }}
                        </span>

                        @endif


                        @if($project->year)

                        <span>
                            {{ $project->year }}
                        </span>

                        @endif

                    </div>


                    <a
                        href="{{ route('projects.show', $project->slug) }}"
                        class="home-project-link">
                        View Project
                    </a>

                </div>

            </article>

            @endforeach

        </div>

        @else

        <div class="home-empty-state">

            <span>
                ✦
            </span>

            <h3>
                Projects Coming Soon
            </h3>

            <p>
                Featured projects will appear here
                once they are published.
            </p>

        </div>

        @endif


        <div class="home-section-link">

            <a href="{{ route('projects') }}">
                View All Projects
            </a>

        </div>

    </div>
</section>


{{-- =========================================================
     LATEST NEWS
========================================================= --}}
<section class="home-news-preview">
    <div class="container">

        <p>
            LATEST NEWS
        </p>

        <h2>
            What's New at Xclip
        </h2>


        @if($latestNews->count())

        <div class="home-news-grid">

            @foreach($latestNews as $news)

            <article class="home-news-card">

                <div class="home-news-image">

                    @if($news->thumbnail)

                    <img
                        src="{{ asset('storage/' . $news->thumbnail) }}"
                        alt="{{ $news->title }}">

                    @else

                    <div class="home-news-image-placeholder">

                        <span>
                            NEWS
                        </span>

                    </div>

                    @endif

                </div>


                <div class="home-news-content">

                    <div class="home-news-meta">

                        @if($news->category)

                        <span>
                            {{ $news->category }}
                        </span>

                        @endif


                        @if($news->published_at)

                        <time>
                            {{ $news->published_at->format('d M Y') }}
                        </time>

                        @endif

                    </div>


                    <h3>
                        {{ $news->title }}
                    </h3>


                    @if($news->excerpt)

                    <p>
                        {{ \Illuminate\Support\Str::limit(
                                        $news->excerpt,
                                        130
                                    ) }}
                    </p>

                    @endif


                    <a
                        href="{{ route('news.show', $news->slug) }}"
                        class="home-news-link">
                        Read More
                    </a>

                </div>

            </article>

            @endforeach

        </div>

        @else

        <div class="home-empty-state">

            <span>
                ✎
            </span>

            <h3>
                News Coming Soon
            </h3>

            <p>
                The latest Xclip news and updates
                will appear here.
            </p>

        </div>

        @endif


        <div class="home-section-link">

            <a href="{{ route('news') }}">
                View All News
            </a>

        </div>

    </div>
</section>


{{-- =========================================================
     CTA
========================================================= --}}
<section class="cta">
    <div class="container">

        <h2>
            Have a Project in Mind?
        </h2>

        <p>
            Let's discuss how Xclip can support
            your project.
        </p>

        <a href="{{ route('rfq') }}">
            Request a Quote
        </a>

    </div>
</section>

@endsection