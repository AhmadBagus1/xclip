@extends('layouts.app')

@section('title', 'Projects - Xclip')

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
     PROJECT FILTER
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

        <div class="projects-grid">


            {{-- PROJECT 1 --}}

            <article class="project-card doodle-card">

                <div class="project-image project-image-1">
                    <span>
                        PROJECT 01
                    </span>
                </div>

                <div class="project-content">

                    <p class="project-category">
                        CONSTRUCTION
                    </p>

                    <h3>
                        Construction & Infrastructure
                    </h3>

                    <p>
                        Construction and infrastructure solutions
                        designed to support client development
                        and project requirements.
                    </p>

                    <div class="project-meta">

                        <span>
                            Construction
                        </span>

                        <span>
                            Project
                        </span>

                    </div>

                </div>

            </article>


            {{-- PROJECT 2 --}}

            <article class="project-card doodle-card">

                <div class="project-image project-image-2">
                    <span>
                        PROJECT 02
                    </span>
                </div>

                <div class="project-content">

                    <p class="project-category">
                        TRADE
                    </p>

                    <h3>
                        Trading & Distribution
                    </h3>

                    <p>
                        Trading, distribution, and retail solutions
                        supporting business and commercial
                        activities.
                    </p>

                    <div class="project-meta">

                        <span>
                            Trade
                        </span>

                        <span>
                            Distribution
                        </span>

                    </div>

                </div>

            </article>


            {{-- PROJECT 3 --}}

            <article class="project-card doodle-card">

                <div class="project-image project-image-3">
                    <span>
                        PROJECT 03
                    </span>
                </div>

                <div class="project-content">

                    <p class="project-category">
                        INDUSTRIAL
                    </p>

                    <h3>
                        Industrial Solutions
                    </h3>

                    <p>
                        Industrial and manufacturing solutions
                        developed to support operational and
                        production requirements.
                    </p>

                    <div class="project-meta">

                        <span>
                            Industrial
                        </span>

                        <span>
                            Manufacturing
                        </span>

                    </div>

                </div>

            </article>


            {{-- PROJECT 4 --}}

            <article class="project-card doodle-card">

                <div class="project-image project-image-4">
                    <span>
                        PROJECT 04
                    </span>
                </div>

                <div class="project-content">

                    <p class="project-category">
                        PROFESSIONAL
                    </p>

                    <h3>
                        Professional Services
                    </h3>

                    <p>
                        Consulting, design, and professional
                        services tailored to support client
                        projects.
                    </p>

                    <div class="project-meta">

                        <span>
                            Consulting
                        </span>

                        <span>
                            Professional
                        </span>

                    </div>

                </div>

            </article>


        </div>

    </div>
</section>


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

            <a href="/rfq" class="doodle-button">
                Request a Quote →
            </a>

        </div>

    </div>

</section>

@endsection