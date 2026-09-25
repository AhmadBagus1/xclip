@extends('layouts.app')

@section('title', 'Xclip - Services')

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
                    Solutions That Move
                    <span>Business Forward</span>
                </h1>

                <p class="services-hero-description">
                    Xclip provides practical solutions to support
                    projects, operations, and business needs through
                    reliable services and professional expertise.
                </p>

            </div>


            <div class="services-hero-note">



                <p>
                    From project support to professional services,
                    we help turn business needs into practical solutions.
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
                    Practical services for
                    real business needs.
                </h2>

                <p>
                    Our services are organized into several categories
                    designed to support different project requirements,
                    operational needs, and business activities.
                </p>

                <p>
                    Explore our service categories below to discover
                    how Xclip can support your project.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     SERVICE CATEGORIES
========================================================= --}}

<section class="services-list">

    <div class="container">

        <div class="services-section-heading">

            <div>

                <p class="services-eyebrow">
                    SERVICE CATEGORIES
                </p>

                <h2>
                    What We Offer
                </h2>

            </div>

            <p>
                Explore our core service categories.
            </p>

        </div>


        @if($categories->isNotEmpty())

        <div class="services-category-grid">

            @foreach($categories as $category)

            <article class="service-category-card">

                <div class="service-category-card-inner">

                    {{-- ICON --}}

                    <div class="service-category-icon">

                        {{ $category->icon ?: '+' }}

                    </div>


                    {{-- CATEGORY CONTENT --}}

                    <div class="service-category-content">

                        <h3>
                            {{ $category->name }}
                        </h3>

                        @if($category->description)

                        <p>
                            {{ $category->description }}
                        </p>

                        @endif

                    </div>




                </div>

            </article>

            @endforeach

        </div>

        @else

        <div class="services-empty-state">

            <div class="services-empty-icon">
                +
            </div>

            <h3>
                Services Coming Soon
            </h3>

            <p>
                Service information is currently being prepared.
                Please check back again soon.
            </p>

        </div>

        @endif

    </div>

</section>


{{-- =========================================================
     OUR APPROACH
========================================================= --}}

<section class="services-approach">

    <div class="container">

        <div class="services-approach-grid">

            <div class="services-approach-label">

                <p class="services-eyebrow">
                    OUR APPROACH
                </p>


            </div>


            <div class="services-approach-content">

                <h2>
                    Practical Solutions.
                    Professional Execution.
                </h2>

                <p>
                    We believe good service starts with understanding
                    the actual needs of each project. Our approach focuses
                    on practical solutions, clear communication, and
                    professional execution.
                </p>

                <p>
                    Every project has different requirements. That's why
                    we work with a flexible approach that allows our
                    services to adapt to the needs of our clients.
                </p>

            </div>

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
                    HAVE A PROJECT IN MIND?
                </p>

                <h2>
                    Let's build the right
                    solution together.
                </h2>

            </div>


            <a
                href="{{ route('rfq') }}"
                class="services-cta-button">

                Request a Quote


            </a>

        </div>

    </div>

</section>

@endsection