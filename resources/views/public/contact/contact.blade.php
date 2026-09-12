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

@section('title', 'Contact - ' . $siteName)

@section('content')

{{-- =====================================================
     CONTACT HERO
===================================================== --}}

<section class="contact-hero">

    <div class="container">

        <div class="contact-hero-box">

            <p class="section-label">
                CONTACT {{ strtoupper($siteName) }}
            </p>

            <h1>
                Let's
                <span>Talk.</span>
            </h1>

            <p>
                Have a question, business inquiry, or need
                more information about {{ $siteName }}?
                Get in touch with our team.
            </p>

        </div>

    </div>

</section>


{{-- =====================================================
     CONTACT INFORMATION + FORM
===================================================== --}}

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
                    {{ $siteName }}
                </h2>

                <p class="contact-intro">
                    We're ready to hear from you. Reach out
                    to discuss your project, business needs,
                    or any questions you may have.
                </p>


                {{-- EMAIL --}}
                <div class="contact-item">

                    <div class="contact-item-number">
                        01
                    </div>

                    <div>

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

                    <div>

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

                    <div>

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

                    <div>

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

                    <div>

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
                        About It.
                    </h2>

                </div>


                @if(session('success'))

                <div class="contact-success-message">
                    {{ session('success') }}
                </div>

                @endif


                @if($errors->any())

                <div class="contact-error-message">

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

                        Send Message →

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


            {{-- =================================================
                 GOOGLE MAP
            ================================================== --}}

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

                <div class="map-pin">
                    X
                </div>

            </div>

            @endif

        </div>

    </div>

    </div>

</section>


{{-- =====================================================
     CONTACT CTA
===================================================== --}}

<section class="contact-cta">

    <div class="container">

        <p class="section-label">
            HAVE A PROJECT IN MIND?
        </p>

        <h2>
            Let's Build
            Something Together.
        </h2>

        <p>
            If you already have a project or business
            requirement in mind, send us a Request for Quote.
        </p>

        <a
            href="/rfq"
            class="contact-cta-button">

            Request a Quote →

        </a>

    </div>

</section>

@endsection