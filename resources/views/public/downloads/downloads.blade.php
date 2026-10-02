@extends('layouts.app')

@section('title', 'Downloads — Xclip')

@section(
'meta_description',
'Akses company profile, brochure, portfolio, dokumen layanan, dan berbagai resource resmi dari Xclip.'
)

@section('og_title', 'Downloads — Xclip')

@section(
'og_description',
'Download company profile, brochure, portfolio, dan berbagai dokumen resmi Xclip.'
)

@section('content')

{{-- =========================================================
     DOWNLOADS HERO
========================================================= --}}

<section class="downloads-hero">

    <div class="container">

        <div class="downloads-hero-inner">

            <div class="downloads-hero-content">

                <p class="section-label">
                    DOWNLOADS
                </p>

                <h1>
                    Resources
                    <span>& Documents.</span>
                </h1>

                <p class="downloads-hero-description">
                    Akses berbagai dokumen resmi Xclip,
                    mulai dari company profile, brochure,
                    portfolio, dokumen layanan, hingga
                    berbagai resource pendukung lainnya.
                </p>

                <div class="downloads-hero-tags">

                    <span>
                        COMPANY PROFILE
                    </span>

                    <span>
                        BROCHURE
                    </span>

                    <span>
                        PORTFOLIO
                    </span>

                    <span>
                        DOCUMENTS
                    </span>

                </div>

            </div>


            <div class="downloads-hero-note">

                <span class="downloads-note-mark">
                    FILE
                </span>

                <strong>
                    Satu Tempat.
                </strong>

                <strong>
                    Berbagai Resource.
                </strong>

                <p>
                    Temukan dokumen yang Anda butuhkan
                    untuk mengenal Xclip lebih jauh.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     DOWNLOAD CENTER
========================================================= --}}

<section class="downloads-section">

    <div class="container">

        <div class="downloads-heading">

            <div>

                <p class="section-label">
                    AVAILABLE FILES
                </p>

                <h2>
                    Download Center
                </h2>

            </div>

            <p>
                Jelajahi dan akses berbagai dokumen
                yang disediakan oleh Xclip untuk
                kebutuhan informasi, bisnis, dan proyek.
            </p>

        </div>


        @if($downloads->count() > 0)

        <div class="downloads-grid">

            @foreach($downloads as $download)

            <article class="download-card">

                {{-- CARD HEADER --}}
                <div class="download-card-top">

                    <div class="download-file">

                        <div class="download-file-icon">
                            FILE
                        </div>

                    </div>


                    <span class="download-card-number">
                        {{ str_pad(
                            $loop->iteration,
                            2,
                            '0',
                            STR_PAD_LEFT
                        ) }}
                    </span>

                </div>


                {{-- CARD CONTENT --}}
                <div class="download-card-content">

                    <div class="download-meta">

                        <span>

                            @switch($download->category)

                            @case('company')
                            COMPANY
                            @break

                            @case('brochure')
                            BROCHURE
                            @break

                            @case('portfolio')
                            PORTFOLIO
                            @break

                            @case('services')
                            SERVICES
                            @break

                            @case('document')
                            DOCUMENT
                            @break

                            @case('other')
                            OTHER
                            @break

                            @default
                            {{ strtoupper($download->category) }}

                            @endswitch

                        </span>


                        @if($download->file_size)

                        @php

                        $size = $download->file_size;

                        if ($size >= 1073741824) {

                        $formattedSize =
                        number_format(
                        $size / 1073741824,
                        2
                        ) . ' GB';

                        } elseif ($size >= 1048576) {

                        $formattedSize =
                        number_format(
                        $size / 1048576,
                        2
                        ) . ' MB';

                        } elseif ($size >= 1024) {

                        $formattedSize =
                        number_format(
                        $size / 1024,
                        2
                        ) . ' KB';

                        } else {

                        $formattedSize =
                        $size . ' B';

                        }

                        @endphp

                        <span>
                            {{ $formattedSize }}
                        </span>

                        @endif

                    </div>


                    <h3>
                        {{ $download->title }}
                    </h3>


                    @if($download->description)

                    <p>
                        {{ $download->description }}
                    </p>

                    @else

                    <p>
                        Dokumen resmi Xclip yang dapat
                        digunakan sebagai referensi
                        untuk kebutuhan bisnis dan proyek.
                    </p>

                    @endif


                    @if($download->file)

                    <a
                        href="{{ route('downloads.download', $download) }}"
                        class="download-button">

                        <span>
                            Download File
                        </span>


                    </a>

                    @endif

                </div>

            </article>

            @endforeach

        </div>


        @else

        {{-- =================================================
             EMPTY STATE
        ================================================== --}}

        <div class="downloads-empty">

            <div class="downloads-empty-icon">
                FILE
            </div>

            <p class="section-label">
                NO DOCUMENTS
            </p>

            <h3>
                Documents Coming Soon.
            </h3>

            <p>
                Belum ada dokumen yang tersedia
                untuk diunduh saat ini.
                Silakan kembali lagi untuk melihat
                resource terbaru dari Xclip.
            </p>

        </div>

        @endif

    </div>

</section>

@endsection