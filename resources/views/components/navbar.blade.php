@php
$siteSetting = \App\Models\SiteSetting::first();

$siteName = $siteSetting?->site_name ?? 'Xclip';

$logo = $siteSetting?->logo
? asset('storage/' . $siteSetting->logo)
: asset('images/xclip-logo.jpeg');

$currentPath = request()->path();
@endphp

<nav class="navbar">

    <div class="container navbar-container">

        {{-- =====================================================
             LOGO
        ====================================================== --}}

        <a
            href="{{ url('/') }}"
            class="navbar-logo"
            aria-label="{{ $siteName }} Home">

            <img
                src="{{ $logo }}"
                alt="{{ $siteName }} Logo">

        </a>


        {{-- =====================================================
             NAVIGATION
        ====================================================== --}}

        <div class="navbar-menu">

            <a
                href="{{ url('/') }}"
                class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                <span>Home</span>
            </a>

            <a
                href="{{ url('/about') }}"
                class="nav-link {{ request()->is('about') ? 'active' : '' }}">
                <span>About</span>
            </a>

            <a
                href="{{ url('/services') }}"
                class="nav-link {{ request()->is('services*') ? 'active' : '' }}">
                <span>Services</span>
            </a>

            <a
                href="{{ url('/projects') }}"
                class="nav-link {{ request()->is('projects*') ? 'active' : '' }}">
                <span>Projects</span>
            </a>

            <a
                href="{{ url('/news') }}"
                class="nav-link {{ request()->is('news*') ? 'active' : '' }}">
                <span>News</span>
            </a>

            <a
                href="{{ url('/downloads') }}"
                class="nav-link {{ request()->is('downloads*') ? 'active' : '' }}">
                <span>Downloads</span>
            </a>

            <a
                href="{{ url('/contact') }}"
                class="nav-link {{ request()->is('contact') ? 'active' : '' }}">
                <span>Contact</span>
            </a>

        </div>


        {{-- =====================================================
             CTA
        ====================================================== --}}

        <a
            href="{{ url('/rfq') }}"
            class="navbar-cta">

            <span>Request a Quote</span>

        </a>


        {{-- =====================================================
             MOBILE MENU
        ====================================================== --}}

        <details class="navbar-mobile">

            <summary
                class="navbar-mobile-toggle"
                aria-label="Open navigation menu">

                <span></span>
                <span></span>
                <span></span>

            </summary>

            <div class="navbar-mobile-menu">

                <a
                    href="{{ url('/') }}"
                    class="{{ request()->is('/') ? 'active' : '' }}">
                    Home
                </a>

                <a
                    href="{{ url('/about') }}"
                    class="{{ request()->is('about') ? 'active' : '' }}">
                    About
                </a>

                <a
                    href="{{ url('/services') }}"
                    class="{{ request()->is('services*') ? 'active' : '' }}">
                    Services
                </a>

                <a
                    href="{{ url('/projects') }}"
                    class="{{ request()->is('projects*') ? 'active' : '' }}">
                    Projects
                </a>

                <a
                    href="{{ url('/news') }}"
                    class="{{ request()->is('news*') ? 'active' : '' }}">
                    News
                </a>

                <a
                    href="{{ url('/downloads') }}"
                    class="{{ request()->is('downloads*') ? 'active' : '' }}">
                    Downloads
                </a>

                <a
                    href="{{ url('/contact') }}"
                    class="{{ request()->is('contact') ? 'active' : '' }}">
                    Contact
                </a>

                <a
                    href="{{ url('/rfq') }}"
                    class="mobile-cta">
                    Request a Quote
                </a>

            </div>

        </details>

    </div>

</nav>