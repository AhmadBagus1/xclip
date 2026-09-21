@extends('layouts.app')

@section('title', 'Request a Quote — Xclip')

@section('meta_description', 'Ajukan permintaan penawaran kepada Xclip untuk kebutuhan proyek, konstruksi, perdagangan, industrial, dan layanan profesional.')

@section('og_title', 'Request a Quote — Xclip')

@section('og_description', 'Kirim detail proyek dan kebutuhan bisnis Anda kepada Xclip melalui formulir Request a Quote.')

@section('content')

@if(session('success'))
<div class="rfq-success">
    {{ session('success') }}
</div>
@endif

@if($errors->any())
<div class="rfq-error">
    <strong>Please check the following:</strong>

    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


{{-- =====================================================
     RFQ HERO
===================================================== --}}

<section class="rfq-hero">

    <div class="container">

        <div class="rfq-hero-box">

            <p class="section-label">
                REQUEST A QUOTE
            </p>

            <h1>
                Let's Start
                <span>Your Project.</span>
            </h1>

            <p>
                Tell us about your project and business needs.
                Our team will review your requirements and
                get back to you.
            </p>

        </div>

    </div>

</section>


{{-- =====================================================
     RFQ INTRO
===================================================== --}}

<section class="rfq-intro">

    <div class="container">

        <div class="rfq-intro-grid">

            <div>

                <p class="section-label">
                    HOW IT WORKS
                </p>

                <h2>
                    Tell Us
                    What You Need.
                </h2>

            </div>

            <div>

                <p>
                    Complete the form below with as much
                    information as possible. This will help
                    the Xclip team understand your project
                    requirements.
                </p>

                <div class="rfq-steps">

                    <div class="rfq-step">

                        <span>01</span>

                        <div>
                            <h3>Submit</h3>
                            <p>
                                Send your project requirements
                                through the form.
                            </p>
                        </div>

                    </div>

                    <div class="rfq-step">

                        <span>02</span>

                        <div>
                            <h3>Review</h3>
                            <p>
                                Our team reviews your requirements
                                and project information.
                            </p>
                        </div>

                    </div>

                    <div class="rfq-step">

                        <span>03</span>

                        <div>
                            <h3>Discuss</h3>
                            <p>
                                We contact you to discuss the
                                project in more detail.
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

<section class="rfq-form-section">

    <div class="container">

        <div class="rfq-form-wrapper">

            {{-- FORM HEADER --}}

            <div class="rfq-form-header">

                <p class="section-label">
                    INFORMASI PROYEK
                </p>

                <h2>
                    Ajukan
                    Permintaan Penawaran.
                </h2>

                <p>
                    Silakan lengkapi informasi kontak dan
                    proyek Anda di bawah ini.
                </p>

            </div>


            <form
                action="{{ route('rfq.store') }}"
                method="POST"
                enctype="multipart/form-data"
                class="rfq-form">

                @csrf


                {{-- =================================================
                     COMPANY INFORMATION
                ================================================== --}}

                <div class="rfq-form-section-title">

                    <span>01</span>

                    <h3>
                        Informasi Perusahaan
                    </h3>

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
                     CONTACT INFORMATION
                ================================================== --}}

                <div class="rfq-form-section-title">

                    <span>02</span>

                    <h3>
                        Informasi Kontak
                    </h3>

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
                     PROJECT INFORMATION
                ================================================== --}}

                <div class="rfq-form-section-title">

                    <span>03</span>

                    <h3>
                        Informasi Proyek
                    </h3>

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


                    {{-- SERVICE CATEGORY --}}

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

                </div>


                {{-- =================================================
                     PROJECT LOCATION
                ================================================== --}}

                <div class="rfq-form-grid">

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

                </div>


                {{-- =================================================
                     BUDGET + TIMELINE
                ================================================== --}}

                <div class="rfq-form-grid">

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
                     PROJECT DESCRIPTION
                ================================================== --}}

                <div class="rfq-form-section-title">

                    <span>04</span>

                    <h3>
                        Detail Proyek
                    </h3>

                </div>


                <div class="form-group">

                    <label for="description">
                        Deskripsi Proyek
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        rows="7"
                        placeholder="Jelaskan proyek, kebutuhan, ruang lingkup pekerjaan, spesifikasi, atau informasi lainnya...">{{ old('description') }}</textarea>

                </div>


                {{-- =================================================
                     DOCUMENT
                ================================================== --}}

                <div class="form-group">

                    <label for="document">
                        Dokumen Pendukung
                    </label>

                    <input
                        type="file"
                        id="document"
                        name="document">

                    <small>
                        Anda dapat melampirkan brief proyek,
                        spesifikasi, gambar, atau dokumen
                        pendukung lainnya.
                    </small>

                </div>


                {{-- =================================================
                     AGREEMENT
                ================================================== --}}

                <div class="rfq-agreement">

                    <label>

                        <input
                            type="checkbox"
                            name="agreement"
                            value="1"
                            {{ old('agreement') ? 'checked' : '' }}>

                        <span>
                            Saya memastikan bahwa informasi yang
                            diberikan sudah benar dan dapat
                            digunakan oleh Xclip untuk menghubungi
                            saya terkait permintaan ini.
                        </span>

                    </label>

                </div>


                {{-- =================================================
                     SUBMIT
                ================================================== --}}

                <button
                    type="submit"
                    class="rfq-submit">

                    Kirim Permintaan

                </button>


            </form>

        </div>

    </div>

</section>


{{-- =====================================================
     RFQ CTA
===================================================== --}}

<section class="rfq-cta">

    <div class="container">

        <p class="section-label">
            NEED HELP?
        </p>

        <h2>
            Not Sure
            Where to Start?
        </h2>

        <p>
            If you're not sure which information to provide,
            you can contact our team directly.
        </p>

        <a href="{{ route('contact') }}">
            Contact Xclip
        </a>

    </div>

</section>

@endsection