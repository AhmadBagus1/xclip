@extends('layouts.app')

@section('title', $project->title . ' - Xclip')

@section(
'meta_description',
\Illuminate\Support\Str::limit(
$project->description
?: 'Pelajari detail proyek ' . $project->title . ' dari Xclip, termasuk kategori, klien, lokasi, tahun, dan informasi proyek.',
160,
''
)
)

@section('og_title', $project->title . ' - Xclip')

@section(
'og_description',
\Illuminate\Support\Str::limit(
$project->description
?: 'Detail proyek ' . $project->title . ' dari Xclip.',
160,
''
)
)

@section('og_type', 'article')

@section('content')

{{-- =========================================================
   PROJECT DETAIL
========================================================= --}}

<section class="project-detail">

    <div class="container">

        {{-- =================================================
           PROJECT IMAGE
        ================================================== --}}

        <div class="project-detail-image-wrapper">

            @if($project->thumbnail)

            <img
                src="{{ asset('storage/' . $project->thumbnail) }}"
                alt="{{ $project->title }}"
                class="project-detail-image">

            @else

            <div class="project-detail-image-placeholder">

                <span>PROJECT</span>

                <strong>
                    {{ strtoupper($project->title) }}
                </strong>

            </div>

            @endif

        </div>


        {{-- =================================================
           PROJECT INFORMATION + DESCRIPTION
        ================================================== --}}

        <div class="project-detail-main">


            {{-- =============================================
               LEFT — PROJECT INFORMATION
            ============================================== --}}

            <aside class="project-detail-sidebar">

                <div class="project-information">

                    <h2>
                        Project Information
                    </h2>


                    {{-- CATEGORY --}}

                    <div class="project-information-item">

                        <span>
                            Category
                        </span>

                        <strong>
                            {{ $project->category
                                ? ucfirst($project->category)
                                : '—'
                            }}
                        </strong>

                    </div>


                    {{-- CLIENT --}}

                    <div class="project-information-item">

                        <span>
                            Client
                        </span>

                        <strong>
                            {{ $project->client ?: '—' }}
                        </strong>

                    </div>


                    {{-- LOCATION --}}

                    <div class="project-information-item">

                        <span>
                            Location
                        </span>

                        <strong>
                            {{ $project->location ?: '—' }}
                        </strong>

                    </div>


                    {{-- YEAR --}}

                    <div class="project-information-item">

                        <span>
                            Year
                        </span>

                        <strong>
                            {{ $project->year ?: '—' }}
                        </strong>

                    </div>
                    {{-- STATUS --}}

                    <div class="project-information-item">

                        <span>
                            Status
                        </span>

                        <strong>
                            {{ $project->status
            ? ucfirst($project->status)
            : '—'
        }}
                        </strong>

                    </div>

                </div>

            </aside>


            {{-- =============================================
               RIGHT — PROJECT DESCRIPTION
            ============================================== --}}

            <div class="project-detail-description">

                <h1>
                    {{ $project->title }}
                </h1>


                @if($project->description)

                <div class="project-description-text">

                    <p>
                        {{ $project->description }}
                    </p>

                </div>

                @else

                <p class="project-detail-no-description">
                    No project description is available yet.
                </p>

                @endif

            </div>

        </div>

        @endsection