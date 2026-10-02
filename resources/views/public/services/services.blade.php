@extends('layouts.app')

@section('title', 'Xclip - Layanan')

@section('content')


{{-- =========================================================
     SERVICES HERO
========================================================= --}}

<section class="services-hero">

    <div class="container">

        <div class="services-hero-inner">

            <div class="services-hero-content">

                <p class="services-eyebrow">
                    OUR SERVICES
                </p>

                <h1>
                    Solusi Lintas Sektor
                    <span>untuk Kebutuhan Bisnis dan Proyek</span>
                </h1>

                <p class="services-hero-description">
                    Xclip menghadirkan layanan lintas sektor yang dapat
                    disesuaikan dengan kebutuhan bisnis, proyek,
                    operasional, dan pekerjaan profesional dengan
                    pendekatan yang terintegrasi, praktis, dan
                    berorientasi pada hasil.
                </p>

            </div>


            <div class="services-hero-note">

                <span class="services-note-mark">
                    ✦
                </span>

                <strong>
                    Satu Mitra.
                </strong>

                <strong>
                    Beragam Kapabilitas.
                </strong>

                <p>
                    Menghubungkan berbagai kebutuhan
                    dengan solusi yang tepat.
                </p>

            </div>

        </div>

    </div>

</section>

{{-- =========================================================
     SERVICES INTRODUCTION
========================================================= --}}

<section class="services-intro">

    <div class="container">

        <div class="services-intro-grid">

            <div class="services-intro-label">

                <span>
                    WHAT WE DO
                </span>

            </div>


            <div class="services-intro-content">

                <h2>
                    Kapabilitas yang disesuaikan
                    dengan kebutuhan nyata.
                </h2>

                <p>
                    Setiap bisnis dan proyek memiliki kebutuhan,
                    tantangan, dan ruang lingkup yang berbeda.
                    Xclip menghubungkan berbagai kapabilitas
                    lintas sektor untuk memberikan dukungan
                    yang relevan sesuai kebutuhan setiap klien.
                </p>

                <p>
                    Mulai dari dukungan konstruksi, perdagangan
                    dan distribusi, kebutuhan industri, hingga
                    layanan profesional, setiap kapabilitas dapat
                    digunakan secara mandiri maupun dikombinasikan
                    untuk mendukung kebutuhan bisnis dan proyek
                    secara lebih menyeluruh.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     SERVICE CATEGORIES
========================================================= --}}

<section
    class="services-list"
    id="service-categories">

    <div class="container">

        <div class="services-section-heading">

            <div>

                <p class="services-eyebrow">
                    SERVICE CATEGORIES
                </p>

                <h2>
                    Layanan Kami
                </h2>

            </div>

            <p>
                Jelajahi kategori layanan yang tersedia
                melalui Xclip.
            </p>

        </div>


        @if($categories->isNotEmpty())

        <div class="services-category-grid">

            @foreach($categories as $category)

            <article class="service-category-card">

                {{-- =================================================
                     SERVICE IMAGE
                ================================================= --}}

                @if($category->image)

                <div class="service-category-image">

                    <img
                        src="{{ asset('storage/' . $category->image) }}"
                        alt="{{ $category->name }} — Xclip"
                        loading="lazy">

                </div>

                @else

                {{-- FALLBACK JIKA BELUM ADA GAMBAR --}}

                <div class="service-category-image service-category-image-empty">

                    <span>
                        {{ $category->icon ?: '+' }}
                    </span>

                </div>

                @endif


                {{-- =================================================
                     SERVICE CARD CONTENT
                ================================================= --}}

                <div class="service-category-card-inner">


                    {{-- CATEGORY ICON --}}

                    <div class="service-category-icon">

                        {{ $category->icon ?: '+' }}

                    </div>


                    {{-- CATEGORY CONTENT --}}

                    <div class="service-category-content">

                        <p class="service-category-label">
                            KATEGORI LAYANAN
                        </p>

                        <h3>
                            {{ $category->name }}
                        </h3>

                        @if($category->description)

                        <p class="service-category-description">
                            {{ $category->description }}
                        </p>

                        @else

                        <p class="service-category-description service-category-muted">
                            Informasi layanan sedang
                            dipersiapkan.
                        </p>

                        @endif

                    </div>


                </div>

            </article>

            @endforeach

        </div>

        @else

        {{-- =================================================
             EMPTY STATE
        ================================================= --}}

        <div class="services-empty-state">

            <div class="services-empty-icon">
                +
            </div>

            <h3>
                Layanan Segera Hadir
            </h3>

            <p>
                Informasi kategori layanan sedang dipersiapkan.
                Silakan kembali lagi untuk melihat pembaruan
                layanan Xclip.
            </p>

        </div>

        @endif

    </div>

</section>


{{-- =========================================================
     HOW WE SUPPORT
========================================================= --}}

<section class="services-approach">

    <div class="container">

        <div class="services-approach-header">

            <div class="services-approach-title">

                <p class="services-eyebrow">
                    HOW WE SUPPORT
                </p>

                <h2>
                    Dari kebutuhan
                    <span>menjadi solusi.</span>
                </h2>

            </div>

            <p class="services-approach-intro">
                Setiap pekerjaan dimulai dengan memahami kebutuhan
                dan berakhir pada solusi yang dapat dijalankan.
                Xclip menghubungkan proses, kapabilitas, dan sumber
                daya untuk mendukung kebutuhan klien.
            </p>

        </div>


        <div class="services-process">

            {{-- STEP 01 --}}

            <article class="services-process-card">

                <div class="services-process-top">

                    <span class="services-process-number">
                        01
                    </span>

                    <span class="services-process-icon">
                        ?
                    </span>

                </div>

                <div class="services-process-content">

                    <p>
                        UNDERSTAND
                    </p>

                    <h3>
                        Memahami
                    </h3>

                    <span class="services-process-line"></span>

                    <p class="services-process-description">
                        Memahami kebutuhan, tujuan, ruang lingkup,
                        dan hasil yang ingin dicapai.
                    </p>

                </div>

            </article>


            <div class="services-process-connector">

            </div>


            {{-- STEP 02 --}}

            <article class="services-process-card">

                <div class="services-process-top">

                    <span class="services-process-number">
                        02
                    </span>

                    <span class="services-process-icon">
                        ↔
                    </span>

                </div>

                <div class="services-process-content">

                    <p>
                        CONNECT
                    </p>

                    <h3>
                        Menghubungkan
                    </h3>

                    <span class="services-process-line"></span>

                    <p class="services-process-description">
                        Menyesuaikan kapabilitas dan sumber daya
                        dengan kebutuhan pekerjaan.
                    </p>

                </div>

            </article>


            <div class="services-process-connector">

            </div>


            {{-- STEP 03 --}}

            <article class="services-process-card">

                <div class="services-process-top">

                    <span class="services-process-number">
                        03
                    </span>

                    <span class="services-process-icon">
                        ✓
                    </span>

                </div>

                <div class="services-process-content">

                    <p>
                        EXECUTE
                    </p>

                    <h3>
                        Melaksanakan
                    </h3>

                    <span class="services-process-line"></span>

                    <p class="services-process-description">
                        Memberikan dukungan dengan komunikasi
                        yang jelas dan pelaksanaan yang terarah.
                    </p>

                </div>

            </article>

        </div>

    </div>

</section>


{{-- =========================================================
     WHY XCLIP
========================================================= --}}

<section class="services-benefits">

    <div class="container">

        <div class="services-benefits-header">

            <div>

                <p class="services-eyebrow">
                    WHY XCLIP
                </p>

                <h2>
                    Satu pendekatan,
                    <span>beragam kapabilitas.</span>
                </h2>

            </div>

            <p>
                Xclip menggabungkan berbagai kapabilitas untuk
                memberikan dukungan yang dapat disesuaikan
                dengan kebutuhan setiap pekerjaan.
            </p>

        </div>


        <div class="services-benefits-grid">


            {{-- 01 --}}

            <article class="services-benefit-card benefit-orange">

                <div class="services-benefit-card-top">

                    <span class="services-benefit-number">
                        01
                    </span>

                    <span class="services-benefit-icon">
                        +
                    </span>

                </div>

                <h3>
                    Lintas Sektor
                </h3>

                <p>
                    Kapabilitas yang mencakup berbagai bidang
                    untuk mendukung kebutuhan bisnis dan proyek.
                </p>

            </article>


            {{-- 02 --}}

            <article class="services-benefit-card benefit-blue">

                <div class="services-benefit-card-top">

                    <span class="services-benefit-number">
                        02
                    </span>

                    <span class="services-benefit-icon">
                        ↔
                    </span>

                </div>

                <h3>
                    Terintegrasi
                </h3>

                <p>
                    Berbagai layanan dapat saling terhubung
                    sesuai dengan kebutuhan pekerjaan.
                </p>

            </article>


            {{-- 03 --}}

            <article class="services-benefit-card benefit-green">

                <div class="services-benefit-card-top">

                    <span class="services-benefit-number">
                        03
                    </span>

                    <span class="services-benefit-icon">
                        ✓
                    </span>

                </div>

                <h3>
                    Praktis
                </h3>

                <p>
                    Berfokus pada solusi yang relevan,
                    jelas, dan dapat diterapkan.
                </p>

            </article>


            {{-- 04 --}}

            <article class="services-benefit-card benefit-yellow">

                <div class="services-benefit-card-top">

                    <span class="services-benefit-number">
                        04
                    </span>

                    <span class="services-benefit-icon">
                        ★
                    </span>

                </div>

                <h3>
                    Fleksibel
                </h3>

                <p>
                    Pendekatan dapat disesuaikan dengan
                    ruang lingkup dan kebutuhan klien.
                </p>

            </article>


        </div>

    </div>

</section>


{{-- =========================================================
     CTA
========================================================= --}}

<section class="services-cta">

    <div class="container">

        <div class="services-cta-inner">

            <div>

                <p class="services-eyebrow">
                    PUNYA RENCANA PROYEK?
                </p>

                <h2>
                    Mari membangun
                    solusi bersama.
                </h2>

                <p class="services-cta-description">
                    Ceritakan proyek, kebutuhan bisnis, atau
                    kebutuhan layanan Anda kepada kami dan
                    mari temukan bentuk kerja sama yang tepat.
                </p>

            </div>


            <div class="services-cta-actions">

                <a
                    href="{{ route('rfq') }}"
                    class="services-cta-button">

                    Ajukan Penawaran

                </a>

                <a
                    href="{{ route('contact') }}"
                    class="services-cta-link">

                    Hubungi Xclip

                </a>

            </div>

        </div>

    </div>

</section>


@endsection