@extends('layouts.app')

@php
$siteSetting = \App\Models\SiteSetting::first();

$siteName = $siteSetting?->site_name ?? 'Xclip';

$email = $siteSetting?->email;
$phone = $siteSetting?->phone;
$whatsapp = $siteSetting?->whatsapp;
$address = $siteSetting?->address;

$businessDays = $siteSetting?->business_days;
$businessHours = $siteSetting?->business_hours;

$googleMapsEmbed = $siteSetting?->google_maps_embed;
@endphp

@section('title', 'Contact — ' . $siteName)

@section(
'meta_description',
'Hubungi ' . $siteName . ' untuk pertanyaan, kebutuhan bisnis, informasi proyek, layanan, atau permintaan penawaran.'
)

@section('og_title', 'Contact — ' . $siteName)

@section(
'og_description',
'Hubungi tim ' . $siteName . ' untuk membahas kebutuhan bisnis, proyek, layanan, dan informasi lainnya.'
)

@section('content')


{{-- =========================================================
     CONTACT HERO
========================================================= --}}

<section class="contact-hero">

    <div class="container">

        <div class="contact-hero-inner">

            <div class="contact-hero-content">

                <p class="section-label">
                    CONTACT {{ strtoupper($siteName) }}
                </p>

                <h1>
                    Let's
                    <span>Talk.</span>
                </h1>

                <p class="contact-hero-description">
                    Punya pertanyaan, kebutuhan bisnis,
                    proyek, layanan, atau ingin mengenal
                    {{ $siteName }} lebih jauh?
                    Hubungi tim kami.
                </p>

                <div class="contact-hero-tags">

                    <span>
                        BUSINESS
                    </span>

                    <span>
                        PROJECT
                    </span>

                    <span>
                        SERVICES
                    </span>

                    <span>
                        INQUIRY
                    </span>

                </div>

            </div>


            <div class="contact-hero-note">

                <span class="contact-note-mark">
                    ✦
                </span>

                <strong>
                    Punya Pertanyaan?
                </strong>

                <strong>
                    Mari Bicara.
                </strong>

                <p>
                    Kami siap mendengar kebutuhan
                    dan membantu menemukan bentuk
                    dukungan yang sesuai.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     CONTACT MAIN
========================================================= --}}

<section class="contact-main">

    <div class="container">

        <div class="contact-layout">


            {{-- =================================================
                 CONTACT INFORMATION
            ================================================== --}}

            <div class="contact-information">

                <p class="section-label">
                    GET IN TOUCH
                </p>

                <h2>
                    Contact
                    <span>{{ $siteName }}</span>
                </h2>

                <p class="contact-intro">
                    Kami siap mendengar pertanyaan,
                    kebutuhan proyek, maupun kebutuhan
                    bisnis Anda. Hubungi kami melalui
                    informasi berikut atau kirimkan pesan
                    secara langsung.
                </p>


                {{-- EMAIL --}}
                <div class="contact-item">

                    <div class="contact-item-number">
                        01
                    </div>

                    <div class="contact-item-content">

                        <h3>
                            Email
                        </h3>

                        <p>
                            {{ $email ?? 'Email belum tersedia' }}
                        </p>

                    </div>

                </div>


                {{-- PHONE --}}
                <div class="contact-item">

                    <div class="contact-item-number">
                        02
                    </div>

                    <div class="contact-item-content">

                        <h3>
                            Phone
                        </h3>

                        <p>
                            {{ $phone ?? 'Phone belum tersedia' }}
                        </p>

                    </div>

                </div>


                {{-- WHATSAPP --}}
                <div class="contact-item">

                    <div class="contact-item-number">
                        03
                    </div>

                    <div class="contact-item-content">

                        <h3>
                            WhatsApp
                        </h3>

                        <p>
                            {{ $whatsapp ?? 'WhatsApp belum tersedia' }}
                        </p>

                    </div>

                </div>


                {{-- ADDRESS --}}
                <div class="contact-item">

                    <div class="contact-item-number">
                        04
                    </div>

                    <div class="contact-item-content">

                        <h3>
                            Address
                        </h3>

                        <p>
                            {{ $address ?? $siteName . ' Office' }}
                        </p>

                    </div>

                </div>


                {{-- BUSINESS HOURS --}}
                <div class="contact-item">

                    <div class="contact-item-number">
                        05
                    </div>

                    <div class="contact-item-content">

                        <h3>
                            Business Hours
                        </h3>

                        <p>
                            {{ $businessDays ?? 'Business days belum tersedia' }}
                        </p>

                        <p>
                            {{ $businessHours ?? 'Business hours belum tersedia' }}
                        </p>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 CONTACT FORM
            ================================================== --}}

            <div class="contact-form-wrapper">

                <div class="contact-form-header">

                    <p class="section-label">
                        SEND A MESSAGE
                    </p>

                    <h2>
                        Tell Us
                        <span>About It.</span>
                    </h2>

                    <p>
                        Ceritakan kebutuhan atau pertanyaan
                        Anda kepada tim {{ $siteName }}.
                    </p>

                </div>


                {{-- SUCCESS MESSAGE --}}
                @if(session('success'))

                <div class="contact-success-message">

                    <strong>
                        Message Sent.
                    </strong>

                    <span>
                        {{ session('success') }}
                    </span>

                </div>

                @endif


                {{-- ERROR MESSAGE --}}
                @if($errors->any())

                <div class="contact-error-message">

                    <strong>
                        Please Check Your Input.
                    </strong>

                    @foreach($errors->all() as $error)

                    <p>
                        {{ $error }}
                    </p>

                    @endforeach

                </div>

                @endif


                <form
                    action="{{ route('contact.store') }}"
                    method="POST"
                    class="contact-form">

                    @csrf


                    {{-- NAME --}}
                    <div class="form-group">

                        <label for="name">
                            Name
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Your name"
                            required>

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
                            placeholder="your@email.com"
                            required>

                    </div>


                    {{-- PHONE --}}
                    <div class="form-group">

                        <label for="phone">
                            Phone
                        </label>

                        <input
                            type="text"
                            id="phone"
                            name="phone"
                            value="{{ old('phone') }}"
                            placeholder="+62 xxx xxxx xxxx">

                    </div>


                    {{-- SUBJECT --}}
                    <div class="form-group">

                        <label for="subject">
                            Subject
                        </label>

                        <input
                            type="text"
                            id="subject"
                            name="subject"
                            value="{{ old('subject') }}"
                            placeholder="What can we help you with?"
                            required>

                    </div>


                    {{-- MESSAGE --}}
                    <div class="form-group">

                        <label for="message">
                            Message
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            rows="6"
                            placeholder="Tell us about your project or inquiry..."
                            required>{{ old('message') }}</textarea>

                    </div>


                    {{-- SUBMIT --}}
                    <button
                        type="submit"
                        class="contact-submit">

                        <span>
                            Send Message
                        </span>

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>


{{-- =====================================================
     MAP / LOCATION
===================================================== --}}

<section class="contact-location">

    <div class="container">

        <div class="contact-location-box">

            <div class="contact-location-content">

                <p class="section-label">
                    OUR LOCATION
                </p>

                <h2>
                    Find
                    {{ $siteName }}.
                </h2>

                <p>
                    Visit our office or contact our team
                    to arrange a meeting.
                </p>

            </div>

            @if($googleMapsEmbed)

            <div class="map-embed">

                <iframe
                    src="{{ $googleMapsEmbed }}"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>

            </div>

            @else

            <div class="map-placeholder">

                <span>MAP</span>

            </div>

            @endif

        </div>

    </div>

</section>


{{-- =========================================================
     CONTACT CTA
========================================================= --}}

<section class="contact-cta">

    <div class="container">

        <div class="contact-cta-box">

            <div>

                <p class="section-label">
                    HAVE A PROJECT IN MIND?
                </p>

                <h2>
                    Let's Build
                    <span>Something Together.</span>
                </h2>

                <p>
                    Jika Anda sudah memiliki kebutuhan
                    proyek atau bisnis, ceritakan kepada
                    Xclip melalui Request for Quote.
                </p>

            </div>

            <a
                href="{{ route('rfq') }}"
                class="contact-cta-button">

                <span>
                    Request a Quote
                </span>

            </a>

        </div>

    </div>

</section>


@endsection