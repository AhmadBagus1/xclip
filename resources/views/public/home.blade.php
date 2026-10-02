@extends('layouts.app')

@section('title', 'PT Xclip Subcon Asia — Integrated Business Solutions')

@section(
'meta_description',
'PT Xclip Subcon Asia menyediakan solusi terintegrasi untuk kebutuhan konstruksi, industrial, perdagangan, teknologi, dan jasa profesional.'
)

@section('og_title', 'PT Xclip Subcon Asia — Integrated Business Solutions')

@section(
'og_description',
'Solusi terintegrasi untuk mendukung kebutuhan bisnis, proyek, dan operasional Anda.'
)

@section('content')


{{-- =========================================================
     HERO
========================================================= --}}

<section class="home-hero">

    <div class="home-hero-bg"></div>

    <div class="container">

        <div class="home-hero-grid">

            <div class="home-hero-content">

                <span class="home-eyebrow">
                    PT. XCLIP SUBCON ASIA
                </span>

                <h1>
                    Building
                    <span>Solutions</span>
                    Across Industries.
                </h1>

                <p class="home-hero-description">
                    Kami menghadirkan solusi terintegrasi untuk mendukung
                    kebutuhan bisnis, proyek, dan operasional melalui
                    layanan yang profesional, inovatif, dan berorientasi
                    pada hasil.
                </p>

                <div class="home-hero-actions">

                    <a
                        href="{{ route('services') }}"
                        class="home-button home-button-primary">
                        Explore Our Services
                    </a>

                    <a
                        href="{{ route('about') }}"
                        class="home-button home-button-secondary">
                        Discover Xclip
                    </a>

                </div>

            </div>


            <div class="home-hero-visual">

                <div class="home-hero-image-frame">

                    <img
                        src="{{ asset('images/gedung.jpg') }}"
                        alt="Gedung PT Xclip Subcon Asia">

                </div>


                <span class="home-doodle home-doodle-star">
                    ✦
                </span>

                <span class="home-doodle home-doodle-circle">
                </span>

                <span class="home-doodle home-doodle-arrow">
                    ↘
                </span>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     COMPANY INTRO
========================================================= --}}

<section class="home-company">

    <div class="container">

        <div class="home-company-header">

            <div class="home-company-title">

                <span class="home-section-label">
                    ABOUT XCLIP
                </span>

                <h2>
                    One Company.
                    <span>Multiple Capabilities.</span>
                    One Integrated Approach.
                </h2>

            </div>


            <div class="home-company-intro">

                <span class="home-company-intro-label">
                    WHO WE ARE
                </span>

                <p>
                    PT Xclip Subcon Asia merupakan perusahaan
                    multi-layanan yang menghadirkan solusi
                    profesional untuk mendukung kebutuhan bisnis,
                    proyek, dan operasional di berbagai sektor.
                </p>

                <p>
                    Kami menghubungkan berbagai kapabilitas dalam
                    satu pendekatan terintegrasi untuk membantu
                    klien mendapatkan solusi yang relevan,
                    efektif, dan berorientasi pada kebutuhan nyata.
                </p>

            </div>

        </div>


        {{-- COMPANY INFORMATION --}}

        <div class="home-company-facts">

            <div class="home-company-fact">

                <span class="home-fact-number">
                    01
                </span>

                <span class="home-company-fact-label">
                    ESTABLISHED
                </span>

                <strong>
                    2023
                </strong>

                <p>
                    Officially established
                    as a business entity.
                </p>

            </div>


            <div class="home-company-fact">

                <span class="home-fact-number">
                    02
                </span>

                <span class="home-company-fact-label">
                    LOCATION
                </span>

                <strong>
                    Kebumen
                </strong>

                <p>
                    Central Java,
                    Indonesia.
                </p>

            </div>


            <div class="home-company-fact">

                <span class="home-fact-number">
                    03
                </span>

                <span class="home-company-fact-label">
                    BUSINESS
                </span>

                <strong>
                    Multi-Sector
                </strong>

                <p>
                    Solutions across
                    different business needs.
                </p>

            </div>


            <div class="home-company-fact">

                <span class="home-fact-number">
                    04
                </span>

                <span class="home-company-fact-label">
                    APPROACH
                </span>

                <strong>
                    Integrated
                </strong>

                <p>
                    Connecting capabilities
                    into one solution.
                </p>

            </div>

        </div>


        {{-- COMPANY CAPABILITIES --}}

        <div class="home-company-footer">

            <div class="home-company-capabilities">

                <span class="home-company-capabilities-label">
                    OUR CAPABILITIES
                </span>

                <div class="home-company-tags">

                    <span>
                        Construction
                    </span>

                    <span>
                        Industrial
                    </span>

                    <span>
                        Trade
                    </span>

                    <span>
                        Technology
                    </span>

                    <span>
                        Professional Services
                    </span>

                </div>

            </div>


            <a
                href="{{ route('about') }}"
                class="home-text-link">

                Explore Xclip

            </a>

        </div>

    </div>

</section>

{{-- =========================================================
     SERVICES
========================================================= --}}

<section class="home-services">

    <div class="container">

        <div class="home-services-header">

            <div class="home-services-title">

                <span class="home-section-label">
                    WHAT WE DO
                </span>

                <h2>
                    Solutions Built
                    <span>Across Industries.</span>
                </h2>

            </div>

            <div class="home-services-description">

                <span class="home-services-note">
                    XCLIP CAPABILITIES
                </span>

                <p>
                    Xclip menggabungkan berbagai kapabilitas untuk
                    mendukung kebutuhan konstruksi, perdagangan,
                    industrial, dan jasa profesional dalam satu
                    pendekatan yang terintegrasi.
                </p>

            </div>

        </div>


        @if($serviceCategories->isNotEmpty())

        <div class="home-services-grid">

            @foreach($serviceCategories as $index => $service)

            <article class="home-service-card">

                {{-- SERVICE IMAGE --}}
                <div class="home-service-image">

                    @if($service->image)

                    <img
                        src="{{ asset('storage/' . $service->image) }}"
                        alt="{{ $service->name }}"
                        loading="lazy">

                    @else

                    <div class="home-service-placeholder">

                        <span>
                            {{ str_pad(
                                $index + 1,
                                2,
                                '0',
                                STR_PAD_LEFT
                            ) }}
                        </span>

                        <strong>
                            {{ strtoupper($service->name) }}
                        </strong>

                    </div>

                    @endif


                    <div class="home-service-overlay"></div>


                    <span class="home-service-index">
                        {{ str_pad(
                            $index + 1,
                            2,
                            '0',
                            STR_PAD_LEFT
                        ) }}
                    </span>


                    <span class="home-service-doodle">
                        ↗
                    </span>

                </div>


                {{-- SERVICE CONTENT --}}
                <div class="home-service-content">

                    <div class="home-service-main">

                        <span class="home-service-label">
                            SERVICE
                            {{ str_pad(
                                $index + 1,
                                2,
                                '0',
                                STR_PAD_LEFT
                            ) }}
                        </span>

                        <h3>
                            {{ $service->name }}
                        </h3>


                        @if($service->description)

                        <p>
                            {{ \Illuminate\Support\Str::limit(
                                $service->description,
                                170
                            ) }}
                        </p>

                        @else

                        <p>
                            Solusi profesional yang dirancang
                            untuk mendukung kebutuhan bisnis,
                            proyek, dan operasional Anda.
                        </p>

                        @endif

                    </div>


                    <div class="home-service-bottom">

                        <span class="home-service-line"></span>


                    </div>

                </div>

            </article>

            @endforeach

        </div>

        @else

        <div class="home-empty-state">

            <span>✦</span>

            <h3>
                Services Coming Soon
            </h3>

            <p>
                Service information will appear here
                once service categories are published.
            </p>

        </div>

        @endif


        <div class="home-services-footer">

            <p>
                Dari kebutuhan lapangan hingga kebutuhan bisnis,
                setiap layanan dikembangkan untuk memberikan
                solusi yang praktis dan relevan.
            </p>

            <a
                href="{{ route('services') }}"
                class="home-text-link">

                Explore All Services

            </a>

        </div>

    </div>

</section>

{{-- =========================================================
     WHY XCLIP
========================================================= --}}

<section class="home-why">

    <div class="container">

        <div class="home-why-header">

            <div class="home-why-title">

                <span class="home-section-label">
                    WHY XCLIP
                </span>

                <h2>
                    Built to Connect
                    <span>Needs With Solutions.</span>
                </h2>

            </div>

            <div class="home-why-intro">

                <span class="home-why-note">
                    WHY WORK WITH US?
                </span>

                <p>
                    Xclip hadir sebagai mitra yang menghubungkan
                    berbagai kebutuhan bisnis, proyek, dan operasional
                    melalui kapabilitas lintas sektor dalam satu
                    pendekatan yang terintegrasi.
                </p>

            </div>

        </div>


        <div class="home-why-grid">

            {{-- ITEM 01 --}}
            <article class="home-why-card">

                <div class="home-why-card-top">

                    <span class="home-why-number">
                        01
                    </span>

                    <span class="home-why-symbol">
                        +
                    </span>

                </div>

                <div class="home-why-card-content">

                    <span class="home-why-label">
                        CAPABILITY
                    </span>

                    <h3>
                        Integrated Capabilities
                    </h3>

                    <p>
                        Xclip memiliki kapabilitas di berbagai bidang,
                        mulai dari konstruksi, industrial, perdagangan,
                        teknologi, hingga jasa profesional.
                    </p>

                </div>

            </article>


            {{-- ITEM 02 --}}
            <article class="home-why-card">

                <div class="home-why-card-top">

                    <span class="home-why-number">
                        02
                    </span>


                </div>

                <div class="home-why-card-content">

                    <span class="home-why-label">
                        APPROACH
                    </span>

                    <h3>
                        Practical Solutions
                    </h3>

                    <p>
                        Kami berfokus pada pemahaman kebutuhan nyata
                        sebelum menentukan solusi, sehingga setiap
                        pekerjaan dapat diarahkan pada hasil yang
                        relevan dan dapat diterapkan.
                    </p>

                </div>

            </article>


            {{-- ITEM 03 --}}
            <article class="home-why-card">

                <div class="home-why-card-top">

                    <span class="home-why-number">
                        03
                    </span>

                    <span class="home-why-symbol">
                        *
                    </span>

                </div>

                <div class="home-why-card-content">

                    <span class="home-why-label">
                        COLLABORATION
                    </span>

                    <h3>
                        Flexible Partnership
                    </h3>

                    <p>
                        Setiap proyek memiliki kebutuhan yang berbeda.
                        Karena itu, Xclip mengembangkan pola kerja yang
                        fleksibel dan dapat disesuaikan dengan kondisi
                        serta kebutuhan klien.
                    </p>

                </div>

            </article>


            {{-- ITEM 04 --}}
            <article class="home-why-card">

                <div class="home-why-card-top">

                    <span class="home-why-number">
                        04
                    </span>

                </div>

                <div class="home-why-card-content">

                    <span class="home-why-label">
                        EXECUTION
                    </span>

                    <h3>
                        Professional Execution
                    </h3>

                    <p>
                        Kami mengutamakan komunikasi yang jelas,
                        koordinasi yang baik, dan pelaksanaan yang
                        profesional untuk menjaga pekerjaan tetap
                        terarah dari awal hingga selesai.
                    </p>

                </div>

            </article>

        </div>


        <div class="home-why-bottom">

            <div class="home-why-bottom-line"></div>


        </div>

    </div>

    </div>

</section>

{{-- =========================================================
     HOW WE WORK
========================================================= --}}

<section class="home-how">

    <div class="container">

        <div class="home-how-header">

            <div class="home-how-title">

                <span class="home-section-label">
                    HOW WE WORK
                </span>

                <h2>
                    From Need
                    <span>to Solution.</span>
                </h2>

            </div>

            <div class="home-how-intro">

                <span class="home-how-note">
                    OUR PROCESS
                </span>

                <p>
                    Setiap proyek dimulai dari kebutuhan yang berbeda.
                    Xclip mengembangkan proses kerja yang terstruktur
                    untuk memahami kebutuhan, menentukan pendekatan,
                    menjalankan pekerjaan, dan memastikan solusi dapat
                    memberikan hasil yang relevan.
                </p>

            </div>

        </div>


        <div class="home-how-process">

            {{-- STEP 01 --}}
            <article class="home-how-step">

                <div class="home-how-step-top">

                    <span class="home-how-number">
                        01
                    </span>

                </div>

                <div class="home-how-step-content">

                    <span class="home-how-label">
                        UNDERSTAND
                    </span>

                    <h3>
                        Understand the Need
                    </h3>

                    <p>
                        Kami memulai dengan memahami kebutuhan,
                        tujuan, kondisi, dan tantangan yang dihadapi
                        klien sebelum menentukan solusi.
                    </p>

                </div>

            </article>


            {{-- STEP 02 --}}
            <article class="home-how-step">

                <div class="home-how-step-top">

                    <span class="home-how-number">
                        02
                    </span>


                </div>

                <div class="home-how-step-content">

                    <span class="home-how-label">
                        PLAN
                    </span>

                    <h3>
                        Plan the Approach
                    </h3>

                    <p>
                        Kebutuhan yang telah dipahami diterjemahkan
                        menjadi pendekatan, ruang lingkup pekerjaan,
                        dan langkah yang sesuai dengan kebutuhan proyek.
                    </p>

                </div>

            </article>


            {{-- STEP 03 --}}
            <article class="home-how-step">

                <div class="home-how-step-top">

                    <span class="home-how-number">
                        03
                    </span>


                </div>

                <div class="home-how-step-content">

                    <span class="home-how-label">
                        EXECUTE
                    </span>

                    <h3>
                        Execute the Solution
                    </h3>

                    <p>
                        Tim menjalankan pekerjaan dengan koordinasi
                        yang jelas, komunikasi yang terarah, dan
                        perhatian terhadap kebutuhan teknis maupun
                        operasional proyek.
                    </p>

                </div>

            </article>


            {{-- STEP 04 --}}
            <article class="home-how-step">

                <div class="home-how-step-top">

                    <span class="home-how-number">
                        04
                    </span>


                </div>

                <div class="home-how-step-content">

                    <span class="home-how-label">
                        DELIVER
                    </span>

                    <h3>
                        Deliver the Result
                    </h3>

                    <p>
                        Pekerjaan diarahkan pada hasil yang jelas,
                        relevan, dan sesuai dengan tujuan yang telah
                        disepakati bersama.
                    </p>

                </div>

            </article>

        </div>


        <div class="home-how-bottom">

            <div class="home-how-doodle-line"></div>

            <div class="home-how-bottom-content">

                <div>

                    <span class="home-how-bottom-label">
                        ONE CONNECTED PROCESS
                    </span>

                    <p>
                        <strong>Understand.</strong>
                        <strong>Plan.</strong>
                        <strong>Execute.</strong>
                        <strong>Deliver.</strong>
                    </p>

                </div>

                <a
                    href="{{ route('contact') }}"
                    class="home-text-link">

                    Start a Conversation

                </a>

            </div>

        </div>

    </div>

</section>

{{-- =========================================================
     FEATURED PROJECTS
========================================================= --}}

<section class="home-projects">

    <div class="container">

        <div class="home-section-heading">

            <div>

                <span class="home-section-label">
                    OUR PROJECTS
                </span>

                <h2>
                    Work That
                    <span>Speaks for Us.</span>
                </h2>

            </div>

            <a
                href="{{ route('projects') }}"
                class="home-text-link">
                View All Projects
            </a>

        </div>


        @if($featuredProjects->count())

        <div class="home-project-grid">

            @foreach($featuredProjects as $project)

            <article class="home-project-card">

                <div class="home-project-image">

                    @if($project->thumbnail)

                    <img
                        src="{{ asset('storage/' . $project->thumbnail) }}"
                        alt="{{ $project->title }}">

                    @else

                    <div class="home-project-placeholder">
                        PROJECT
                    </div>

                    @endif

                </div>


                <div class="home-project-content">

                    @if($project->category)

                    <span class="home-project-category">
                        {{ $project->category }}
                    </span>

                    @endif


                    <h3>
                        {{ $project->title }}
                    </h3>


                    @if($project->description)

                    <p>
                        {{ \Illuminate\Support\Str::limit(
                                        $project->description,
                                        120
                                    ) }}
                    </p>

                    @endif


                    <div class="home-project-meta">

                        @if($project->location)

                        <span>
                            {{ $project->location }}
                        </span>

                        @endif


                        @if($project->year)

                        <span>
                            {{ $project->year }}
                        </span>

                        @endif

                    </div>


                    <a
                        href="{{ route('projects.show', $project->slug) }}"
                        class="home-text-link">
                        View Project
                    </a>

                </div>

            </article>

            @endforeach

        </div>

        @else

        <div class="home-empty-state">

            <span>✦</span>

            <h3>
                Projects Coming Soon
            </h3>

            <p>
                Featured projects will appear here
                once they are published.
            </p>

        </div>

        @endif

    </div>

</section>


{{-- =========================================================
     LATEST NEWS
========================================================= --}}

<section class="home-news">

    <div class="container">

        <div class="home-section-heading">

            <div>

                <span class="home-section-label">
                    LATEST INFORMATION
                </span>

                <h2>
                    What's New
                    <span>at Xclip.</span>
                </h2>

            </div>

            <a
                href="{{ route('news') }}"
                class="home-text-link">
                View All News
            </a>

        </div>


        @if($latestNews->count())

        <div class="home-news-grid">

            @foreach($latestNews as $news)

            <article class="home-news-card">

                <div class="home-news-image">

                    @if($news->thumbnail)

                    <img
                        src="{{ asset('storage/' . $news->thumbnail) }}"
                        alt="{{ $news->title }}">

                    @else

                    <div class="home-news-placeholder">
                        XCLIP NEWS
                    </div>

                    @endif

                </div>


                <div class="home-news-content">

                    <div class="home-news-meta">

                        @if($news->category)

                        <span>
                            {{ $news->category }}
                        </span>

                        @endif


                        @if($news->published_at)

                        <time>
                            {{ $news->published_at->format('d M Y') }}
                        </time>

                        @endif

                    </div>


                    <h3>
                        {{ $news->title }}
                    </h3>


                    @if($news->excerpt)

                    <p>
                        {{ \Illuminate\Support\Str::limit(
                                        $news->excerpt,
                                        130
                                    ) }}
                    </p>

                    @endif


                    <a
                        href="{{ route('news.show', $news->slug) }}"
                        class="home-text-link">
                        Read More
                    </a>

                </div>

            </article>

            @endforeach

        </div>

        @else

        <div class="home-empty-state">

            <span>✎</span>

            <h3>
                News Coming Soon
            </h3>

            <p>
                The latest Xclip news and updates
                will appear here.
            </p>

        </div>

        @endif

    </div>

</section>


{{-- =========================================================
     CTA
========================================================= --}}

<section class="home-cta">

    <div class="container">

        <div class="home-cta-content">

            <span class="home-section-label">
                LET'S WORK TOGETHER
            </span>

            <h2>
                Have a Project
                <span>in Mind?</span>
            </h2>

            <p>
                Tell us about your needs and let's explore
                how Xclip can support your project.
            </p>

            <a
                href="{{ route('rfq') }}"
                class="home-button home-button-light">
                Request a Quote
            </a>

        </div>


        <div class="home-cta-doodle">

            <span>✦</span>
            <span>〰</span>
            <span>↗</span>

        </div>

    </div>

</section>

@endsection