@extends('layouts.app')

@section('title', 'Downloads - Xclip')

@section('content')

<section class="downloads-hero">
    <div class="container">

        <div class="downloads-hero-box">

            <p class="section-label">
                DOWNLOADS
            </p>

            <h1>
                Resources <span>& Documents.</span>
            </h1>

            <p class="downloads-hero-description">
                Access company profiles, brochures,
                portfolios, service documents, and
                other useful resources from Xclip.
            </p>

        </div>

    </div>
</section>


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
                Browse and access documents
                provided by Xclip.
            </p>

        </div>


        @if($downloads->count() > 0)

        <div class="downloads-grid">

            @foreach($downloads as $download)

            <article class="download-card">

                <div class="download-card-top">

                    <div class="download-file-icon">
                        FILE
                    </div>

                    <span class="download-card-number">
                        {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                    </span>

                </div>


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

                        <span>

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

                    @endif


                    @if($download->file)

                    {{-- Download melalui controller --}}
                    <a
                        href="{{ route('downloads.download', $download) }}"
                        class="download-button">

                        Download →

                    </a>

                    @endif

                </div>

            </article>

            @endforeach

        </div>


        @else

        <div class="downloads-empty">

            <div class="downloads-empty-icon">
                FILE
            </div>

            <p class="section-label">
                NO DOCUMENTS
            </p>

            <h3>
                No Downloads Available Yet.
            </h3>

            <p>
                There are currently no documents
                available for download.
                Please check back soon.
            </p>

        </div>

        @endif

    </div>

</section>

@endsection