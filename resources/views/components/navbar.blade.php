@php
$siteSetting = \App\Models\SiteSetting::first();

$siteName = $siteSetting?->site_name ?? 'Xclip';

$logo = $siteSetting?->logo
? asset('storage/' . $siteSetting->logo)
: asset('images/xclip-logo-Photoroom.png');
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
             DESKTOP NAVIGATION
        ====================================================== --}}

        <div class="navbar-menu">

            {{-- HOME --}}
            <a
                href="{{ url('/') }}"
                class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                Home
            </a>


            {{-- ABOUT --}}
            <a
                href="{{ url('/about') }}"
                class="nav-link {{ request()->is('about') ? 'active' : '' }}">
                About
            </a>


            {{-- SERVICES --}}
            <a
                href="{{ url('/services') }}"
                class="nav-link {{ request()->is('services*') ? 'active' : '' }}">
                Services
            </a>


            {{-- PROJECTS --}}
            <a
                href="{{ url('/projects') }}"
                class="nav-link {{ request()->is('projects*') ? 'active' : '' }}">
                Projects
            </a>


            {{-- NEWS --}}
            <a
                href="{{ url('/news') }}"
                class="nav-link {{ request()->is('news*') ? 'active' : '' }}">
                News
            </a>


            {{-- DOWNLOADS --}}
            <a
                href="{{ url('/downloads') }}"
                class="nav-link {{ request()->is('downloads*') ? 'active' : '' }}">
                Downloads
            </a>


            {{-- CONTACT --}}
            <a
                href="{{ url('/contact') }}"
                class="nav-link {{ request()->is('contact') ? 'active' : '' }}">
                Contact
            </a>

        </div>


        {{-- =====================================================
             REQUEST A QUOTE
        ====================================================== --}}

        <a
            href="{{ url('/rfq') }}"
            class="navbar-cta {{ request()->is('rfq*') ? 'active' : '' }}">

            <span class="navbar-cta-icon"></span>

            <span class="navbar-cta-text">
                Request a Quote
            </span>

            <span class="navbar-cta-star"></span>

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


                {{-- MOBILE RFQ --}}

                <a
                    href="{{ url('/rfq') }}"
                    class="mobile-rfq {{ request()->is('rfq*') ? 'active' : '' }}">
                    <span class="navbar-cta-icon"></span>
                    <span>
                        Request a Quote
                    </span>

                    <span class="mobile-rfq-star"></span>

                </a>

            </div>

        </details>

    </div>

</nav>