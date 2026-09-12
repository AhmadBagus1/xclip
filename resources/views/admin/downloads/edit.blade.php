@extends('layouts.admin')

@section('title', 'Edit Download - Xclip Admin')

@section('content')

<div class="admin-page-header">

    <div>
        <p class="section-label">XCLIP ADMIN PANEL</p>

        <h2>Edit Download.</h2>

        <p>
            Update document information or replace
            the downloadable file.
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

        <li>
            {{ $error }}
        </li>

        @endforeach

    </ul>

</div>

@endif


<div class="admin-download-edit-layout">


    {{-- =====================================================
         EDIT FORM
    ====================================================== --}}

    <div class="admin-download-edit-card">

        <form
            action="{{ route('admin.downloads.update', $download) }}"
            method="POST"
            enctype="multipart/form-data"
            class="admin-form">

            @csrf

            @method('PUT')


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
                    value="{{ old('title', $download->title) }}"
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
                    placeholder="Brief description about this document...">{{ old('description', $download->description) }}</textarea>

                @error('description')

                <small class="admin-form-error">
                    {{ $message }}
                </small>

                @enderror

            </div>


            {{-- CATEGORY + VISIBILITY --}}

            <div class="admin-form-row">


                {{-- CATEGORY --}}

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
                            {{ old('category', $download->category) === 'company' ? 'selected' : '' }}>
                            Company
                        </option>

                        <option
                            value="brochure"
                            {{ old('category', $download->category) === 'brochure' ? 'selected' : '' }}>
                            Brochure
                        </option>

                        <option
                            value="portfolio"
                            {{ old('category', $download->category) === 'portfolio' ? 'selected' : '' }}>
                            Portfolio
                        </option>

                        <option
                            value="services"
                            {{ old('category', $download->category) === 'services' ? 'selected' : '' }}>
                            Services
                        </option>

                        <option
                            value="document"
                            {{ old('category', $download->category) === 'document' ? 'selected' : '' }}>
                            Document
                        </option>

                        <option
                            value="other"
                            {{ old('category', $download->category) === 'other' ? 'selected' : '' }}>
                            Other
                        </option>

                    </select>

                    @error('category')

                    <small class="admin-form-error">
                        {{ $message }}
                    </small>

                    @enderror

                </div>


                {{-- VISIBILITY --}}

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
                                {{ old('is_active', $download->is_active) ? 'checked' : '' }}>

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


            {{-- =====================================================
                 CURRENT FILE
            ====================================================== --}}

            <div class="admin-form-group">

                <label>
                    Current File
                </label>

                <div class="admin-download-current-file">

                    <div class="admin-download-current-icon">
                        FILE
                    </div>

                    <div class="admin-download-current-info">

                        <strong>
                            {{ $download->file_name ?? 'No file name available' }}
                        </strong>

                        <span>

                            @if($download->file_size)

                            @php

                            $size = $download->file_size;

                            if ($size >= 1073741824) {

                            $formattedSize = number_format(
                            $size / 1073741824,
                            2
                            ) . ' GB';

                            } elseif ($size >= 1048576) {

                            $formattedSize = number_format(
                            $size / 1048576,
                            2
                            ) . ' MB';

                            } elseif ($size >= 1024) {

                            $formattedSize = number_format(
                            $size / 1024,
                            2
                            ) . ' KB';

                            } else {

                            $formattedSize = $size . ' B';

                            }

                            @endphp

                            {{ $formattedSize }}

                            @else

                            Unknown size

                            @endif

                        </span>

                    </div>

                    @if($download->file)

                    <a
                        href="{{ asset('storage/' . $download->file) }}"
                        target="_blank"
                        class="admin-download-current-open">

                        Open →

                    </a>

                    @endif

                </div>

            </div>


            {{-- =====================================================
                 REPLACE FILE
            ====================================================== --}}

            <div class="admin-form-group">

                <label for="file">
                    Replace File
                </label>

                <div class="admin-download-replace-box">

                    <input
                        type="file"
                        id="file"
                        name="file"
                        accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.zip">

                    <label
                        for="file"
                        class="admin-file-upload-label">

                        <span class="admin-file-upload-icon">
                            +
                        </span>

                        <span>
                            Choose New File
                        </span>

                    </label>

                    <div
                        id="admin-file-name"
                        class="admin-file-name">

                        No new file selected.

                    </div>

                </div>

                <small class="admin-form-help">

                    Leave this empty if you want to keep the
                    current file.

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


            {{-- =====================================================
                 ACTIONS
            ====================================================== --}}

            <div class="admin-form-actions">

                <a
                    href="{{ route('admin.downloads.show', $download) }}"
                    class="admin-btn admin-btn-secondary">

                    Cancel

                </a>

                <button
                    type="submit"
                    class="admin-btn admin-btn-primary">

                    Update Download →

                </button>

            </div>

        </form>

    </div>


    {{-- =====================================================
         SIDE INFORMATION
    ====================================================== --}}

    <aside class="admin-download-edit-side">


        {{-- INFO --}}

        <div class="admin-download-edit-note">

            <span class="admin-download-edit-number">
                01
            </span>

            <p class="section-label">
                CURRENT FILE
            </p>

            <h3>
                Keep Existing File
            </h3>

            <p>
                If you do not select a new file,
                the current file will remain unchanged.
            </p>

        </div>


        {{-- REPLACE INFO --}}

        <div class="admin-download-edit-note admin-download-edit-note-yellow">

            <span class="admin-download-edit-number">
                02
            </span>

            <p class="section-label">
                REPLACE
            </p>

            <h3>
                Upload New File
            </h3>

            <p>
                Selecting a new file will replace
                the current file stored on the server.
            </p>

        </div>


        {{-- PUBLIC VISIBILITY --}}

        <div class="admin-download-edit-note">

            <span class="admin-download-edit-number">
                03
            </span>

            <p class="section-label">
                VISIBILITY
            </p>

            @if($download->is_active)

            <h3>
                Currently Active
            </h3>

            <p>
                This document is currently visible
                on the public Downloads page.
            </p>

            @else

            <h3>
                Currently Hidden
            </h3>

            <p>
                This document is currently inactive
                and hidden from the public page.
            </p>

            @endif

        </div>

    </aside>

</div>


{{-- =====================================================
     FILE NAME SCRIPT
====================================================== --}}

<script>
    const fileInput = document.getElementById('file');

    const fileName =
        document.getElementById('admin-file-name');


    if (fileInput && fileName) {

        fileInput.addEventListener('change', function() {

            if (this.files.length > 0) {

                fileName.textContent =
                    this.files[0].name;

            } else {

                fileName.textContent =
                    'No new file selected.';

            }

        });

    }
</script>

@endsection