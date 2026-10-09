@php
$siteSetting = \App\Models\SiteSetting::first();

$siteName = $siteSetting?->site_name ?? 'Xclip';

$siteDescription = $siteSetting?->description
?? 'Professional business solutions for your project needs.';
@endphp

<footer class="site-footer">

    <div class="container">

        <div class="footer-content">


            {{-- =====================================================
                 COMPANY
            ====================================================== --}}

            <div class="footer-company">

                <div class="footer-company-brand">

                    <div class="footer-company-logo">
                        {{ strtoupper($siteName) }}
                    </div>

                </div>

                <p class="footer-company-description">
                    {{ $siteDescription }}
                </p>


                {{-- SOCIAL MEDIA --}}

                <div class="footer-social">

                    @if($siteSetting?->instagram)

                    <a
                        href="{{ $siteSetting->instagram }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Instagram">

                        <i class="fa-brands fa-instagram"></i>

                    </a>

                    @endif


                    @if($siteSetting?->facebook)

                    <a
                        href="{{ $siteSetting->facebook }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Facebook">

                        <i class="fa-brands fa-facebook-f"></i>

                    </a>

                    @endif


                    @if($siteSetting?->linkedin)

                    <a
                        href="{{ $siteSetting->linkedin }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="LinkedIn">

                        <i class="fa-brands fa-linkedin-in"></i>

                    </a>

                    @endif


                    @if($siteSetting?->youtube)

                    <a
                        href="{{ $siteSetting->youtube }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="YouTube">

                        <i class="fa-brands fa-youtube"></i>

                    </a>

                    @endif

                </div>

            </div>


            {{-- =====================================================
                 INFORMATION
            ====================================================== --}}

            <div class="footer-information">

                <h3>
                    Information
                </h3>


                <div class="footer-information-links">

                    <a href="{{ url('/') }}">
                        Home
                    </a>

                    <a href="{{ url('/about') }}">
                        About
                    </a>

                    <a href="{{ url('/services') }}">
                        Services
                    </a>

                    <a href="{{ url('/projects') }}">
                        Projects
                    </a>

                    <a href="{{ url('/news') }}">
                        News
                    </a>

                    <a href="{{ url('/downloads') }}">
                        Downloads
                    </a>

                    <a href="{{ url('/contact') }}">
                        Contact
                    </a>

                </div>

            </div>


            {{-- =====================================================
                 CONTACT US
            ====================================================== --}}

            <div class="footer-contact">

                <h3>
                    Contact Us
                </h3>


                {{-- EMAIL --}}

                @if($siteSetting?->email)

                <div class="footer-contact-item">

                    <div class="footer-contact-icon">
                        ✉
                    </div>

                    <div class="footer-contact-content">

                        <span class="footer-contact-label">
                            Email
                        </span>

                        <span class="footer-contact-value">
                            {{ $siteSetting->email }}
                        </span>

                    </div>

                </div>

                @endif


                {{-- PHONE --}}

                @if($siteSetting?->phone)

                <div class="footer-contact-item">

                    <div class="footer-contact-icon">
                        ☎
                    </div>

                    <div class="footer-contact-content">

                        <span class="footer-contact-label">
                            Phone
                        </span>

                        <span class="footer-contact-value">
                            {{ $siteSetting->phone }}
                        </span>

                    </div>

                </div>

                @endif


                {{-- WHATSAPP --}}

                @if($siteSetting?->whatsapp)

                <div class="footer-contact-item">

                    <div class="footer-contact-icon">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>


                    <div class="footer-contact-content">

                        <span class="footer-contact-label">
                            WhatsApp
                        </span>

                        <span class="footer-contact-value">
                            {{ $siteSetting->whatsapp }}
                        </span>

                    </div>

                </div>

                @endif


                {{-- ADDRESS --}}

                @if($siteSetting?->address)

                <div class="footer-contact-item">

                    <div class="footer-contact-icon">
                        📍
                    </div>

                    <div class="footer-contact-content">

                        <span class="footer-contact-label">
                            Address
                        </span>

                        <span class="footer-contact-value">
                            {{ $siteSetting->address }}
                        </span>

                    </div>

                </div>

                @endif

            </div>

        </div>


        {{-- =====================================================
             FOOTER BOTTOM
        ====================================================== --}}

        <div class="footer-bottom">

            <p>
                © {{ date('Y') }}
                {{ $siteName }}.
                All rights reserved.
            </p>

            <p class="footer-credit">
                Crafted with
                <span class="footer-heart">♥</span>
                &amp; doodle passion by PT Xclip Subcon Asia
            </p>

        </div>

    </div>

</footer>