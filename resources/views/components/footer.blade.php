@php
$siteSetting = \App\Models\SiteSetting::first();

$siteName = $siteSetting?->site_name ?? 'Xclip';

$siteDescription = $siteSetting?->description
?? 'Professional business solutions for your project needs.';
@endphp

<footer>

    <div class="container">

        <div class="footer-content">


            {{-- =========================
                 COMPANY
            ========================== --}}
            <div class="footer-company">

                <h2>
                    {{ strtoupper($siteName) }}
                </h2>

                <p>
                    {{ $siteDescription }}
                </p>

            </div>


            {{-- =========================
                 NAVIGATION
            ========================== --}}
            <div class="footer-links">

                <h3>
                    Navigation
                </h3>

                <a href="/">
                    Home
                </a>

                <a href="/about">
                    About
                </a>

                <a href="/services">
                    Services
                </a>

                <a href="/projects">
                    Projects
                </a>

                <a href="/news">
                    News
                </a>

                <a href="/downloads">
                    Downloads
                </a>

                <a href="/contact">
                    Contact
                </a>

            </div>


            {{-- =========================
                 CONTACT
            ========================== --}}
            <div class="footer-contact">

                <h3>
                    Contact
                </h3>

                @if($siteSetting?->email)
                <p>
                    Email: {{ $siteSetting->email }}
                </p>
                @endif

                @if($siteSetting?->phone)
                <p>
                    Phone: {{ $siteSetting->phone }}
                </p>
                @endif

                @if($siteSetting?->whatsapp)
                <p>
                    WhatsApp: {{ $siteSetting->whatsapp }}
                </p>
                @endif

                @if($siteSetting?->address)
                <p>
                    Address: {{ $siteSetting->address }}
                </p>
                @endif

            </div>


            {{-- =========================
                 SOCIAL MEDIA
            ========================== --}}
            <div class="footer-social">

                <h3>
                    Follow Us
                </h3>

                @if($siteSetting?->instagram)
                <a
                    href="{{ $siteSetting->instagram }}"
                    target="_blank"
                    rel="noopener noreferrer">
                    Instagram
                </a>
                @endif

                @if($siteSetting?->facebook)
                <a
                    href="{{ $siteSetting->facebook }}"
                    target="_blank"
                    rel="noopener noreferrer">
                    Facebook
                </a>
                @endif

                @if($siteSetting?->linkedin)
                <a
                    href="{{ $siteSetting->linkedin }}"
                    target="_blank"
                    rel="noopener noreferrer">
                    LinkedIn
                </a>
                @endif

                @if($siteSetting?->youtube)
                <a
                    href="{{ $siteSetting->youtube }}"
                    target="_blank"
                    rel="noopener noreferrer">
                    YouTube
                </a>
                @endif

            </div>

        </div>


        {{-- =========================
             COPYRIGHT
        ========================== --}}
        <div class="footer-bottom">

            <p>
                &copy; {{ date('Y') }} {{ $siteName }}.
                All rights reserved.
            </p>

        </div>

    </div>

</footer>