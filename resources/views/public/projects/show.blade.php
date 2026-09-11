@extends('layouts.app')

@section('title', $project->title . ' - Xclip')

@section('content')

{{-- =========================
     PROJECT DETAIL HERO
========================= --}}

<section class="project-detail-hero">

    <div class="container">

        <div class="project-detail-back">

            <a href="{{ route('projects') }}">
                ← Back to Projects
            </a>

        </div>


        <div class="project-detail-header">

            <div>

                <p class="section-label">
                    {{ strtoupper($project->category) }}
                </p>

                <h1>
                    {{ $project->title }}
                </h1>

                @if($project->client)

                <p class="project-detail-client">
                    Client: {{ $project->client }}
                </p>

                @endif

            </div>


            <div class="project-detail-status">

                @if($project->status === 'planning')

                <span class="project-status project-status-planning">
                    PLANNING
                </span>

                @elseif($project->status === 'ongoing')

                <span class="project-status project-status-ongoing">
                    ONGOING
                </span>

                @elseif($project->status === 'completed')

                <span class="project-status project-status-completed">
                    COMPLETED
                </span>

                @else

                <span class="project-status">
                    {{ strtoupper($project->status) }}
                </span>

                @endif

            </div>

        </div>

    </div>

</section>


{{-- =========================
     PROJECT DETAIL CONTENT
========================= --}}

<section class="project-detail-content">

    <div class="container">

        <div class="project-detail-layout">


            {{-- =========================
                 PROJECT IMAGE
            ========================= --}}

            <div class="project-detail-image-card">

                @if($project->thumbnail)

                <img
                    src="{{ asset('storage/' . $project->thumbnail) }}"
                    alt="{{ $project->title }}"
                    class="project-detail-image">

                @else

                <div class="project-detail-image-placeholder">

                    <span>
                        PROJECT
                    </span>

                    <strong>
                        {{ strtoupper($project->title) }}
                    </strong>

                </div>

                @endif

            </div>


            {{-- =========================
                 PROJECT INFORMATION
            ========================= --}}

            <div class="project-detail-info">

                <div>

                    <p class="section-label">
                        PROJECT INFORMATION
                    </p>

                    <h2>
                        About This Project
                    </h2>

                </div>


                {{-- META INFORMATION --}}

                <div class="project-detail-meta">


                    {{-- CATEGORY --}}

                    <div class="project-detail-meta-item">

                        <span>
                            CATEGORY
                        </span>

                        <strong>
                            {{ ucfirst($project->category) }}
                        </strong>

                    </div>


                    {{-- CLIENT --}}

                    <div class="project-detail-meta-item">

                        <span>
                            CLIENT
                        </span>

                        <strong>
                            {{ $project->client ?: '—' }}
                        </strong>

                    </div>


                    {{-- LOCATION --}}

                    <div class="project-detail-meta-item">

                        <span>
                            LOCATION
                        </span>

                        <strong>
                            {{ $project->location ?: '—' }}
                        </strong>

                    </div>


                    {{-- YEAR --}}

                    <div class="project-detail-meta-item">

                        <span>
                            YEAR
                        </span>

                        <strong>
                            {{ $project->year ?: '—' }}
                        </strong>

                    </div>

                </div>


                {{-- DESCRIPTION --}}

                <div class="project-detail-description">

                    <p class="section-label">
                        PROJECT DESCRIPTION
                    </p>


                    @if($project->description)

                    <p>
                        {{ $project->description }}
                    </p>

                    @else

                    <p class="project-detail-no-description">
                        No project description is available yet.
                    </p>

                    @endif

                </div>


                {{-- CTA --}}

                <div class="project-detail-cta">

                    <p class="section-label">
                        HAVE A SIMILAR PROJECT?
                    </p>

                    <h3>
                        Let's Build
                        Something Together.
                    </h3>

                    <p>
                        Tell us about your project and discover
                        how Xclip can support your needs.
                    </p>

                    <a
                        href="{{ route('rfq') }}"
                        class="doodle-button">
                        Request a Quote →
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================
     PROJECT NAVIGATION
========================= --}}

<section class="project-detail-navigation">

    <div class="container">

        <a
            href="{{ route('projects') }}"
            class="project-detail-back-button">
            ← Back to All Projects
        </a>

        <a
            href="{{ route('rfq') }}"
            class="doodle-button">
            Start Your Project →
        </a>

    </div>

</section>

@endsection