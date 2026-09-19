@extends('layouts.app')

@section('title', 'Xclip - Home')

@section('content')

<section class="hero">

    <div class="container">

        <div class="hero-content">

            <h1>
                Business Solutions
                for Your Project
            </h1>

            <p>
                Discover our services,
                projects, and professional solutions.
            </p>

            <div class="hero-actions">

                <a href="/services">
                    Explore Services
                </a>

                <a href="/rfq">
                    Request a Quote
                </a>

            </div>

        </div>

    </div>

</section>


<section class="about-preview">

    <div class="container">

        <p>ABOUT XCLIP</p>

        <h2>
            Building Solutions
            That Matter
        </h2>

        <p>
            Xclip provides various business services
            and solutions to support client projects.
        </p>

        <a href="/about">
            Learn More
        </a>

    </div>

</section>


<section class="services-preview">

    <div class="container">

        <p>OUR SERVICES</p>

        <h2>
            What We Do
        </h2>

        <div class="service-grid">

            <div class="service-card">

                <h3>
                    Construction
                </h3>

                <p>
                    Construction and infrastructure
                    related services.
                </p>

            </div>


            <div class="service-card">

                <h3>
                    Trade
                </h3>

                <p>
                    Trading, distribution,
                    and retail solutions.
                </p>

            </div>


            <div class="service-card">

                <h3>
                    Industrial
                </h3>

                <p>
                    Industrial and manufacturing
                    solutions.
                </p>

            </div>


            <div class="service-card">

                <h3>
                    Professional
                </h3>

                <p>
                    Consulting, design,
                    and professional services.
                </p>

            </div>

        </div>

        <a href="/services">
            View All Services
        </a>

    </div>

</section>


<section class="projects-preview">

    <div class="container">

        <p>
            OUR PROJECTS
        </p>

        <h2>
            Featured Projects
        </h2>

        <p>
            Explore selected projects and
            solutions delivered by Xclip.
        </p>

        <a href="/projects">
            View Projects
        </a>

    </div>

</section>


<section class="cta">

    <div class="container">

        <h2>
            Have a Project in Mind?
        </h2>

        <p>
            Let's discuss how Xclip can support
            your project.
        </p>

        <a href="/rfq">
            Request a Quote
        </a>

    </div>

</section>

@endsection