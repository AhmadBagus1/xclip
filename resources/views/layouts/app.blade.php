<!DOCTYPE html>
<html lang="id">

<head>

     <meta charset="UTF-8">

     <meta
          name="viewport"
          content="width=device-width, initial-scale=1.0">


     {{-- =====================================================
         SITE SETTINGS
    ====================================================== --}}

     @php

     $siteSetting = \App\Models\SiteSetting::first();


     /*
     |--------------------------------------------------------------------------
     | GENERAL
     |--------------------------------------------------------------------------
     */

     $siteName =
     $siteSetting?->site_name
     ?? 'Xclip';


     /*
     |--------------------------------------------------------------------------
     | SEO DEFAULT
     |--------------------------------------------------------------------------
     */

     $defaultTitle =
     $siteSetting?->seo_title
     ?? $siteSetting?->tagline
     ?? $siteName;


     $defaultDescription =
     $siteSetting?->seo_description
     ?? $siteSetting?->description
     ?? '';


     $robots =
     $siteSetting?->robots
     ?? 'index, follow';


     /*
     |--------------------------------------------------------------------------
     | OPEN GRAPH DEFAULT
     |--------------------------------------------------------------------------
     */

     $defaultOgTitle =
     $siteSetting?->og_title
     ?? $defaultTitle;


     $defaultOgDescription =
     $siteSetting?->og_description
     ?? $defaultDescription;


     /*
     |--------------------------------------------------------------------------
     | PAGE SEO
     |--------------------------------------------------------------------------
     */

     $pageTitle =
     trim($__env->yieldContent('title'))
     ?: $defaultTitle;


     $pageDescription =
     trim($__env->yieldContent('meta_description'))
     ?: $defaultDescription;


     $ogTitle =
     trim($__env->yieldContent('og_title'))
     ?: $defaultOgTitle;


     $ogDescription =
     trim($__env->yieldContent('og_description'))
     ?: $defaultOgDescription;


     $ogType =
     trim($__env->yieldContent('og_type'))
     ?: 'website';


     /*
     |--------------------------------------------------------------------------
     | DECODE HTML ENTITIES
     |--------------------------------------------------------------------------
     |
     | Mencegah data seperti:
     |
     | News &amp; Updates
     |
     | tampil sebagai:
     |
     | News &amp; Updates
     |
     | setelah Blade melakukan escaping.
     |
     */

     $pageTitle = html_entity_decode(
     $pageTitle,
     ENT_QUOTES | ENT_HTML5,
     'UTF-8'
     );


     $pageDescription = html_entity_decode(
     $pageDescription,
     ENT_QUOTES | ENT_HTML5,
     'UTF-8'
     );


     $ogTitle = html_entity_decode(
     $ogTitle,
     ENT_QUOTES | ENT_HTML5,
     'UTF-8'
     );


     $ogDescription = html_entity_decode(
     $ogDescription,
     ENT_QUOTES | ENT_HTML5,
     'UTF-8'
     );


     $siteName = html_entity_decode(
     $siteName,
     ENT_QUOTES | ENT_HTML5,
     'UTF-8'
     );


     /*
     |--------------------------------------------------------------------------
     | CANONICAL URL
     |--------------------------------------------------------------------------
     |
     | Prioritas:
     | 1. Canonical khusus halaman
     | 2. Canonical dari Settings
     | 3. URL halaman saat ini
     |
     */

     $canonical =
     trim($__env->yieldContent('canonical'))
     ?: $siteSetting?->canonical_url
     ?: url()->current();

     @endphp


     {{-- =====================================================
         BASIC SEO
    ====================================================== --}}

     <title>{{ $pageTitle }}</title>


     @if($pageDescription)

     <meta
          name="description"
          content="{{ $pageDescription }}">

     @endif


     @if($siteSetting?->seo_keywords)

     <meta
          name="keywords"
          content="{{ $siteSetting->seo_keywords }}">

     @endif


     <meta
          name="robots"
          content="{{ $robots }}">


     {{-- =====================================================
         GOOGLE SITE VERIFICATION
    ====================================================== --}}

     @if($siteSetting?->google_site_verification)

     <meta
          name="google-site-verification"
          content="{{ $siteSetting->google_site_verification }}">

     @endif


     {{-- =====================================================
         CANONICAL
    ====================================================== --}}

     <link
          rel="canonical"
          href="{{ $canonical }}">


     {{-- =====================================================
         OPEN GRAPH
    ====================================================== --}}

     <meta
          property="og:title"
          content="{{ $ogTitle }}">


     <meta
          property="og:description"
          content="{{ $ogDescription }}">


     <meta
          property="og:url"
          content="{{ $canonical }}">


     <meta
          property="og:type"
          content="{{ $ogType }}">


     <meta
          property="og:site_name"
          content="{{ $siteName }}">


     @if($siteSetting?->og_image)

     <meta
          property="og:image"
          content="{{ asset('storage/' . $siteSetting->og_image) }}">

     @endif


     {{-- =====================================================
         TWITTER / SOCIAL PREVIEW
    ====================================================== --}}

     <meta
          name="twitter:card"
          content="summary_large_image">


     <meta
          name="twitter:title"
          content="{{ $ogTitle }}">


     <meta
          name="twitter:description"
          content="{{ $ogDescription }}">


     @if($siteSetting?->og_image)

     <meta
          name="twitter:image"
          content="{{ asset('storage/' . $siteSetting->og_image) }}">

     @endif


     {{-- =====================================================
         GOOGLE ANALYTICS
    ====================================================== --}}

     @if($siteSetting?->google_analytics_id)

     @php
     $googleAnalyticsId = $siteSetting->google_analytics_id;
     @endphp

     <script
          async
          src="https://www.googletagmanager.com/gtag/js?id={{ $googleAnalyticsId }}">
     </script>

     <script>
          window.dataLayer = window.dataLayer || [];

          function gtag() {
               dataLayer.push(arguments);
          }

          gtag('js', new Date());

          gtag(
               'config',
               '{{ $googleAnalyticsId }}'
          );
     </script>

     @endif


     {{-- =====================================================
         VITE
    ====================================================== --}}

     @vite([
     'resources/css/app.css',
     'resources/js/app.js'
     ])

</head>


<body>


     {{-- =====================================================
         NAVBAR
    ====================================================== --}}

     @include('components.navbar')


     {{-- =====================================================
         MAIN CONTENT
    ====================================================== --}}

     <main>

          @yield('content')

     </main>


     {{-- =====================================================
         FOOTER
    ====================================================== --}}

     @include('components.footer')


</body>

</html>