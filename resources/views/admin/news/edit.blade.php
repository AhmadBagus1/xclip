@extends('layouts.admin')

@section('title', 'Edit News - Xclip Admin')

@section('page-title', 'Edit News')

@section('content')

<div class="admin-page-header">

    <div>

        <p class="section-label">
            CONTENT MANAGEMENT
        </p>

        <h2>
            Edit News.
        </h2>

        <p>
            Update the information and content of this news article.
        </p>

    </div>

</div>


{{-- VALIDATION ERRORS --}}

@if($errors->any())

<div class="admin-alert admin-alert-error">

    <div>

        <strong>
            Please check the following errors:
        </strong>

        <ul>

            @foreach($errors->all() as $error)

            <li>
                {{ $error }}
            </li>

            @endforeach

        </ul>

    </div>

</div>

@endif


<form
    action="{{ route('admin.news.update', $news) }}"
    method="POST"
    enctype="multipart/form-data">

    @csrf

    @method('PUT')


    {{-- BASIC INFORMATION --}}

    <div class="admin-form-section">

        <div class="admin-form-section-header">

            <div>

                <p class="section-label">
                    01 — BASIC INFORMATION
                </p>

                <h2>
                    News Details
                </h2>

                <p>
                    Update the main information about this news article.
                </p>

            </div>

        </div>


        <div class="admin-form-grid">


            {{-- TITLE --}}

            <div class="admin-form-group admin-form-full">

                <label for="title">

                    Title

                    <span>*</span>

                </label>

                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title', $news->title) }}"
                    placeholder="Enter news title..."
                    required>

                <small>
                    Changing the title will also update the news URL slug.
                </small>

            </div>


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
                        Select category
                    </option>

                    <option
                        value="company"
                        {{ old('category', $news->category) === 'company' ? 'selected' : '' }}>
                        Company
                    </option>

                    <option
                        value="project"
                        {{ old('category', $news->category) === 'project' ? 'selected' : '' }}>
                        Project
                    </option>

                    <option
                        value="business"
                        {{ old('category', $news->category) === 'business' ? 'selected' : '' }}>
                        Business
                    </option>

                    <option
                        value="industry"
                        {{ old('category', $news->category) === 'industry' ? 'selected' : '' }}>
                        Industry
                    </option>

                    <option
                        value="event"
                        {{ old('category', $news->category) === 'event' ? 'selected' : '' }}>
                        Event
                    </option>

                    <option
                        value="announcement"
                        {{ old('category', $news->category) === 'announcement' ? 'selected' : '' }}>
                        Announcement
                    </option>

                </select>

            </div>


            {{-- AUTHOR --}}

            <div class="admin-form-group">

                <label for="author">
                    Author
                </label>

                <input
                    type="text"
                    id="author"
                    name="author"
                    value="{{ old('author', $news->author) }}"
                    placeholder="e.g. Xclip Team">

            </div>


            {{-- PUBLISHED AT --}}

            <div class="admin-form-group">

                <label for="published_at">
                    Published Date
                </label>

                <input
                    type="datetime-local"
                    id="published_at"
                    name="published_at"
                    value="{{ old(
                        'published_at',
                        $news->published_at
                            ? $news->published_at->format('Y-m-d\TH:i')
                            : ''
                    ) }}">

                <small>
                    Leave empty if the news is not ready to be published.
                </small>

            </div>


        </div>

    </div>


    {{-- CONTENT --}}

    <div class="admin-form-section">

        <div class="admin-form-section-header">

            <div>

                <p class="section-label">
                    02 — CONTENT
                </p>

                <h2>
                    News Content
                </h2>

                <p>
                    Update the summary and full content of your news article.
                </p>

            </div>

        </div>


        <div class="admin-form-grid">


            {{-- EXCERPT --}}

            <div class="admin-form-group admin-form-full">

                <label for="excerpt">
                    Excerpt
                </label>

                <textarea
                    id="excerpt"
                    name="excerpt"
                    rows="4"
                    placeholder="Write a short summary of this news...">{{ old('excerpt', $news->excerpt) }}</textarea>

                <small>
                    A short summary displayed on the news listing page.
                </small>

            </div>


            {{-- CONTENT --}}

            <div class="admin-form-group admin-form-full">

                <label for="content">
                    Content
                </label>

                <textarea
                    id="content"
                    name="content"
                    rows="14"
                    placeholder="Write the full news article here...">{{ old('content', $news->content) }}</textarea>

                <small>
                    Write the complete content of the news article.
                </small>

            </div>


        </div>

    </div>


    {{-- MEDIA --}}

    <div class="admin-form-section">

        <div class="admin-form-section-header">

            <div>

                <p class="section-label">
                    03 — MEDIA
                </p>

                <h2>
                    News Thumbnail
                </h2>

                <p>
                    Upload a new image or keep the existing thumbnail.
                </p>

            </div>

        </div>


        <div class="admin-form-grid">


            <div class="admin-form-group admin-form-full">

                <label for="thumbnail">
                    Replace Thumbnail
                </label>


                {{-- CURRENT THUMBNAIL --}}

                @if($news->thumbnail)

                <div class="admin-current-image">

                    <p class="section-label">
                        CURRENT THUMBNAIL
                    </p>

                    <img
                        src="{{ asset('storage/' . $news->thumbnail) }}"
                        alt="{{ $news->title }}">

                </div>

                @endif


                <input
                    type="file"
                    id="thumbnail"
                    name="thumbnail"
                    accept=".jpg,.jpeg,.png,.webp">

                <small>
                    Leave empty to keep the current thumbnail.
                    JPG, JPEG, PNG, or WEBP. Maximum size: 5 MB.
                </small>


                {{-- NEW IMAGE PREVIEW --}}

                <div
                    id="news-thumbnail-preview"
                    class="admin-image-preview"
                    style="display: none;">

                    <p class="section-label">
                        NEW THUMBNAIL PREVIEW
                    </p>

                    <img
                        id="news-thumbnail-preview-image"
                        src=""
                        alt="New Thumbnail Preview">

                </div>

            </div>


        </div>

    </div>


    {{-- PUBLISH SETTINGS --}}

    <div class="admin-form-section">

        <div class="admin-form-section-header">

            <div>

                <p class="section-label">
                    04 — PUBLISH SETTINGS
                </p>

                <h2>
                    Visibility
                </h2>

                <p>
                    Control how this news article appears on the website.
                </p>

            </div>

        </div>


        <div class="admin-form-options">


            {{-- FEATURED --}}

            <label class="admin-checkbox-card">

                <input
                    type="checkbox"
                    name="is_featured"
                    value="1"
                    {{ old('is_featured', $news->is_featured) ? 'checked' : '' }}>

                <div>

                    <strong>
                        Featured News
                    </strong>

                    <span>
                        Highlight this news article on the website.
                    </span>

                </div>

            </label>


            {{-- ACTIVE --}}

            <label class="admin-checkbox-card">

                <input
                    type="checkbox"
                    name="is_active"
                    value="1"
                    {{ old('is_active', $news->is_active) ? 'checked' : '' }}>

                <div>

                    <strong>
                        Active
                    </strong>

                    <span>
                        Make this news article visible on the public website.
                    </span>

                </div>

            </label>


        </div>

    </div>


    {{-- FORM ACTIONS --}}

    <div class="admin-form-actions">

        <a
            href="{{ route('admin.news.index') }}"
            class="admin-secondary-button">
            Cancel
        </a>


        <button
            type="submit"
            class="admin-primary-button">

            <span>
                ✓
            </span>

            Update News

        </button>

    </div>


</form>

@endsection


@push('scripts')

<script>
    const thumbnailInput = document.getElementById('thumbnail');

    const previewContainer = document.getElementById(
        'news-thumbnail-preview'
    );

    const previewImage = document.getElementById(
        'news-thumbnail-preview-image'
    );


    if (thumbnailInput) {

        thumbnailInput.addEventListener('change', function() {

            const file = this.files[0];


            if (!file) {

                previewContainer.style.display = 'none';

                previewImage.src = '';

                return;

            }


            const reader = new FileReader();


            reader.onload = function(event) {

                previewImage.src = event.target.result;

                previewContainer.style.display = 'block';

            };


            reader.readAsDataURL(file);

        });

    }
</script>

@endpush