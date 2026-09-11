@extends('layouts.admin')

@section('title', 'Projects - Xclip Admin')

@section('page-title', 'Projects')

@section('content')

<div class="admin-page-header">
    <div>
        <p class="section-label">CONTENT MANAGEMENT</p>

        <h2>Projects.</h2>

        <p>
            Manage project portfolio displayed on the Xclip website.
        </p>
    </div>

    <div class="admin-page-header-action">
        <a
            href="{{ route('admin.projects.create') }}"
            class="admin-primary-button">
            <span>+</span>
            Add Project
        </a>
    </div>
</div>


{{-- SUCCESS MESSAGE --}}
@if(session('success'))

<div class="admin-alert admin-alert-success">

    <span>✓</span>

    {{ session('success') }}

</div>

@endif


{{-- PROJECTS TABLE --}}
<div class="admin-dashboard-section">

    <div class="admin-section-header">

        <div>
            <p class="section-label">PROJECT PORTFOLIO</p>

            <h2>All Projects</h2>
        </div>

        <span class="admin-section-count">
            {{ $projects->count() }}
            Project{{ $projects->count() !== 1 ? 's' : '' }}
        </span>

    </div>


    @if($projects->count() > 0)

    <div class="admin-table-wrapper">

        <table class="admin-table">

            <thead>

                <tr>
                    <th>PROJECT</th>
                    <th>CLIENT</th>
                    <th>CATEGORY</th>
                    <th>YEAR</th>
                    <th>STATUS</th>
                    <th>VISIBILITY</th>
                    <th>ACTION</th>
                </tr>

            </thead>


            <tbody>

                @foreach($projects as $project)

                <tr>

                    {{-- PROJECT --}}
                    <td>

                        <div class="admin-project-cell">

                            @if($project->thumbnail)

                            <img
                                src="{{ asset('storage/' . $project->thumbnail) }}"
                                alt="{{ $project->title }}"
                                class="admin-project-thumbnail">

                            @else

                            <div class="admin-project-thumbnail admin-project-thumbnail-empty">

                                <span>
                                    NO IMAGE
                                </span>

                            </div>

                            @endif


                            <div class="admin-project-info">

                                <strong>
                                    {{ $project->title }}
                                </strong>

                                @if($project->location)

                                <span>
                                    {{ $project->location }}
                                </span>

                                @endif

                            </div>

                        </div>

                    </td>


                    {{-- CLIENT --}}
                    <td>
                        {{ $project->client ?: '—' }}
                    </td>


                    {{-- CATEGORY --}}
                    <td>

                        <span class="admin-project-category">
                            {{ ucfirst($project->category) }}
                        </span>

                    </td>


                    {{-- YEAR --}}
                    <td>
                        {{ $project->year ?: '—' }}
                    </td>


                    {{-- STATUS --}}
                    <td>

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

                    </td>


                    {{-- VISIBILITY --}}
                    <td>

                        <div class="admin-project-visibility">

                            @if($project->is_active)

                            <span class="admin-visibility-active">
                                ACTIVE
                            </span>

                            @else

                            <span class="admin-visibility-hidden">
                                HIDDEN
                            </span>

                            @endif


                            @if($project->is_featured)

                            <span class="admin-featured-badge">
                                ★ FEATURED
                            </span>

                            @endif

                        </div>

                    </td>


                    {{-- ACTION --}}
                    <td>

                        <div class="admin-table-actions">

                            {{-- VIEW --}}
                            <a
                                href="{{ route('admin.projects.show', $project) }}"
                                class="admin-action-link">
                                View
                            </a>


                            {{-- EDIT --}}
                            <a
                                href="{{ route('admin.projects.edit', $project) }}"
                                class="admin-action-link">
                                Edit
                            </a>


                            {{-- DELETE --}}
                            <form
                                action="{{ route('admin.projects.destroy', $project) }}"
                                method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus project ini? Data project dan thumbnail-nya akan dihapus secara permanen.')">
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="admin-action-link admin-action-delete">
                                    Delete
                                </button>
                            </form>

                        </div>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>


    @else

    {{-- EMPTY STATE --}}
    <div class="admin-empty-state">

        <div class="admin-empty-icon">
            +
        </div>

        <h3>
            No Projects Yet.
        </h3>

        <p>
            You haven't added any projects to your portfolio.
        </p>

        <a
            href="{{ route('admin.projects.create') }}"
            class="admin-primary-button">
            <span>+</span>
            Add Your First Project
        </a>

    </div>

    @endif

</div>

@endsection