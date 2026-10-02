@extends('layouts.app')

@section('title', 'About Xclip — Company Profile')

@section('meta_description', 'Mengenal PT Xclip Subcon Asia, perusahaan multi-layanan dengan 98 bidang usaha dalam 6 kategori utama untuk mendukung kebutuhan bisnis, proyek, dan operasional.')

@section('og_title', 'About Xclip — Company Profile')

@section('og_description', 'Mengenal PT Xclip Subcon Asia, kapabilitas lintas sektor, legal credentials, dan pendekatan bisnis terintegrasi.')

@section('content')


{{-- =========================================================
     ABOUT HERO
========================================================= --}}

<section class="about-hero">

    <div class="container">

        <div class="about-hero-grid">

            <div class="about-hero-content">

                <p class="about-label">
                    ABOUT XCLIP
                </p>

                <h1>
                    One Company.
                    <span>Multiple Capabilities.</span>
                </h1>

                <p class="about-hero-description">
                    PT Xclip Subcon Asia adalah perusahaan multi-layanan
                    yang menghubungkan berbagai kapabilitas untuk mendukung
                    kebutuhan bisnis, proyek, dan operasional lintas sektor.
                </p>



                <div class="about-hero-meta">

                    <div>
                        <strong>2023</strong>
                        <span>Established</span>
                    </div>

                    <div>
                        <strong>Kebumen</strong>
                        <span>Central Java</span>
                    </div>

                    <div>
                        <strong>6</strong>
                        <span>Business Categories</span>
                    </div>

                </div>

            </div>


            <div class="about-hero-visual">

                <div class="about-hero-image">

                    <img
                        src="{{ asset('images/gedung.jpg') }}"
                        alt="Xclip business and project environment">

                </div>

                <div class="about-hero-note">

                    <span class="note-number">
                        98
                    </span>

                    <span class="note-text">
                        Fields of Business
                    </span>

                    <small>
                        across 6 major categories
                    </small>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     COMPANY PROFILE
========================================================= --}}

<section class="about-profile">

    <div class="container">

        <div class="about-profile-grid">

            <div class="about-profile-content">

                <p class="about-label">
                    COMPANY PROFILE
                </p>

                <h2>
                    Who We Are
                </h2>

                <p>
                    PT Xclip Subcon Asia hadir sebagai perusahaan dengan
                    kapabilitas lintas sektor yang dirancang untuk mendukung
                    berbagai kebutuhan usaha dan proyek.
                </p>

                <p>
                    Dengan portofolio yang mencakup konstruksi, industri,
                    perdagangan, teknologi, layanan profesional, serta
                    dukungan operasional, Xclip menghubungkan berbagai
                    kebutuhan dalam satu pendekatan yang terintegrasi.
                </p>

                <p>
                    Pendekatan tersebut memungkinkan Xclip untuk bekerja
                    secara fleksibel sebagai mitra dalam pengadaan,
                    pelaksanaan proyek, layanan profesional, maupun
                    kebutuhan operasional.
                </p>

                <div class="about-capabilities">

                    <span>Construction</span>
                    <span>Industrial</span>
                    <span>Trade</span>
                    <span>Technology</span>
                    <span>Professional Services</span>
                    <span>Operational Support</span>

                </div>

            </div>


            <div class="about-profile-side">

                <div class="doodle-card profile-card profile-card-orange">

                    <span class="profile-card-number">
                        01
                    </span>

                    <div class="card-icon card-orange">
                        ✦
                    </div>

                    <h3>
                        Multi-Sector
                    </h3>

                    <p>
                        Berbagai kategori usaha memungkinkan Xclip
                        mendukung kebutuhan dari berbagai sektor.
                    </p>

                </div>


                <div class="doodle-card profile-card profile-card-green">

                    <span class="profile-card-number">
                        02
                    </span>

                    <div class="card-icon card-green">
                        ✓
                    </div>

                    <h3>
                        Integrated
                    </h3>

                    <p>
                        Berbagai kapabilitas dihubungkan untuk
                        menciptakan solusi yang lebih terkoordinasi.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     COMPANY & LEGAL
========================================================= --}}

<section class="about-legal">

    <div class="container">

        <div class="about-section-heading">

            <p class="about-label">
                COMPANY & LEGAL
            </p>

            <h2>
                Built on a Clear
                Business Foundation
            </h2>

            <p>
                Informasi identitas dan legalitas perusahaan sebagai
                bagian dari kredibilitas Xclip dalam membangun kerja sama.
            </p>

        </div>


        <div class="legal-layout">


            {{-- COMPANY IDENTITY --}}

            <div class="doodle-card legal-card">

                <div class="legal-card-title">

                    <span class="card-icon card-blue">
                        ◆
                    </span>

                    <div>

                        <span>
                            COMPANY IDENTITY
                        </span>

                        <h3>
                            Xclip Subcon Asia
                        </h3>

                    </div>

                </div>


                <div class="legal-list">

                    <div class="legal-item">

                        <span>
                            Company
                        </span>

                        <strong>
                            PT XCLIP SUBCON ASIA
                        </strong>

                    </div>

                    <div class="legal-item">

                        <span>
                            NIB
                        </span>

                        <strong>
                            1610230031879
                        </strong>

                    </div>

                    <div class="legal-item">

                        <span>
                            NPWP
                        </span>

                        <strong>
                            0399985670523000
                        </strong>

                    </div>

                    <div class="legal-item">

                        <span>
                            Investment
                        </span>

                        <strong>
                            PMDN
                        </strong>

                    </div>

                    <div class="legal-item">

                        <span>
                            Business Scale
                        </span>

                        <strong>
                            Usaha Kecil
                        </strong>

                    </div>

                </div>

            </div>


            {{-- COMMITMENT --}}

            <div class="doodle-card legal-card legal-card-yellow">

                <div class="legal-card-title">

                    <span class="card-icon card-yellow">
                        ★
                    </span>

                    <div>

                        <span>
                            OUR COMMITMENT
                        </span>

                        <h3>
                            How We Create Value
                        </h3>

                    </div>

                </div>

                <p>
                    Xclip berkomitmen menghadirkan solusi yang
                    <strong>inovatif</strong>,
                    <strong>berkualitas</strong>, dan
                    <strong>berkelanjutan</strong>
                    untuk mendukung kebutuhan bisnis dan proyek.
                </p>

                <div class="commitment-tags">

                    <span>
                        Innovative
                    </span>

                    <span>
                        Quality
                    </span>

                    <span>
                        Sustainable
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     BUSINESS PORTFOLIO
========================================================= --}}

<section class="about-business">

    <div class="container">

        <div class="about-section-heading centered">

            <p class="about-label">
                BUSINESS PORTFOLIO
            </p>

            <h2>
                98 Fields.
                <span>6 Categories.</span>
            </h2>

            <p>
                Portofolio Xclip mencakup 98 bidang usaha yang
                dikelompokkan ke dalam enam kategori utama,
                membentuk kapabilitas lintas sektor.
            </p>

        </div>


        <div class="business-grid">


            {{-- 01 --}}

            <article class="business-card business-orange">

                <span class="business-number">
                    01
                </span>

                <div class="business-icon">
                    ◇
                </div>

                <h3>
                    Technology, Media
                    & Publishing
                </h3>

                <strong>
                    11 bidang usaha
                </strong>

                <p>
                    Software, media imersif, film dan video,
                    cyber, hosting, publishing, serta berbagai
                    layanan teknologi digital.
                </p>

            </article>


            {{-- 02 --}}

            <article class="business-card business-blue">

                <span class="business-number">
                    02
                </span>

                <div class="business-icon">
                    ⚙
                </div>

                <h3>
                    Industry, Printing
                    & Manufacturing
                </h3>

                <strong>
                    5 bidang usaha
                </strong>

                <p>
                    Percetakan, material berbasis semen,
                    produk logam struktural, serta berbagai
                    kebutuhan manufaktur.
                </p>

            </article>


            {{-- 03 --}}

            <article class="business-card business-green business-featured">

                <span class="business-number">
                    03
                </span>

                <div class="business-icon">
                    △
                </div>

                <h3>
                    Construction,
                    Infrastructure & Property
                </h3>

                <strong>
                    28 bidang usaha
                </strong>

                <p>
                    Konstruksi gedung, infrastruktur, utilitas,
                    instalasi, finishing, hingga pengembangan
                    properti.
                </p>

                <span class="business-note">
                    CORE CAPABILITY
                </span>

            </article>


            {{-- 04 --}}

            <article class="business-card business-yellow">

                <span class="business-number">
                    04
                </span>

                <div class="business-icon">
                    □
                </div>

                <h3>
                    Trade, Distribution
                    & Retail
                </h3>

                <strong>
                    24 bidang usaha
                </strong>

                <p>
                    Perdagangan umum, teknologi, material proyek,
                    furniture, stationery, serta berbagai produk
                    kebutuhan bisnis.
                </p>

            </article>


            {{-- 05 --}}

            <article class="business-card business-blue">

                <span class="business-number">
                    05
                </span>

                <div class="business-icon">
                    ✎
                </div>

                <h3>
                    Consulting, Design
                    & Professional Services
                </h3>

                <strong>
                    12 bidang usaha
                </strong>

                <p>
                    Konsultasi, arsitektur, engineering,
                    sertifikasi, research, desain, dan
                    layanan profesional lainnya.
                </p>

            </article>


            {{-- 06 --}}

            <article class="business-card business-green">

                <span class="business-number">
                    06
                </span>

                <div class="business-icon">
                    ♢
                </div>

                <h3>
                    Operations, Environment,
                    Rental, Events & People
                </h3>

                <strong>
                    18 bidang usaha
                </strong>

                <p>
                    Dukungan lingkungan, rental, staffing,
                    cleaning, landscape, hospitality,
                    event, training, dan operational support.
                </p>

            </article>

        </div>

    </div>

</section>


{{-- =========================================================
     BUSINESS APPROACH
========================================================= --}}

<section class="about-approach">

    <div class="container">

        <div class="approach-grid">

            <div class="approach-heading">

                <p class="about-label">
                    OUR APPROACH
                </p>

                <h2>
                    From Need
                    <span>to Solution.</span>
                </h2>

                <p class="approach-intro">
                    Xclip menghubungkan kebutuhan klien dengan
                    kapabilitas yang tepat untuk menghasilkan
                    solusi yang dapat dijalankan.
                </p>

            </div>


            <div class="approach-flow">


                <div class="approach-step">

                    <span>
                        01
                    </span>

                    <h3>
                        Understand
                    </h3>

                    <p>
                        Memahami kebutuhan, tujuan,
                        dan konteks proyek.
                    </p>

                </div>


                <div class="approach-step">

                    <span>
                        02
                    </span>

                    <h3>
                        Plan
                    </h3>

                    <p>
                        Menentukan pendekatan,
                        kebutuhan, dan sumber daya.
                    </p>

                </div>


                <div class="approach-step">

                    <span>
                        03
                    </span>

                    <h3>
                        Execute
                    </h3>

                    <p>
                        Menghubungkan kapabilitas
                        dengan pelaksanaan pekerjaan.
                    </p>

                </div>


                <div class="approach-step">

                    <span>
                        04
                    </span>

                    <h3>
                        Support
                    </h3>

                    <p>
                        Memberikan dukungan hingga
                        kebutuhan operasional terpenuhi.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     CTA
========================================================= --}}

<section class="about-cta">

    <div class="container">

        <div class="about-cta-box">

            <div>

                <p class="about-label">
                    WORK WITH XCLIP
                </p>

                <h2>
                    Let's Build
                    Something Together.
                </h2>

                <p>
                    Diskusikan kebutuhan proyek, pengadaan,
                    layanan profesional, maupun dukungan
                    operasional bersama Xclip.
                </p>

            </div>


            <div class="about-cta-actions">

                <a href="{{ route('rfq') }}"
                    class="doodle-button doodle-button-primary">
                    Request a Quote
                </a>

                <a href="{{ route('contact') }}"
                    class="doodle-button">
                    Contact Us
                </a>

            </div>

        </div>

    </div>

</section>

@endsection