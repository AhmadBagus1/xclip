@php
$siteSetting = \App\Models\SiteSetting::first();

$siteName = $siteSetting?->site_name ?? 'Xclip';

$logo = $siteSetting?->logo
? asset('storage/' . $siteSetting->logo)
: asset('images/xclip-logo.jpeg');
@endphp

<nav class="navbar">

    <div class="container navbar-container">

        {{-- =========================
             LOGO XCLIP
        ========================== --}}
        <a href="/" class="navbar-logo">

            <img
                src="{{ $logo }}"
                alt="{{ $siteName }} Logo">

        </a>


        {{-- =========================
             NAVIGATION MENU
        ========================== --}}
        <div class="navbar-menu">

            <a href="/" class="nav-link">
                Home
            </a>

            <a href="/about" class="nav-link">
                About
            </a>

            <a href="/services" class="nav-link">
                Services
            </a>

            <a href="/projects" class="nav-link">
                Projects
            </a>

            <a href="/news" class="nav-link">
                News
            </a>

            <a href="/downloads" class="nav-link">
                Downloads
            </a>

            <a href="/contact" class="nav-link">
                Contact
            </a>

        </div>


        {{-- =========================
             REQUEST A QUOTE
        ========================== --}}
        <a href="/rfq" class="navbar-cta">
            Request a Quote
        </a>

    </div>

</nav>