@extends('layouts.admin')

@section('title', 'Detail Download - Xclip Admin')

@section('content')

<div class="admin-page-header">

    <div>

        <p class="section-label">
            XCLIP ADMIN PANEL
        </p>

        <h2>
            Download Detail.
        </h2>

        <p>
            View information and manage this downloadable
            document.
        </p>

    </div>

</div>


<div class="admin-download-show-layout">


    {{-- =====================================================
         MAIN DOCUMENT CARD
    ====================================================== --}}

    <div class="admin-download-show-card">


        {{-- DOCUMENT HEADER --}}

        <div class="admin-download-show-header">

            <div class="admin-download-show-file-icon">
                FILE
            </div>

            <div>

                <p class="section-label">
                    DOCUMENT
                </p>

                <h1>
                    {{ $download->title }}
                </h1>

            </div>

        </div>


        {{-- DESCRIPTION --}}

        @if($download->description)

        <div class="admin-download-show-description">

            <p class="section-label">
                DESCRIPTION
            </p>

            <p>
                {{ $download->description }}
            </p>

        </div>

        @endif


        {{-- INFORMATION --}}

        <div class="admin-download-show-info">

            <div class="admin-download-show-info-item">

                <span>
                    CATEGORY
                </span>

                <strong>

                    @switch($download->category)

                    @case('company')
                    Company
                    @break

                    @case('brochure')
                    Brochure
                    @break

                    @case('portfolio')
                    Portfolio
                    @break

                    @case('services')
                    Services
                    @break

                    @case('document')
                    Document
                    @break

                    @case('other')
                    Other
                    @break

                    @default
                    {{ ucfirst($download->category) }}

                    @endswitch

                </strong>

            </div>


            <div class="admin-download-show-info-item">

                <span>
                    FILE NAME
                </span>

                <strong class="admin-download-show-file-name">
                    {{ $download->file_name ?? '—' }}
                </strong>

            </div>


            <div class="admin-download-show-info-item">

                <span>
                    FILE SIZE
                </span>

                <strong>

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

                    —

                    @endif

                </strong>

            </div>


            <div class="admin-download-show-info-item">

                <span>
                    STATUS
                </span>

                <strong>

                    @if($download->is_active)

                    <span class="admin-status admin-status-active">
                        ACTIVE
                    </span>

                    @else

                    <span class="admin-status admin-status-inactive">
                        INACTIVE
                    </span>

                    @endif

                </strong>

            </div>


            <div class="admin-download-show-info-item">

                <span>
                    ADDED
                </span>

                <strong>
                    {{ $download->created_at->format('d M Y, H:i') }}
                </strong>

            </div>


            <div class="admin-download-show-info-item">

                <span>
                    LAST UPDATED
                </span>

                <strong>
                    {{ $download->updated_at->format('d M Y, H:i') }}
                </strong>

            </div>

        </div>


        {{-- ACTIONS --}}

        <div class="admin-download-show-actions">

            @if($download->file)

            <a
                href="{{ asset('storage/' . $download->file) }}"
                target="_blank"
                class="admin-download-show-button admin-download-show-button-primary">

                Open File

            </a>

            @endif


            <a
                href="{{ route('admin.downloads.edit', $download) }}"
                class="admin-download-show-button admin-download-show-button-secondary">

                Edit

            </a>


            <a
                href="{{ route('admin.downloads.index') }}"
                class="admin-download-show-button admin-download-show-button-secondary">

                Back

            </a>

        </div>

    </div>


    {{-- =====================================================
         SIDE INFORMATION
    ====================================================== --}}

    <aside class="admin-download-show-side">


        {{-- FILE NOTE --}}

        <div class="admin-download-show-note">

            <span class="admin-download-show-note-number">
                01
            </span>

            <p class="section-label">
                FILE
            </p>

            <h3>
                Downloadable Document
            </h3>

            <p>
                This file is stored in the Xclip public
                storage and can be accessed from the
                website when its status is active.
            </p>

        </div>


        {{-- VISIBILITY NOTE --}}

        <div class="admin-download-show-note admin-download-show-note-yellow">

            <span class="admin-download-show-note-number">
                02
            </span>

            <p class="section-label">
                VISIBILITY
            </p>

            @if($download->is_active)

            <h3>
                Publicly Visible
            </h3>

            <p>
                This document is currently active
                and can appear on the public
                Downloads page.
            </p>

            @else

            <h3>
                Hidden
            </h3>

            <p>
                This document is currently inactive
                and should not appear on the public
                Downloads page.
            </p>

            @endif

        </div>


        {{-- DANGER ZONE --}}

        <div class="admin-download-show-danger">

            <p class="section-label">
                MANAGEMENT
            </p>

            <h3>
                Remove Document
            </h3>

            <p>
                Deleting this document will also remove
                its stored file from the server.
            </p>

            <form
                method="POST"
                action="{{ route('admin.downloads.destroy', $download) }}"
                onsubmit="return confirm('Yakin ingin menghapus dokumen ini? File yang tersimpan juga akan dihapus.')">

                @csrf

                @method('DELETE')

                <button
                    type="submit"
                    class="admin-download-show-delete">

                    Delete Document

                </button>

            </form>

        </div>

    </aside>

</div>

@endsection