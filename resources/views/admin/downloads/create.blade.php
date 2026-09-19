@extends('layouts.admin')

@section('title', 'Add Download - Xclip Admin')

@section('content')

<div class="admin-page-header">

    <div>
        <p class="section-label">XCLIP ADMIN PANEL</p>

        <h2>Add Download.</h2>

        <p>
            Add a new document or file that can be
            downloaded from the Xclip website.
        </p>
    </div>

</div>


{{-- VALIDATION ERRORS --}}

@if($errors->any())

<div class="admin-alert admin-alert-error">

    <strong>
        Please fix the following errors:
    </strong>

    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>

</div>

@endif


{{-- FORM --}}

<div class="admin-form-wrapper">

    <form
        action="{{ route('admin.downloads.store') }}"
        method="POST"
        enctype="multipart/form-data"
        class="admin-form">

        @csrf


        {{-- TITLE --}}

        <div class="admin-form-group">

            <label for="title">
                Document Title
                <span>*</span>
            </label>

            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
                placeholder="Example: Xclip Company Profile"
                required>

            @error('title')
            <small class="admin-form-error">
                {{ $message }}
            </small>
            @enderror

        </div>


        {{-- DESCRIPTION --}}

        <div class="admin-form-group">

            <label for="description">
                Description
            </label>

            <textarea
                id="description"
                name="description"
                rows="6"
                placeholder="Brief description about this document...">{{ old('description') }}</textarea>

            @error('description')
            <small class="admin-form-error">
                {{ $message }}
            </small>
            @enderror

        </div>


        {{-- CATEGORY --}}

        <div class="admin-form-row">

            <div class="admin-form-group">

                <label for="category">
                    Category
                    <span>*</span>
                </label>

                <select
                    id="category"
                    name="category"
                    required>

                    <option value="">
                        Select Category
                    </option>

                    <option
                        value="company"
                        {{ old('category') === 'company' ? 'selected' : '' }}>
                        Company
                    </option>

                    <option
                        value="brochure"
                        {{ old('category') === 'brochure' ? 'selected' : '' }}>
                        Brochure
                    </option>

                    <option
                        value="portfolio"
                        {{ old('category') === 'portfolio' ? 'selected' : '' }}>
                        Portfolio
                    </option>

                    <option
                        value="services"
                        {{ old('category') === 'services' ? 'selected' : '' }}>
                        Services
                    </option>

                    <option
                        value="document"
                        {{ old('category') === 'document' ? 'selected' : '' }}>
                        Document
                    </option>

                    <option
                        value="other"
                        {{ old('category') === 'other' ? 'selected' : '' }}>
                        Other
                    </option>

                </select>

                @error('category')
                <small class="admin-form-error">
                    {{ $message }}
                </small>
                @enderror

            </div>


            {{-- STATUS --}}

            <div class="admin-form-group">

                <label>
                    Visibility
                </label>

                <div class="admin-checkbox-wrapper">

                    <label class="admin-checkbox">

                        <input
                            type="checkbox"
                            name="is_active"
                            value="1"
                            {{ old('is_active', true) ? 'checked' : '' }}>

                        <span>
                            Make this download active
                        </span>

                    </label>

                </div>

                <small class="admin-form-help">
                    Active files will be visible on the public Downloads page.
                </small>

            </div>

        </div>


        {{-- FILE UPLOAD --}}

        <div class="admin-form-group">

            <label for="file">
                Upload File
                <span>*</span>
            </label>

            <div class="admin-file-upload">

                <input
                    type="file"
                    id="file"
                    name="file"
                    accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.zip"
                    required>

                <label
                    for="file"
                    class="admin-file-upload-label">

                    <span class="admin-file-upload-icon">
                        +
                    </span>

                    <span>
                        Choose File
                    </span>

                </label>

                <div
                    id="admin-file-name"
                    class="admin-file-name">

                    No file selected.

                </div>

            </div>

            <small class="admin-form-help">

                Allowed formats:
                PDF, DOC, DOCX, XLS, XLSX,
                PPT, PPTX, ZIP.

                Maximum file size: 20 MB.

            </small>

            @error('file')
            <small class="admin-form-error">
                {{ $message }}
            </small>
            @enderror

        </div>


        {{-- FORM ACTIONS --}}

        <div class="admin-form-actions">

            <a
                href="{{ route('admin.downloads.index') }}"
                class="admin-btn admin-btn-secondary">
                Cancel
            </a>

            <button
                type="submit"
                class="admin-btn admin-btn-primary">
                Save Download
            </button>

        </div>

    </form>

</div>


{{-- FILE NAME SCRIPT --}}

<script>
    const fileInput = document.getElementById('file');
    const fileName = document.getElementById('admin-file-name');

    if (fileInput && fileName) {

        fileInput.addEventListener('change', function() {

            if (this.files.length > 0) {

                fileName.textContent =
                    this.files[0].name;

            } else {

                fileName.textContent =
                    'No file selected.';

            }

        });

    }
</script>

@endsection