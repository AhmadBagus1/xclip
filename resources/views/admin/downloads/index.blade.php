@extends('layouts.admin')

@section('title', 'Downloads - Xclip Admin')

@section('content')

<div class="admin-page-header">

    <div>
        <p class="section-label">XCLIP ADMIN PANEL</p>

        <h2>Downloads.</h2>

        <p>
            Manage company documents, brochures,
            portfolios, and other downloadable files.
        </p>
    </div>

    <div class="admin-page-header-action">

        <a
            href="{{ route('admin.downloads.create') }}"
            class="admin-button">
            + Add Download
        </a>

    </div>

</div>


{{-- SUCCESS MESSAGE --}}

@if(session('success'))

<div class="admin-alert admin-alert-success">
    {{ session('success') }}
</div>

@endif


{{-- DOWNLOADS TABLE --}}

<div class="admin-dashboard-section">

    <div class="admin-section-header">

        <div>
            <p class="section-label">DOCUMENTS</p>

            <h2>Available Downloads</h2>
        </div>

        <span class="admin-section-count">
            {{ $downloads->count() }} File
        </span>

    </div>


    @if($downloads->count() > 0)

    <div class="admin-table-wrapper">

        <table class="admin-table">

            <thead>

                <tr>

                    <th>#</th>

                    <th>Document</th>

                    <th>Category</th>

                    <th>File Size</th>

                    <th>Status</th>

                    <th>Date</th>

                    <th>Action</th>

                </tr>

            </thead>


            <tbody>

                @foreach($downloads as $download)

                <tr>

                    {{-- NUMBER --}}

                    <td>
                        {{ $loop->iteration }}
                    </td>


                    {{-- DOCUMENT --}}

                    <td>

                        <div class="admin-download-document">

                            <div class="admin-download-icon">
                                FILE
                            </div>

                            <div>

                                <strong>
                                    {{ $download->title }}
                                </strong>

                                @if($download->file_name)

                                <span>
                                    {{ $download->file_name }}
                                </span>

                                @endif

                            </div>

                        </div>

                    </td>


                    {{-- CATEGORY --}}

                    <td>

                        <span class="admin-category">

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

                        </span>

                    </td>


                    {{-- FILE SIZE --}}

                    <td>

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

                    </td>


                    {{-- STATUS --}}

                    <td>

                        @if($download->is_active)

                        <span class="admin-status admin-status-active">
                            ACTIVE
                        </span>

                        @else

                        <span class="admin-status admin-status-inactive">
                            INACTIVE
                        </span>

                        @endif

                    </td>


                    {{-- DATE --}}

                    <td>

                        {{ $download->created_at->format('d M Y') }}

                    </td>


                    {{-- ACTION --}}

                    <td>

                        <div class="admin-table-actions">

                            <a
                                href="{{ route('admin.downloads.show', $download) }}"
                                class="admin-action-link">
                                Lihat
                            </a>

                            <a
                                href="{{ route('admin.downloads.edit', $download) }}"
                                class="admin-action-link">
                                Edit
                            </a>

                            <form
                                method="POST"
                                action="{{ route('admin.downloads.destroy', $download) }}"
                                onsubmit="return confirm('Yakin ingin menghapus file ini?')">

                                @csrf

                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="admin-action-delete">
                                    Hapus
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

        <div class="admin-empty-number">
            00
        </div>

        <div>

            <p class="section-label">
                NO DOCUMENTS
            </p>

            <h3>
                No Downloads Yet.
            </h3>

            <p>
                There are currently no downloadable
                documents in the system.
                Start by adding your first file.
            </p>

            <a
                href="{{ route('admin.downloads.create') }}"
                class="admin-button">
                + Add First Download
            </a>

        </div>

    </div>

    @endif

</div>

@endsection