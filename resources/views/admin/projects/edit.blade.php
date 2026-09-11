@extends('layouts.admin')

@section('title', 'Edit Project - Xclip Admin')

@section('page-title', 'Edit Project')

@section('content')

<div class="admin-page-header">
    <div>
        <p class="section-label">PROJECT MANAGEMENT</p>

        <h2>Edit Project.</h2>

        <p>
            Update information and display settings for this project.
        </p>
    </div>

    <div class="admin-page-header-action">
        <a
            href="{{ route('admin.projects.show', $project) }}"
            class="admin-secondary-button">
            ← View Project
        </a>
    </div>
</div>


{{-- VALIDATION ERRORS --}}
@if($errors->any())

<div class="admin-alert admin-alert-error">

    <div>
        <strong>Please check the following errors:</strong>

        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

</div>

@endif


<form
    action="{{ route('admin.projects.update', $project) }}"
    method="POST"
    enctype="multipart/form-data"
    class="admin-project-form">

    @csrf
    @method('PUT')


    {{-- =====================================================
        01 — PROJECT INFORMATION
    ====================================================== --}}

    <div class="admin-form-card">

        <div class="admin-form-card-header">

            <div>

                <p class="section-label">
                    01 — INFORMATION
                </p>

                <h2>
                    Project Information
                </h2>

                <p>
                    Update the basic information about this project.
                </p>

            </div>

        </div>


        <div class="admin-form-grid">


            {{-- PROJECT NAME --}}
            <div class="admin-form-group admin-form-full">

                <label for="title">
                    Project Name <span>*</span>
                </label>

                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title', $project->title) }}"
                    placeholder="e.g. Office Building Project"
                    required>

            </div>


            {{-- CLIENT --}}
            <div class="admin-form-group">

                <label for="client">
                    Client
                </label>

                <input
                    type="text"
                    id="client"
                    name="client"
                    value="{{ old('client', $project->client) }}"
                    placeholder="e.g. PT Example Indonesia">

            </div>


            {{-- CATEGORY --}}
            <div class="admin-form-group">

                <label for="category">
                    Category <span>*</span>
                </label>

                <select
                    id="category"
                    name="category"
                    required>

                    <option value="">
                        Select Category
                    </option>

                    <option
                        value="construction"
                        {{ old('category', $project->category) === 'construction' ? 'selected' : '' }}>
                        Construction
                    </option>

                    <option
                        value="trade"
                        {{ old('category', $project->category) === 'trade' ? 'selected' : '' }}>
                        Trade
                    </option>

                    <option
                        value="industrial"
                        {{ old('category', $project->category) === 'industrial' ? 'selected' : '' }}>
                        Industrial
                    </option>

                    <option
                        value="professional"
                        {{ old('category', $project->category) === 'professional' ? 'selected' : '' }}>
                        Professional
                    </option>

                </select>

            </div>


            {{-- LOCATION --}}
            <div class="admin-form-group">

                <label for="location">
                    Location
                </label>

                <input
                    type="text"
                    id="location"
                    name="location"
                    value="{{ old('location', $project->location) }}"
                    placeholder="e.g. Yogyakarta">

            </div>


            {{-- YEAR --}}
            <div class="admin-form-group">

                <label for="year">
                    Year
                </label>

                <input
                    type="number"
                    id="year"
                    name="year"
                    value="{{ old('year', $project->year) }}"
                    min="1900"
                    max="2100"
                    placeholder="2026">

            </div>


            {{-- STATUS --}}
            <div class="admin-form-group">

                <label for="status">
                    Project Status <span>*</span>
                </label>

                <select
                    id="status"
                    name="status"
                    required>

                    <option value="">
                        Select Status
                    </option>

                    <option
                        value="planning"
                        {{ old('status', $project->status) === 'planning' ? 'selected' : '' }}>
                        Planning
                    </option>

                    <option
                        value="ongoing"
                        {{ old('status', $project->status) === 'ongoing' ? 'selected' : '' }}>
                        Ongoing
                    </option>

                    <option
                        value="completed"
                        {{ old('status', $project->status) === 'completed' ? 'selected' : '' }}>
                        Completed
                    </option>

                </select>

            </div>


            {{-- DESCRIPTION --}}
            <div class="admin-form-group admin-form-full">

                <label for="description">
                    Project Description
                </label>

                <textarea
                    id="description"
                    name="description"
                    rows="7"
                    placeholder="Describe the project, scope of work, objectives, and other relevant information...">{{ old('description', $project->description) }}</textarea>

            </div>

        </div>

    </div>


    {{-- =====================================================
        02 — MEDIA
    ====================================================== --}}

    <div class="admin-form-card">

        <div class="admin-form-card-header">

            <div>

                <p class="section-label">
                    02 — MEDIA
                </p>

                <h2>
                    Project Image
                </h2>

                <p>
                    Replace the current project image if needed.
                </p>

            </div>

        </div>


        <div class="admin-edit-image-layout">


            {{-- CURRENT IMAGE --}}
            <div class="admin-current-image">

                <span class="admin-image-label">
                    CURRENT IMAGE
                </span>

                @if($project->thumbnail)

                <img
                    src="{{ asset('storage/' . $project->thumbnail) }}"
                    alt="{{ $project->title }}">

                @else

                <div class="admin-current-image-empty">
                    <span>NO IMAGE</span>
                </div>

                @endif

            </div>


            {{-- UPLOAD NEW IMAGE --}}
            <div class="admin-upload-area">

                <label
                    for="thumbnail"
                    class="admin-upload-box">

                    <div class="admin-upload-icon">
                        +
                    </div>

                    <strong>
                        Choose New Project Image
                    </strong>

                    <span>
                        Leave empty to keep the current image.
                    </span>

                    <small>
                        JPG, JPEG, PNG or WEBP — Maximum 5 MB
                    </small>

                </label>


                <input
                    type="file"
                    id="thumbnail"
                    name="thumbnail"
                    accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                    class="admin-upload-input">


                <div
                    id="admin-image-preview"
                    class="admin-image-preview"></div>

            </div>

        </div>

    </div>


    {{-- =====================================================
        03 — DISPLAY SETTINGS
    ====================================================== --}}

    <div class="admin-form-card">

        <div class="admin-form-card-header">

            <div>

                <p class="section-label">
                    03 — DISPLAY
                </p>

                <h2>
                    Display Settings
                </h2>

                <p>
                    Control how this project appears on the website.
                </p>

            </div>

        </div>


        <div class="admin-checkbox-grid">


            {{-- FEATURED --}}
            <label class="admin-checkbox-card">

                <input
                    type="checkbox"
                    name="is_featured"
                    value="1"
                    {{ old('is_featured', $project->is_featured) ? 'checked' : '' }}>

                <span class="admin-checkbox-content">

                    <strong>
                        Featured Project
                    </strong>

                    <small>
                        Highlight this project as one of Xclip's featured projects.
                    </small>

                </span>

            </label>


            {{-- ACTIVE --}}
            <label class="admin-checkbox-card">

                <input
                    type="checkbox"
                    name="is_active"
                    value="1"
                    {{ old('is_active', $project->is_active) ? 'checked' : '' }}>

                <span class="admin-checkbox-content">

                    <strong>
                        Active Project
                    </strong>

                    <small>
                        Show this project on the public Projects page.
                    </small>

                </span>

            </label>

        </div>

    </div>


    {{-- =====================================================
        ACTIONS
    ====================================================== --}}

    <div class="admin-form-actions">

        <a
            href="{{ route('admin.projects.show', $project) }}"
            class="admin-secondary-button">
            Cancel
        </a>

        <button
            type="submit"
            class="admin-primary-button">
            Save Changes →
        </button>

    </div>

</form>

@endsection


@push('scripts')

<script>
    const thumbnailInput = document.getElementById('thumbnail');
    const imagePreview = document.getElementById('admin-image-preview');

    if (thumbnailInput && imagePreview) {

        thumbnailInput.addEventListener('change', function() {

            const file = this.files[0];

            if (!file) {

                imagePreview.innerHTML = '';
                imagePreview.style.display = 'none';

                return;
            }


            const reader = new FileReader();


            reader.onload = function(event) {

                imagePreview.innerHTML = `
                    <span class="admin-image-label">
                        NEW IMAGE PREVIEW
                    </span>

                    <img
                        src="${event.target.result}"
                        alt="New Project Preview"
                    >
                `;

                imagePreview.style.display = 'block';

            };


            reader.readAsDataURL(file);

        });

    }
</script>

@endpush