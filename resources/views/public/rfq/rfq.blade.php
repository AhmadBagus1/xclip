@extends('layouts.app')

@section('title', 'Request a Quote — Xclip')

@section(
'meta_description',
'Ajukan permintaan penawaran kepada Xclip untuk kebutuhan proyek, konstruksi, perdagangan, industrial, dan layanan profesional.'
)

@section('og_title', 'Request a Quote — Xclip')

@section(
'og_description',
'Kirim detail proyek dan kebutuhan bisnis Anda kepada Xclip melalui formulir Request a Quote.'
)

@section('content')


{{-- =====================================================
     RFQ HERO
===================================================== --}}

<section class="rfq-hero">

    <div class="container">

        <div class="rfq-hero-inner">

            <div class="rfq-hero-content">

                <p class="section-label">
                    REQUEST A QUOTE
                </p>

                <h1>
                    Let's Start
                    <span>Your Project.</span>
                </h1>

                <p class="rfq-hero-description">
                    Ceritakan kebutuhan proyek atau bisnis Anda
                    kepada Xclip. Tim kami akan mempelajari
                    kebutuhan tersebut dan menghubungi Anda
                    untuk pembahasan lebih lanjut.
                </p>

                <div class="rfq-hero-actions">

                    <a
                        href="#rfq-form"
                        class="doodle-button doodle-button-primary">
                        Mulai Pengajuan
                    </a>

                    <a
                        href="{{ route('contact') }}"
                        class="doodle-button">
                        Hubungi Xclip
                    </a>

                </div>

            </div>


            <div class="rfq-hero-note">

                <span class="rfq-note-mark">
                    ✦
                </span>

                <strong>
                    Satu Kebutuhan.
                </strong>

                <strong>
                    Satu Pembahasan.
                </strong>

                <p>
                    Jelaskan kebutuhan Anda dan biarkan
                    Xclip membantu menemukan bentuk
                    dukungan yang sesuai.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =====================================================
     ALERT
===================================================== --}}

@if(session('success'))

<section class="rfq-alert-section">

    <div class="container">

        <div class="rfq-success">

            <span class="rfq-alert-icon">
                ✓
            </span>

            <div>
                <strong>
                    Permintaan berhasil dikirim.
                </strong>

                <p>
                    Terima kasih. Tim Xclip akan meninjau
                    informasi yang Anda kirimkan.
                </p>
            </div>

        </div>

    </div>

</section>

@endif


@if($errors->any())

<section class="rfq-alert-section">

    <div class="container">

        <div class="rfq-error">

            <span class="rfq-alert-icon">
                !
            </span>

            <div>

                <strong>
                    Data belum dapat dikirim.
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

    </div>

</section>

@endif


{{-- =====================================================
     HOW IT WORKS
===================================================== --}}

<section class="rfq-intro">

    <div class="container">

        <div class="rfq-intro-grid">

            <div class="rfq-intro-heading">

                <p class="section-label">
                    HOW IT WORKS
                </p>

                <h2>
                    Tell Us
                    <span>What You Need.</span>
                </h2>

            </div>


            <div class="rfq-intro-content">

                <p class="rfq-intro-description">
                    Lengkapi informasi berikut sesuai dengan
                    kebutuhan proyek Anda. Semakin lengkap
                    informasi yang diberikan, semakin mudah
                    bagi tim Xclip memahami kebutuhan pekerjaan.
                </p>


                <div class="rfq-steps">

                    {{-- STEP 01 --}}

                    <div class="rfq-step">

                        <div class="rfq-step-number">
                            01
                        </div>

                        <div class="rfq-step-content">

                            <p class="rfq-step-label">
                                SUBMIT
                            </p>

                            <h3>
                                Kirim Informasi
                            </h3>

                            <p>
                                Sampaikan informasi perusahaan,
                                kontak, dan kebutuhan proyek
                                melalui formulir.
                            </p>

                        </div>

                    </div>


                    {{-- STEP 02 --}}

                    <div class="rfq-step">

                        <div class="rfq-step-number">
                            02
                        </div>

                        <div class="rfq-step-content">

                            <p class="rfq-step-label">
                                REVIEW
                            </p>

                            <h3>
                                Kami Pelajari
                            </h3>

                            <p>
                                Tim Xclip mempelajari kebutuhan,
                                ruang lingkup, dan informasi
                                proyek yang diberikan.
                            </p>

                        </div>

                    </div>


                    {{-- STEP 03 --}}

                    <div class="rfq-step">

                        <div class="rfq-step-number">
                            03
                        </div>

                        <div class="rfq-step-content">

                            <p class="rfq-step-label">
                                DISCUSS
                            </p>

                            <h3>
                                Bahas Kebutuhan
                            </h3>

                            <p>
                                Kami menghubungi Anda untuk
                                membahas kebutuhan dan detail
                                pekerjaan secara lebih lanjut.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =====================================================
     RFQ FORM
===================================================== --}}

<section
    class="rfq-form-section"
    id="rfq-form">

    <div class="container">

        <div class="rfq-form-wrapper">


            {{-- FORM HEADER --}}

            <div class="rfq-form-header">

                <div class="rfq-form-header-copy">

                    <p class="section-label">
                        PROJECT INFORMATION
                    </p>

                    <h2>
                        Ajukan
                        <span>Permintaan Penawaran.</span>
                    </h2>

                    <p>
                        Silakan lengkapi informasi di bawah ini
                        agar tim Xclip dapat memahami kebutuhan
                        proyek atau bisnis Anda.
                    </p>

                </div>

                <div class="rfq-form-badge">

                    <span>
                        RFQ
                    </span>

                    <small>
                        XCLIP
                    </small>

                </div>

            </div>


            {{-- =================================================
                 FORM
            ================================================== --}}

            <form
                action="{{ route('rfq.store') }}"
                method="POST"
                enctype="multipart/form-data"
                class="rfq-form">

                @csrf


                {{-- =================================================
                     SECTION 01
                ================================================== --}}

                <div class="rfq-form-section-title">

                    <div class="rfq-form-section-number">
                        01
                    </div>

                    <div>

                        <p>
                            COMPANY
                        </p>

                        <h3>
                            Informasi Perusahaan
                        </h3>

                    </div>

                </div>


                <div class="rfq-form-grid">


                    {{-- COMPANY NAME --}}

                    <div class="form-group">

                        <label for="company">
                            Nama Perusahaan
                        </label>

                        <input
                            type="text"
                            id="company"
                            name="company"
                            value="{{ old('company') }}"
                            placeholder="Nama perusahaan Anda">

                    </div>


                    {{-- COMPANY TYPE --}}

                    <div class="form-group">

                        <label for="company_type">
                            Jenis Perusahaan / Organisasi
                        </label>

                        <select
                            id="company_type"
                            name="company_type">

                            <option value="">
                                Pilih jenis perusahaan
                            </option>

                            <option
                                value="private"
                                {{ old('company_type') == 'private' ? 'selected' : '' }}>
                                Perusahaan Swasta
                            </option>

                            <option
                                value="government"
                                {{ old('company_type') == 'government' ? 'selected' : '' }}>
                                Pemerintah
                            </option>

                            <option
                                value="organization"
                                {{ old('company_type') == 'organization' ? 'selected' : '' }}>
                                Organisasi
                            </option>

                            <option
                                value="individual"
                                {{ old('company_type') == 'individual' ? 'selected' : '' }}>
                                Perorangan
                            </option>

                            <option
                                value="other"
                                {{ old('company_type') == 'other' ? 'selected' : '' }}>
                                Lainnya
                            </option>

                        </select>

                    </div>

                </div>


                {{-- =================================================
                     SECTION 02
                ================================================== --}}

                <div class="rfq-form-section-title">

                    <div class="rfq-form-section-number">
                        02
                    </div>

                    <div>

                        <p>
                            CONTACT
                        </p>

                        <h3>
                            Informasi Kontak
                        </h3>

                    </div>

                </div>


                <div class="rfq-form-grid">


                    {{-- CONTACT NAME --}}

                    <div class="form-group">

                        <label for="name">
                            Nama Kontak
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Nama lengkap Anda">

                    </div>


                    {{-- POSITION --}}

                    <div class="form-group">

                        <label for="position">
                            Jabatan
                        </label>

                        <input
                            type="text"
                            id="position"
                            name="position"
                            value="{{ old('position') }}"
                            placeholder="Jabatan Anda">

                    </div>


                    {{-- EMAIL --}}

                    <div class="form-group">

                        <label for="email">
                            Email
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="nama@email.com">

                    </div>


                    {{-- PHONE --}}

                    <div class="form-group">

                        <label for="phone">
                            Telepon / WhatsApp
                        </label>

                        <input
                            type="text"
                            id="phone"
                            name="phone"
                            value="{{ old('phone') }}"
                            placeholder="+62 xxx xxxx xxxx">

                    </div>

                </div>


                {{-- =================================================
                     SECTION 03
                ================================================== --}}

                <div class="rfq-form-section-title">

                    <div class="rfq-form-section-number">
                        03
                    </div>

                    <div>

                        <p>
                            PROJECT
                        </p>

                        <h3>
                            Informasi Proyek
                        </h3>

                    </div>

                </div>


                <div class="rfq-form-grid">


                    {{-- PROJECT NAME --}}

                    <div class="form-group">

                        <label for="project_name">
                            Nama Proyek
                        </label>

                        <input
                            type="text"
                            id="project_name"
                            name="project_name"
                            value="{{ old('project_name') }}"
                            placeholder="Nama proyek">

                    </div>


                    {{-- SERVICE --}}

                    <div class="form-group">

                        <label for="service">
                            Kategori Layanan
                        </label>

                        <select
                            id="service"
                            name="service">

                            <option value="">
                                Pilih layanan
                            </option>

                            <option
                                value="construction"
                                {{ old('service') == 'construction' ? 'selected' : '' }}>
                                Konstruksi
                            </option>

                            <option
                                value="trade"
                                {{ old('service') == 'trade' ? 'selected' : '' }}>
                                Perdagangan
                            </option>

                            <option
                                value="industrial"
                                {{ old('service') == 'industrial' ? 'selected' : '' }}>
                                Industri
                            </option>

                            <option
                                value="professional"
                                {{ old('service') == 'professional' ? 'selected' : '' }}>
                                Layanan Profesional
                            </option>

                            <option
                                value="other"
                                {{ old('service') == 'other' ? 'selected' : '' }}>
                                Lainnya
                            </option>

                        </select>

                    </div>


                    {{-- PROJECT LOCATION --}}

                    <div class="form-group">

                        <label for="project_location">
                            Lokasi Proyek
                        </label>

                        <input
                            type="text"
                            id="project_location"
                            name="project_location"
                            value="{{ old('project_location') }}"
                            placeholder="Kota / Provinsi / Negara">

                    </div>


                    {{-- PROJECT STATUS --}}

                    <div class="form-group">

                        <label for="project_status">
                            Status Proyek
                        </label>

                        <select
                            id="project_status"
                            name="project_status">

                            <option value="">
                                Pilih status proyek
                            </option>

                            <option
                                value="planning"
                                {{ old('project_status') == 'planning' ? 'selected' : '' }}>
                                Tahap Perencanaan
                            </option>

                            <option
                                value="tender"
                                {{ old('project_status') == 'tender' ? 'selected' : '' }}>
                                Tender / Pengadaan
                            </option>

                            <option
                                value="ready"
                                {{ old('project_status') == 'ready' ? 'selected' : '' }}>
                                Siap Dimulai
                            </option>

                            <option
                                value="ongoing"
                                {{ old('project_status') == 'ongoing' ? 'selected' : '' }}>
                                Sedang Berjalan
                            </option>

                        </select>

                    </div>


                    {{-- BUDGET --}}

                    <div class="form-group">

                        <label for="budget">
                            Perkiraan Anggaran
                        </label>

                        <select
                            id="budget"
                            name="budget">

                            <option value="">
                                Pilih kisaran anggaran
                            </option>

                            <option
                                value="under-100m"
                                {{ old('budget') == 'under-100m' ? 'selected' : '' }}>
                                Di bawah Rp 100 Juta
                            </option>

                            <option
                                value="100m-500m"
                                {{ old('budget') == '100m-500m' ? 'selected' : '' }}>
                                Rp 100 – 500 Juta
                            </option>

                            <option
                                value="500m-1b"
                                {{ old('budget') == '500m-1b' ? 'selected' : '' }}>
                                Rp 500 Juta – 1 Miliar
                            </option>

                            <option
                                value="1b-5b"
                                {{ old('budget') == '1b-5b' ? 'selected' : '' }}>
                                Rp 1 – 5 Miliar
                            </option>

                            <option
                                value="above-5b"
                                {{ old('budget') == 'above-5b' ? 'selected' : '' }}>
                                Di atas Rp 5 Miliar
                            </option>

                            <option
                                value="not-decided"
                                {{ old('budget') == 'not-decided' ? 'selected' : '' }}>
                                Belum Ditentukan
                            </option>

                        </select>

                    </div>


                    {{-- TIMELINE --}}

                    <div class="form-group">

                        <label for="timeline">
                            Perkiraan Waktu Pelaksanaan
                        </label>

                        <select
                            id="timeline"
                            name="timeline">

                            <option value="">
                                Pilih waktu pelaksanaan
                            </option>

                            <option
                                value="less-1-month"
                                {{ old('timeline') == 'less-1-month' ? 'selected' : '' }}>
                                Kurang dari 1 Bulan
                            </option>

                            <option
                                value="1-3-months"
                                {{ old('timeline') == '1-3-months' ? 'selected' : '' }}>
                                1 – 3 Bulan
                            </option>

                            <option
                                value="3-6-months"
                                {{ old('timeline') == '3-6-months' ? 'selected' : '' }}>
                                3 – 6 Bulan
                            </option>

                            <option
                                value="6-12-months"
                                {{ old('timeline') == '6-12-months' ? 'selected' : '' }}>
                                6 – 12 Bulan
                            </option>

                            <option
                                value="more-12-months"
                                {{ old('timeline') == 'more-12-months' ? 'selected' : '' }}>
                                Lebih dari 12 Bulan
                            </option>

                        </select>

                    </div>

                </div>


                {{-- =================================================
                     SECTION 04
                ================================================== --}}

                <div class="rfq-form-section-title">

                    <div class="rfq-form-section-number">
                        04
                    </div>

                    <div>

                        <p>
                            DETAILS
                        </p>

                        <h3>
                            Detail Proyek
                        </h3>

                    </div>

                </div>


                {{-- DESCRIPTION --}}

                <div class="form-group rfq-full-field">

                    <label for="description">
                        Deskripsi Proyek
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        rows="7"
                        placeholder="Jelaskan proyek, kebutuhan, ruang lingkup pekerjaan, spesifikasi, atau informasi lainnya...">{{ old('description') }}</textarea>

                </div>


                {{-- DOCUMENT --}}

                <div class="form-group rfq-upload-group">

                    <label for="document">
                        Dokumen Pendukung
                    </label>

                    <div class="rfq-file-wrapper">

                        <input
                            type="file"
                            id="document"
                            name="document">

                    </div>

                    <small>
                        Lampirkan brief proyek, spesifikasi,
                        gambar, proposal, atau dokumen pendukung
                        lainnya jika diperlukan.
                    </small>

                </div>


                {{-- AGREEMENT --}}

                <div class="rfq-agreement">

                    <label>

                        <input
                            type="checkbox"
                            name="agreement"
                            value="1"
                            {{ old('agreement') ? 'checked' : '' }}>

                        <span>
                            Saya memastikan bahwa informasi yang
                            diberikan sudah benar dan dapat digunakan
                            oleh Xclip untuk menghubungi saya
                            terkait permintaan ini.
                        </span>

                    </label>

                </div>


                {{-- SUBMIT --}}

                <div class="rfq-submit-area">

                    <p>
                        Pastikan informasi yang Anda berikan
                        sudah sesuai sebelum mengirimkan permintaan.
                    </p>

                    <button
                        type="submit"
                        class="rfq-submit">

                        <span>
                            Kirim Permintaan
                        </span>


                    </button>

                </div>


            </form>

        </div>

    </div>

</section>


{{-- =====================================================
     RFQ CTA
===================================================== --}}

<section class="rfq-cta">

    <div class="container">

        <div class="rfq-cta-box">

            <div>

                <p class="section-label">
                    NEED HELP?
                </p>

                <h2>
                    Not Sure
                    <span>Where to Start?</span>
                </h2>

                <p>
                    Jika Anda belum yakin informasi apa yang
                    perlu disiapkan, hubungi tim Xclip secara
                    langsung untuk membahas kebutuhan Anda.
                </p>

            </div>

            <a
                href="{{ route('contact') }}"
                class="rfq-cta-button">

                Contact Xclip

            </a>

        </div>

    </div>

</section>


@endsection