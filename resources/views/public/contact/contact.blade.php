@extends('layouts.app')

@section('title', 'Contact - Xclip')

@section('content')

{{-- =====================================================
     CONTACT HERO
===================================================== --}}

<section class="contact-hero">

    <div class="container">

        <div class="contact-hero-box">

            <p class="section-label">
                CONTACT XCLIP
            </p>

            <h1>
                Let's
                <span>Talk.</span>
            </h1>

            <p>
                Have a question, business inquiry, or need
                more information about Xclip? Get in touch
                with our team.
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
                    Xclip
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
                            info@xclip.com
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
                            +62 xxx xxxx xxxx
                        </p>

                    </div>

                </div>


                {{-- ADDRESS --}}

                <div class="contact-item">

                    <div class="contact-item-number">
                        03
                    </div>

                    <div>

                        <h3>
                            Address
                        </h3>

                        <p>
                            Xclip Office
                        </p>

                        <p>
                            Company address will be displayed here.
                        </p>

                    </div>

                </div>


                {{-- BUSINESS HOURS --}}

                <div class="contact-item">

                    <div class="contact-item-number">
                        04
                    </div>

                    <div>

                        <h3>
                            Business Hours
                        </h3>

                        <p>
                            Monday – Friday
                        </p>

                        <p>
                            08:00 – 17:00
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


                <form class="contact-form">


                    {{-- NAME --}}

                    <div class="form-group">

                        <label for="name">
                            Name
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Your name">

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
                            placeholder="your@email.com">

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
                            placeholder="What can we help you with?">

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
                            placeholder="Tell us about your project or inquiry..."></textarea>

                    </div>


                    {{-- SUBMIT --}}

                    <button
                        type="button"
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
                    Xclip.
                </h2>

                <p>
                    Visit our office or contact our team
                    to arrange a meeting.
                </p>

            </div>

            <div class="contact-map">

                <div class="map-placeholder">

                    <span>
                        MAP
                    </span>

                    <div class="map-pin">
                        X
                    </div>

                </div>

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