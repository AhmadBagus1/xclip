@extends('layouts.app')

@section('title', 'Projects — Xclip')

@section(
'meta_description',
'Jelajahi portofolio proyek Xclip dari berbagai sektor dan kebutuhan bisnis, mulai dari konstruksi, perdagangan, industrial, hingga layanan profesional.'
)

@section('og_title', 'Projects — Xclip')

@section(
'og_description',
'Jelajahi proyek dan pengalaman kerja Xclip dalam mendukung berbagai kebutuhan bisnis, proyek, dan layanan profesional.'
)

@section('content')

{{-- =========================================================
     PROJECT HEADER
========================================================= --}}

<section class="projects-header">

    <div class="container">

        <div class="projects-header-content">


            <h1>
                Our Projects
            </h1>

            <p class="projects-header-subtitle">
                Explore our latest projects and discover how Xclip delivers practical solutions across construction, industrial, trade, and professional services.
            </p>

        </div>

    </div>

</section>


{{-- =========================================================
     PROJECT GALLERY
========================================================= --}}

<section class="projects-gallery">

    <div class="container">

        @if($projects->count())

        <div class="projects-grid">

            @foreach($projects as $project)

            <article class="single-project-wrapper">

                <a
                    href="{{ route('projects.show', $project->slug) }}"
                    class="single-project-item">

                    {{-- PROJECT IMAGE --}}
                    @if($project->thumbnail)

                    <img
                        src="{{ asset('storage/' . $project->thumbnail) }}"
                        alt="{{ $project->title }} — Xclip"
                        loading="lazy">

                    @else

                    <div class="project-image-placeholder">

                        <span>
                            PROJECT
                        </span>

                    </div>

                    @endif


                    {{-- PROJECT TITLE --}}
                    <div class="single-project-title">

                        <h2>
                            {{ $project->title }}
                        </h2>

                        @if($project->category)

                        <span>
                            {{ $project->category }}
                        </span>

                        @endif

                    </div>

                </a>

            </article>

            @endforeach

        </div>


        @if($projects->hasPages())

        <div class="projects-pagination">

            {{-- PREVIOUS --}}
            @if($projects->onFirstPage())

            <span class="pagination-link pagination-disabled">
                Prev
            </span>

            @else

            <a
                href="{{ $projects->previousPageUrl() }}"
                class="pagination-link">
                Prev
            </a>

            @endif


            {{-- PAGE NUMBERS --}}
            @foreach($projects->getUrlRange(1, $projects->lastPage()) as $page => $url)

            @if($page == $projects->currentPage())

            <span class="pagination-link pagination-active">
                {{ str_pad($page, 2, '0', STR_PAD_LEFT) }}
            </span>

            @else

            <a
                href="{{ $url }}"
                class="pagination-link">
                {{ str_pad($page, 2, '0', STR_PAD_LEFT) }}
            </a>

            @endif

            @endforeach


            {{-- NEXT --}}
            @if($projects->hasMorePages())

            <a
                href="{{ $projects->nextPageUrl() }}"
                class="pagination-link">
                Next
            </a>

            @else

            <span class="pagination-link pagination-disabled">
                Next
            </span>

            @endif

        </div>

        @endif

        @else

        {{-- EMPTY STATE --}}

        <div class="projects-empty">

            <div class="projects-empty-icon">
                +
            </div>

            <h2>
                Projects Coming Soon
            </h2>

            <p>
                Our project portfolio will appear here
                once projects are published.
            </p>

        </div>

        @endif

    </div>

</section>

@endsection