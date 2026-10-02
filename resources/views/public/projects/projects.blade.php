@extends('layouts.app')

@section('title', 'Projects — Xclip')

@section(
'meta_description',
'Jelajahi portofolio proyek Xclip dari berbagai sektor dan kebutuhan bisnis, mulai dari konstruksi, perdagangan, industrial, hingga layanan profesional.'
)

@section('og_title', 'Projects — Xclip')

@section(
'og_description',
'Jelajahi proyek dan pengalaman kerja Xclip dalam mendukung berbagai kebutuhan bisnis, proyek, dan layanan profesional.'
)

@section('content')


{{-- =========================================================
     PROJECT HERO
========================================================= --}}

<section class="projects-hero">

    <div class="container">

        <div class="projects-hero-inner">

            <div class="projects-hero-content">

                <p class="section-label">
                    OUR PROJECTS
                </p>

                <h1>
                    Solusi Nyata
                    <span>untuk Beragam Kebutuhan.</span>
                </h1>

                <p class="projects-hero-description">
                    Jelajahi proyek dan pekerjaan yang menunjukkan
                    bagaimana Xclip menghubungkan berbagai kapabilitas
                    untuk mendukung kebutuhan bisnis, proyek,
                    operasional, dan layanan profesional.
                </p>

                <div class="projects-hero-actions">

                    <a
                        href="#featured-projects"
                        class="doodle-button doodle-button-primary">
                        Lihat Proyek
                    </a>

                </div>

            </div>


            <div class="projects-hero-note">

                <span class="projects-note-mark">
                    ✦
                </span>

                <strong>
                    Dari Rencana.
                </strong>

                <strong>
                    Menjadi Pekerjaan Nyata.
                </strong>

                <p>
                    Setiap proyek menjadi bagian dari
                    pengalaman dan kapabilitas Xclip.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     PROJECT INTRO
========================================================= --}}

<section class="projects-intro">

    <div class="container">

        <div class="projects-intro-grid">

            <div class="projects-intro-label">

                <p class="section-label">
                    OUR WORK
                </p>

                <span class="projects-intro-mark">

                </span>

            </div>


            <div class="projects-intro-content">

                <h2>
                    Mengubah kebutuhan
                    menjadi solusi yang dapat dijalankan.
                </h2>

                <p>
                    Setiap proyek memiliki kebutuhan, ruang lingkup,
                    tantangan, dan tujuan yang berbeda. Xclip
                    menghadirkan pendekatan yang fleksibel dengan
                    menghubungkan kapabilitas dan sumber daya
                    yang relevan dengan kebutuhan pekerjaan.
                </p>

                <p>
                    Portofolio Xclip mencakup berbagai sektor,
                    termasuk konstruksi, perdagangan dan distribusi,
                    industrial, teknologi, serta layanan profesional.
                    Setiap pekerjaan menjadi bagian dari pengalaman
                    Xclip dalam memahami kebutuhan dan memberikan
                    dukungan yang tepat.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     FEATURED PROJECTS
========================================================= --}}

<section
    class="projects-list"
    id="featured-projects">

    <div class="container">

        <div class="projects-heading">

            <div>

                <p class="section-label">
                    FEATURED PROJECTS
                </p>

                <h2>
                    Proyek Pilihan
                </h2>

            </div>

            <p class="projects-heading-description">
                Beberapa proyek yang merepresentasikan
                pengalaman dan kapabilitas Xclip.
            </p>

        </div>


        {{-- =================================================
             PROJECT GRID
        ================================================= --}}

        @if($featuredProjects->count() > 0)

        <div class="projects-grid">

            @foreach($featuredProjects as $index => $project)

            <article class="project-card doodle-card">


                {{-- =================================================
                     PROJECT IMAGE
                ================================================= --}}

                <div class="project-image">

                    @if($project->thumbnail)

                    <img
                        src="{{ asset('storage/' . $project->thumbnail) }}"
                        alt="{{ $project->title }} — Xclip"
                        loading="lazy">

                    @else

                    <div class="project-image-placeholder">

                        <span>
                            PROJECT
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </span>

                    </div>

                    @endif

                </div>


                {{-- =================================================
                     PROJECT CONTENT
                ================================================= --}}

                <div class="project-content">

                    <p class="project-category">
                        {{ strtoupper($project->category) }}
                    </p>


                    <h3>
                        {{ $project->title }}
                    </h3>


                    @if($project->description)

                    <p>
                        {{ $project->description }}
                    </p>

                    @else

                    <p>
                        Xclip memberikan dukungan yang disesuaikan
                        dengan kebutuhan, ruang lingkup, dan tujuan
                        pekerjaan.
                    </p>

                    @endif


                    <div class="project-meta">

                        <span>
                            {{ ucfirst($project->category) }}
                        </span>


                        @if($project->location)

                        <span>
                            {{ $project->location }}
                        </span>

                        @elseif($project->year)

                        <span>
                            {{ $project->year }}
                        </span>

                        @else

                        <span>
                            Xclip Project
                        </span>

                        @endif

                    </div>


                    @if($project->slug)

                    <a
                        href="{{ route('projects.show', $project->slug) }}"
                        class="project-view-link">

                        Lihat Proyek

                    </a>

                    @endif

                </div>

            </article>

            @endforeach

        </div>

        @else

        {{-- =================================================
             EMPTY STATE
        ================================================= --}}

        <div class="projects-empty">

            <div class="projects-empty-icon">
                +
            </div>

            <h3>
                Proyek Segera Hadir
            </h3>

            <p>
                Portofolio proyek Xclip sedang dipersiapkan
                dan akan ditampilkan di halaman ini.
            </p>

        </div>

        @endif

    </div>

</section>


{{-- =========================================================
     ALL PROJECTS
========================================================= --}}

@if($projects->count() > 0)

<section class="projects-all">

    <div class="container">

        <div class="projects-heading">

            <div>

                <p class="section-label">
                    OUR PORTFOLIO
                </p>

                <h2>
                    Proyek Lainnya
                </h2>

            </div>

            <p class="projects-heading-description">
                Jelajahi proyek lain yang menjadi bagian
                dari portofolio Xclip.
            </p>

        </div>


        <div class="projects-grid">

            @foreach($projects as $index => $project)

            <article class="project-card doodle-card">


                {{-- =================================================
                     PROJECT IMAGE
                ================================================= --}}

                <div class="project-image">

                    @if($project->thumbnail)

                    <img
                        src="{{ asset('storage/' . $project->thumbnail) }}"
                        alt="{{ $project->title }} — Xclip"
                        loading="lazy">

                    @else

                    <div class="project-image-placeholder">

                        <span>
                            PROJECT
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </span>

                    </div>

                    @endif

                </div>


                {{-- =================================================
                     PROJECT CONTENT
                ================================================= --}}

                <div class="project-content">

                    <p class="project-category">
                        {{ strtoupper($project->category) }}
                    </p>


                    <h3>
                        {{ $project->title }}
                    </h3>


                    @if($project->description)

                    <p>
                        {{ $project->description }}
                    </p>

                    @else

                    <p>
                        Xclip memberikan dukungan yang disesuaikan
                        dengan kebutuhan, ruang lingkup, dan tujuan
                        pekerjaan.
                    </p>

                    @endif


                    <div class="project-meta">

                        <span>
                            {{ ucfirst($project->category) }}
                        </span>


                        @if($project->location)

                        <span>
                            {{ $project->location }}
                        </span>

                        @elseif($project->year)

                        <span>
                            {{ $project->year }}
                        </span>

                        @else

                        <span>
                            Xclip Project
                        </span>

                        @endif

                    </div>


                    <a
                        href="{{ route('projects.show', $project->slug) }}"
                        class="project-view-link">

                        Lihat Proyek

                    </a>

                </div>

            </article>

            @endforeach

        </div>

    </div>

</section>

@endif


{{-- =========================================================
     PROJECT APPROACH
========================================================= --}}

<section class="project-process">

    <div class="container">

        <div class="process-header">

            <p class="section-label">
                HOW WE WORK
            </p>

            <h2>
                Memahami.
                Menyesuaikan.
                <span>Melaksanakan.</span>
            </h2>

            <p class="process-description">
                Setiap proyek dimulai dari pemahaman yang jelas
                terhadap kebutuhan dan diikuti dengan pendekatan
                yang sesuai hingga pekerjaan dapat dilaksanakan.
            </p>

        </div>


        <div class="process-grid">


            {{-- 01 --}}

            <div class="process-card">

                <span class="process-number">
                    01
                </span>

                <div class="process-card-icon">
                    ?
                </div>

                <h3>
                    Memahami
                </h3>

                <p>
                    Memahami kebutuhan, tujuan, ruang lingkup,
                    prioritas, dan tantangan yang dihadapi
                    dalam pekerjaan.
                </p>

            </div>


            {{-- 02 --}}

            <div class="process-card">

                <span class="process-number">
                    02
                </span>

                <div class="process-card-icon">
                    +
                </div>

                <h3>
                    Menyesuaikan
                </h3>

                <p>
                    Menyesuaikan kapabilitas, sumber daya,
                    dan pendekatan dengan kebutuhan pekerjaan
                    yang akan dilaksanakan.
                </p>

            </div>


            {{-- 03 --}}

            <div class="process-card">

                <span class="process-number">
                    03
                </span>

                <div class="process-card-icon">
                    ✓
                </div>

                <h3>
                    Melaksanakan
                </h3>

                <p>
                    Memberikan dukungan secara terarah melalui
                    komunikasi yang jelas, koordinasi, dan
                    pelaksanaan yang profesional.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     CTA
========================================================= --}}

<section class="projects-cta">

    <div class="container">

        <div class="projects-cta-box">

            <p class="section-label">
                PUNYA PROYEK?
            </p>

            <h2>
                Mari Wujudkan
                <span>Kebutuhan Anda.</span>
            </h2>

            <p>
                Ceritakan kebutuhan proyek atau bisnis Anda
                kepada Xclip dan temukan bentuk dukungan
                yang sesuai dengan kebutuhan pekerjaan.
            </p>

            <a
                href="{{ route('rfq') }}"
                class="doodle-button doodle-button-primary">

                Ajukan Penawaran

            </a>

        </div>

    </div>

</section>


@endsection