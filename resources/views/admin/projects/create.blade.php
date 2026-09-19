@extends('layouts.admin')

@section('title', 'Add Project - Xclip Admin')

@section('page-title', 'Add Project')

@section('content')

<div class="admin-page-header">
    <div>
        <p class="section-label">PROJECT MANAGEMENT</p>

        <h2>Add New Project.</h2>

        <p>
            Add a new project to the Xclip portfolio.
        </p>
    </div>

    <div class="admin-page-header-action">
        <a
            href="{{ route('admin.projects.index') }}"
            class="admin-secondary-button">
            Back to Projects
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
    action="{{ route('admin.projects.store') }}"
    method="POST"
    enctype="multipart/form-data"
    class="admin-project-form">

    @csrf


    {{-- =====================================================
        PROJECT INFORMATION
    ====================================================== --}}

    <div class="admin-form-card">

        <div class="admin-form-card-header">

            <div>
                <p class="section-label">01 — INFORMATION</p>

                <h2>Project Information</h2>

                <p>
                    Basic information about this project.
                </p>
            </div>

        </div>


        <div class="admin-form-grid">


            {{-- PROJECT TITLE --}}
            <div class="admin-form-group admin-form-full">

                <label for="title">
                    Project Name <span>*</span>
                </label>

                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title') }}"
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
                    value="{{ old('client') }}"
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
                        {{ old('category') === 'construction' ? 'selected' : '' }}>
                        Construction
                    </option>

                    <option
                        value="trade"
                        {{ old('category') === 'trade' ? 'selected' : '' }}>
                        Trade
                    </option>

                    <option
                        value="industrial"
                        {{ old('category') === 'industrial' ? 'selected' : '' }}>
                        Industrial
                    </option>

                    <option
                        value="professional"
                        {{ old('category') === 'professional' ? 'selected' : '' }}>
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
                    value="{{ old('location') }}"
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
                    value="{{ old('year') }}"
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
                        {{ old('status') === 'planning' ? 'selected' : '' }}>
                        Planning
                    </option>

                    <option
                        value="ongoing"
                        {{ old('status') === 'ongoing' ? 'selected' : '' }}>
                        Ongoing
                    </option>

                    <option
                        value="completed"
                        {{ old('status') === 'completed' ? 'selected' : '' }}>
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
                    placeholder="Describe the project, scope of work, objectives, and other relevant information...">{{ old('description') }}</textarea>

            </div>

        </div>

    </div>


    {{-- =====================================================
        PROJECT IMAGE
    ====================================================== --}}

    <div class="admin-form-card">

        <div class="admin-form-card-header">

            <div>
                <p class="section-label">02 — MEDIA</p>

                <h2>Project Image</h2>

                <p>
                    Upload the main image used for this project.
                </p>
            </div>

        </div>


        <div class="admin-upload-area">

            <label
                for="thumbnail"
                class="admin-upload-box">

                <div class="admin-upload-icon">
                    +
                </div>

                <strong>
                    Choose Project Image
                </strong>

                <span>
                    JPG, JPEG, PNG or WEBP — Maximum 5 MB
                </span>

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


    {{-- =====================================================
        DISPLAY SETTINGS
    ====================================================== --}}

    <div class="admin-form-card">

        <div class="admin-form-card-header">

            <div>
                <p class="section-label">03 — DISPLAY</p>

                <h2>Display Settings</h2>

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
                    {{ old('is_featured') ? 'checked' : '' }}>

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
                    {{ old('is_active', true) ? 'checked' : '' }}>

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
        FORM ACTION
    ====================================================== --}}

    <div class="admin-form-actions">

        <a
            href="{{ route('admin.projects.index') }}"
            class="admin-secondary-button">
            Cancel
        </a>

        <button
            type="submit"
            class="admin-primary-button">
            <span>+</span>
            Save Project
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
                    <img
                        src="${event.target.result}"
                        alt="Project Preview"
                    >
                `;

                imagePreview.style.display = 'block';
            };

            reader.readAsDataURL(file);
        });
    }
</script>
@endpush