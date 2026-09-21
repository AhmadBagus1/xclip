@extends('layouts.app')

@section('title', 'Projects — Xclip')

@section('meta_description', 'Lihat portofolio proyek Xclip di berbagai sektor, mulai dari konstruksi dan infrastruktur hingga perdagangan, industrial, dan layanan profesional.')

@section('og_title', 'Projects — Xclip')

@section('og_description', 'Jelajahi proyek dan solusi yang dikerjakan Xclip di berbagai sektor bisnis dan kebutuhan profesional.')

@section('content')

{{-- =========================
     PROJECT HERO
========================= --}}

<section class="projects-hero">

    <div class="container">

        <div class="doodle-box projects-hero-box">

            <p class="section-label">
                OUR PROJECTS
            </p>

            <h1>
                Projects That
                <span>Make an Impact.</span>
            </h1>

            <p class="projects-hero-description">
                Explore selected projects and solutions delivered
                by Xclip across different business sectors.
            </p>

        </div>

    </div>

</section>


{{-- =========================
     PROJECT INTRO
========================= --}}

<section class="projects-intro">

    <div class="container">

        <div class="projects-intro-grid">

            <div>

                <p class="section-label">
                    OUR WORK
                </p>

                <h2>
                    Turning Ideas
                    Into Real Solutions
                </h2>

            </div>


            <div>

                <p>
                    Xclip supports clients through a variety of
                    projects and professional solutions. From
                    construction and infrastructure to trade,
                    industrial, and professional services.
                </p>

                <p>
                    Each project is approached with a focus on
                    quality, reliability, and solutions that meet
                    the needs of our clients.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================
     FEATURED PROJECTS
========================= --}}

<section class="projects-list">

    <div class="container">

        <div class="projects-heading">

            <div>

                <p class="section-label">
                    FEATURED PROJECTS
                </p>

                <h2>
                    Our Selected Work
                </h2>

            </div>

        </div>


        {{-- PROJECT GRID --}}

        @if($featuredProjects->count() > 0)

        <div class="projects-grid">

            @foreach($featuredProjects as $index => $project)

            <article class="project-card doodle-card">


                {{-- PROJECT IMAGE --}}

                <div class="project-image">

                    @if($project->thumbnail)

                    <img
                        src="{{ asset('storage/' . $project->thumbnail) }}"
                        alt="{{ $project->title }}">

                    @else

                    <div class="project-image-placeholder">

                        <span>
                            PROJECT {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </span>

                    </div>

                    @endif

                </div>


                {{-- PROJECT CONTENT --}}

                <div class="project-content">

                    <p class="project-category">
                        {{ strtoupper($project->category) }}
                    </p>


                    <h3>
                        {{ $project->title }}
                    </h3>


                    @if($project->description)

                    <p>
                        {{ $project->description }}
                    </p>

                    @else

                    <p>
                        Xclip delivers reliable solutions tailored
                        to meet project requirements and client needs.
                    </p>

                    @endif


                    <div class="project-meta">

                        <span>
                            {{ ucfirst($project->category) }}
                        </span>


                        @if($project->location)

                        <span>
                            {{ $project->location }}
                        </span>

                        @elseif($project->year)

                        <span>
                            {{ $project->year }}
                        </span>

                        @else

                        <span>
                            Xclip Project
                        </span>

                        @endif

                    </div>

                </div>

            </article>

            @endforeach

        </div>

        @else

        {{-- NO FEATURED PROJECTS --}}

        <div class="projects-empty">

            <div class="projects-empty-icon">
                +
            </div>

            <h3>
                Projects Coming Soon.
            </h3>

            <p>
                Our selected projects will be displayed here.
            </p>

        </div>

        @endif

    </div>

</section>


{{-- =========================
     ALL PROJECTS
========================= --}}

@if($projects->count() > 0)

<section class="projects-all">

    <div class="container">

        <div class="projects-heading">

            <div>

                <p class="section-label">
                    OUR PORTFOLIO
                </p>

                <h2>
                    More Projects
                </h2>

            </div>

        </div>


        <div class="projects-grid">

            @foreach($projects as $index => $project)

            <article class="project-card doodle-card">


                {{-- PROJECT IMAGE --}}

                <div class="project-image">

                    @if($project->thumbnail)

                    <img
                        src="{{ asset('storage/' . $project->thumbnail) }}"
                        alt="{{ $project->title }}">

                    @else

                    <div class="project-image-placeholder">

                        <span>
                            PROJECT {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </span>

                    </div>

                    @endif

                </div>


                {{-- PROJECT CONTENT --}}

                <div class="project-content">

                    <p class="project-category">
                        {{ strtoupper($project->category) }}
                    </p>


                    <h3>
                        {{ $project->title }}
                    </h3>


                    @if($project->description)

                    <p>
                        {{ $project->description }}
                    </p>

                    @else

                    <p>
                        Xclip delivers reliable solutions tailored
                        to meet project requirements and client needs.
                    </p>

                    @endif


                    <div class="project-meta">

                        <span>
                            {{ ucfirst($project->category) }}
                        </span>


                        @if($project->location)

                        <span>
                            {{ $project->location }}
                        </span>

                        @elseif($project->year)

                        <span>
                            {{ $project->year }}
                        </span>

                        @else

                        <span>
                            Xclip Project
                        </span>

                        @endif

                    </div>

                </div>

                <a
                    href="{{ route('projects.show', $project->slug) }}"
                    class="project-view-link">
                    View Project
                </a>

            </article>

            @endforeach

        </div>

    </div>

</section>

@endif


{{-- =========================
     PROJECT PROCESS
========================= --}}

<section class="project-process">

    <div class="container">

        <div class="process-header">

            <p class="section-label">
                HOW WE WORK
            </p>

            <h2>
                From Concept
                to Completion.
            </h2>

        </div>


        <div class="process-grid">

            <div class="process-card">

                <span class="process-number">
                    01
                </span>

                <h3>
                    Understand
                </h3>

                <p>
                    We understand the project requirements,
                    goals, and challenges faced by our clients.
                </p>

            </div>


            <div class="process-card">

                <span class="process-number">
                    02
                </span>

                <h3>
                    Plan
                </h3>

                <p>
                    We develop an appropriate approach and
                    solution based on the project requirements.
                </p>

            </div>


            <div class="process-card">

                <span class="process-number">
                    03
                </span>

                <h3>
                    Deliver
                </h3>

                <p>
                    We work toward delivering reliable solutions
                    that support the client's objectives.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================
     CTA
========================= --}}

<section class="projects-cta">

    <div class="container">

        <div class="projects-cta-box">

            <p class="section-label">
                HAVE A PROJECT IN MIND?
            </p>

            <h2>
                Let's Build
                Something Together.
            </h2>

            <p>
                Tell us about your project and discover how
                Xclip can support your needs.
            </p>

            <a
                href="{{ route('rfq') }}"
                class="doodle-button">
                Request a Quote
            </a>

        </div>

    </div>

</section>

@endsection