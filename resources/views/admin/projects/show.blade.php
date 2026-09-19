@extends('layouts.admin')

@section('title', 'View Project - Xclip Admin')

@section('page-title', 'Project Detail')

@section('content')

<div class="admin-page-header">
    <div>
        <p class="section-label">PROJECT MANAGEMENT</p>
        <h2>{{ $project->title }}.</h2>
        <p>
            View detailed information about this project.
        </p>
    </div>


</div>


<div class="admin-project-detail">

    {{-- PROJECT IMAGE --}}
    <div class="admin-project-detail-image-card">

        @if($project->thumbnail)

        <img
            src="{{ asset('storage/' . $project->thumbnail) }}"
            alt="{{ $project->title }}"
            class="admin-project-detail-image">

        @else

        <div class="admin-project-detail-no-image">
            <span>NO IMAGE</span>
            <small>Project thumbnail has not been uploaded.</small>
        </div>

        @endif

    </div>


    {{-- PROJECT INFORMATION --}}
    <div class="admin-project-detail-info">

        <div class="admin-project-detail-heading">

            <div>
                <p class="section-label">PROJECT INFORMATION</p>

                <h2>
                    {{ $project->title }}
                </h2>

                @if($project->client)
                <p class="admin-project-detail-client">
                    Client: {{ $project->client }}
                </p>
                @endif
            </div>

            <div class="admin-project-detail-status">

                @if($project->status === 'planning')

                <span class="admin-project-status admin-project-status-planning">
                    PLANNING
                </span>

                @elseif($project->status === 'ongoing')

                <span class="admin-project-status admin-project-status-ongoing">
                    ONGOING
                </span>

                @elseif($project->status === 'completed')

                <span class="admin-project-status admin-project-status-completed">
                    COMPLETED
                </span>

                @else

                <span class="admin-project-status">
                    {{ strtoupper($project->status) }}
                </span>

                @endif

            </div>

        </div>


        {{-- META --}}
        <div class="admin-project-meta-grid">

            <div class="admin-project-meta-item">
                <span>CATEGORY</span>

                <strong>
                    {{ ucfirst($project->category) }}
                </strong>
            </div>


            <div class="admin-project-meta-item">
                <span>LOCATION</span>

                <strong>
                    {{ $project->location ?: '—' }}
                </strong>
            </div>


            <div class="admin-project-meta-item">
                <span>YEAR</span>

                <strong>
                    {{ $project->year ?: '—' }}
                </strong>
            </div>


            <div class="admin-project-meta-item">
                <span>SLUG</span>

                <strong>
                    {{ $project->slug }}
                </strong>
            </div>

        </div>


        {{-- DESCRIPTION --}}
        <div class="admin-project-description">

            <p class="section-label">DESCRIPTION</p>

            @if($project->description)

            <p>
                {{ $project->description }}
            </p>

            @else

            <p class="admin-project-no-description">
                No project description has been added.
            </p>

            @endif

        </div>


        {{-- DISPLAY STATUS --}}
        <div class="admin-project-display-settings">

            <p class="section-label">DISPLAY SETTINGS</p>

            <div class="admin-project-display-grid">

                <div class="admin-project-display-item">

                    <span>VISIBILITY</span>

                    @if($project->is_active)

                    <strong class="admin-visibility-active">
                        ACTIVE
                    </strong>

                    @else

                    <strong class="admin-visibility-hidden">
                        HIDDEN
                    </strong>

                    @endif

                </div>


                <div class="admin-project-display-item">

                    <span>FEATURED</span>

                    @if($project->is_featured)

                    <strong class="admin-featured-badge">
                        ★ FEATURED
                    </strong>

                    @else

                    <strong class="admin-featured-not-active">
                        NOT FEATURED
                    </strong>

                    @endif

                </div>

            </div>

        </div>


        {{-- TIMESTAMPS --}}
        <div class="admin-project-timestamps">

            <div>
                <span>CREATED</span>
                <strong>
                    {{ $project->created_at->format('d M Y, H:i') }}
                </strong>
            </div>

            <div>
                <span>LAST UPDATED</span>
                <strong>
                    {{ $project->updated_at->format('d M Y, H:i') }}
                </strong>
            </div>

        </div>


        {{-- ACTIONS --}}
        <div class="admin-project-detail-actions">

            <a
                href="{{ route('admin.projects.index') }}"
                class="admin-secondary-button">
                Back to Projects
            </a>

            <a
                href="{{ route('admin.projects.edit', $project) }}"
                class="admin-primary-button">
                Edit Project
            </a>

        </div>

    </div>

</div>

@endsection