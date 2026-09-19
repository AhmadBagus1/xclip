@extends('layouts.app')

@section('title', 'Xclip - Services')

@section('content')

{{-- =====================================================
     SERVICES HERO
===================================================== --}}

<section class="services-hero">

    <div class="container">

        <div class="services-hero-content">

            <div>

                <p class="services-label">
                    OUR SERVICES
                </p>

                <h1>
                    Solutions
                    <span>That Move</span>
                    Business Forward
                </h1>

                <p class="services-intro">
                    Xclip provides business services and
                    solutions designed to support projects,
                    operations, and business needs.
                </p>

            </div>

            <div class="services-hero-note">

                <span>✦</span>

                <p>
                    From project support to professional
                    services, we work to deliver practical
                    solutions for our clients.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =====================================================
     SERVICES INTRO
===================================================== --}}

<section class="services-introduction">

    <div class="container">

        <div class="services-introduction-grid">

            <div>

                <p class="services-section-label">
                    WHAT WE DO
                </p>

                <h2>
                    Our Areas
                    of Service
                </h2>

            </div>

            <div>

                <p>
                    Xclip operates across several business
                    areas to support different project and
                    operational requirements.
                </p>

                <p>
                    Our services are organized into
                    specialized areas, allowing us to
                    provide solutions according to the
                    needs of each client and project.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =====================================================
     SERVICE CARDS
===================================================== --}}

<section class="services-list">

    <div class="container">

        <div class="services-grid">

            {{-- 01 Construction --}}

            <article class="service-doodle-card service-orange">

                <div class="service-card-top">

                    <span class="service-number">
                        01
                    </span>

                    <span class="service-symbol">
                        +
                    </span>

                </div>

                <h3>
                    Construction
                </h3>

                <p>
                    Construction and infrastructure
                    related services to support project
                    development and implementation.
                </p>

                <div class="service-line"></div>

                <span class="service-tag">
                    PROJECT SUPPORT
                </span>

            </article>


            {{-- 02 Trade --}}

            <article class="service-doodle-card service-green">

                <div class="service-card-top">

                    <span class="service-number">
                        02
                    </span>

                    <span class="service-symbol">
                        ×
                    </span>

                </div>

                <h3>
                    Trade
                </h3>

                <p>
                    Trading, distribution, and retail
                    solutions that support business
                    supply and commercial activities.
                </p>

                <div class="service-line"></div>

                <span class="service-tag">
                    TRADE & DISTRIBUTION
                </span>

            </article>


            {{-- 03 Industrial --}}

            <article class="service-doodle-card service-blue">

                <div class="service-card-top">

                    <span class="service-number">
                        03
                    </span>

                    <span class="service-symbol">
                        ○
                    </span>

                </div>

                <h3>
                    Industrial
                </h3>

                <p>
                    Industrial and manufacturing solutions
                    designed to support operational and
                    production requirements.
                </p>

                <div class="service-line"></div>

                <span class="service-tag">
                    INDUSTRIAL
                </span>

            </article>


            {{-- 04 Professional --}}

            <article class="service-doodle-card service-yellow">

                <div class="service-card-top">

                    <span class="service-number">
                        04
                    </span>

                    <span class="service-symbol">
                        *
                    </span>

                </div>

                <h3>
                    Professional
                </h3>

                <p>
                    Consulting, design, and professional
                    services to help clients plan and
                    develop their projects.
                </p>

                <div class="service-line"></div>

                <span class="service-tag">
                    PROFESSIONAL SERVICES
                </span>

            </article>

        </div>

    </div>

</section>


{{-- =====================================================
     WHY XCLIP
===================================================== --}}

<section class="services-approach">

    <div class="container">

        <div class="services-approach-header">

            <p class="services-section-label">
                OUR APPROACH
            </p>

            <h2>
                Practical Solutions.
                <br>
                Meaningful Results.
            </h2>

        </div>


        <div class="services-approach-grid">

            <div class="approach-card">

                <span class="approach-number">
                    01
                </span>

                <h3>
                    Understand
                </h3>

                <p>
                    We begin by understanding the needs,
                    objectives, and requirements of each
                    project.
                </p>

            </div>


            <div class="approach-card">

                <span class="approach-number">
                    02
                </span>

                <h3>
                    Support
                </h3>

                <p>
                    We provide services and solutions
                    that are aligned with the project's
                    requirements.
                </p>

            </div>


            <div class="approach-card">

                <span class="approach-number">
                    03
                </span>

                <h3>
                    Deliver
                </h3>

                <p>
                    We focus on practical solutions that
                    can provide value for clients and
                    their projects.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =====================================================
     CTA
===================================================== --}}

<section class="services-cta">

    <div class="container">

        <div class="services-cta-content">

            <p class="services-section-label">
                HAVE A PROJECT?
            </p>

            <h2>
                Let's Build
                Something Together.
            </h2>

            <p>
                Tell us about your project and discover
                how Xclip can support your business needs.
            </p>

            <a href="/rfq" class="services-cta-button">
                Request a Quote
            </a>

        </div>

    </div>

</section>

@endsection