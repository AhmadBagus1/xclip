<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- =========================
         SITE SETTINGS
    ========================== --}}
    @php
    $siteSetting = \App\Models\SiteSetting::first();

    $siteName = $siteSetting?->site_name ?? 'Xclip';

    $seoTitle = $siteSetting?->seo_title
    ?? $siteSetting?->tagline
    ?? $siteName;

    $seoDescription = $siteSetting?->seo_description
    ?? $siteSetting?->description
    ?? '';

    $robots = $siteSetting?->robots ?? 'index, follow';

    $ogTitle = $siteSetting?->og_title
    ?? $seoTitle;

    $ogDescription = $siteSetting?->og_description
    ?? $seoDescription;
    @endphp


    {{-- =========================
         SEO
    ========================== --}}

    <title>@yield('title', $seoTitle)</title>

    @if($seoDescription)
    <meta name="description" content="{{ $seoDescription }}">
    @endif

    @if($siteSetting?->seo_keywords)
    <meta name="keywords" content="{{ $siteSetting->seo_keywords }}">
    @endif

    <meta name="robots" content="{{ $robots }}">

    <link rel="canonical" href="{{ url()->current() }}">


    {{-- =========================
         OPEN GRAPH
    ========================== --}}

    <meta property="og:title" content="@yield('og_title', $ogTitle)">
    <meta property="og:description" content="@yield('og_description', $ogDescription)">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="@yield('og_type', 'website')">

    @if($siteSetting?->og_image)
    <meta property="og:image" content="{{ asset('storage/' . $siteSetting->og_image) }}">
    @endif


    {{-- =========================
         VITE
    ========================== --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    {{-- =========================
         NAVBAR
    ========================== --}}
    @include('components.navbar')


    {{-- =========================
         KONTEN HALAMAN
    ========================== --}}
    <main>
        @yield('content')
    </main>


    {{-- =========================
         FOOTER
    ========================== --}}
    @include('components.footer')

</body>

</html>