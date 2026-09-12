@extends('layouts.admin')

@section('title', 'Settings - Xclip Admin')

@section('content')

<div class="admin-page-header">
    <div>
        <p class="section-label">XCLIP ADMIN PANEL</p>

        <h2>
            Settings.
        </h2>

        <p>
            Manage your website information,
            business details, social media,
            SEO configuration, and office location.
        </p>
    </div>
</div>


{{-- =====================================================
     SUCCESS MESSAGE
===================================================== --}}

@if(session('success'))

<div class="admin-alert admin-alert-success">
    {{ session('success') }}
</div>

@endif


{{-- =====================================================
     ERROR MESSAGE
===================================================== --}}

@if($errors->any())

<div class="admin-alert admin-alert-error">

    <strong>
        Please fix the following errors:
    </strong>

    <ul>

        @foreach($errors->all() as $error)

        <li>
            {{ $error }}
        </li>

        @endforeach

    </ul>

</div>

@endif


{{-- =====================================================
     SETTINGS FORM
===================================================== --}}

<form
    action="{{ route('admin.settings.update') }}"
    method="POST"
    class="admin-settings-form">

    @csrf

    @method('PUT')


    {{-- =================================================
         01 — GENERAL
    ================================================== --}}

    <div class="admin-settings-section">

        <div class="admin-section-header">

            <div>

                <p class="section-label">
                    01 — GENERAL
                </p>

                <h2>
                    Website Information
                </h2>

            </div>

        </div>


        <div class="admin-settings-card">


            {{-- WEBSITE NAME --}}

            <div class="admin-form-group">

                <label for="site_name">
                    Website Name <span>*</span>
                </label>

                <input
                    type="text"
                    id="site_name"
                    name="site_name"
                    value="{{ old('site_name', $setting?->site_name ?? 'Xclip') }}"
                    placeholder="Example: Xclip"
                    required>

            </div>


            {{-- TAGLINE --}}

            <div class="admin-form-group">

                <label for="tagline">
                    Tagline
                </label>

                <input
                    type="text"
                    id="tagline"
                    name="tagline"
                    value="{{ old('tagline', $setting?->tagline) }}"
                    placeholder="Example: Business Solutions for Your Project">

            </div>


            {{-- DESCRIPTION --}}

            <div class="admin-form-group">

                <label for="description">
                    Website Description
                </label>

                <textarea
                    id="description"
                    name="description"
                    rows="5"
                    placeholder="Describe your company or website...">{{ old('description', $setting?->description) }}</textarea>

            </div>

        </div>

    </div>


    {{-- =================================================
         02 — BUSINESS
    ================================================== --}}

    <div class="admin-settings-section">

        <div class="admin-section-header">

            <div>

                <p class="section-label">
                    02 — BUSINESS
                </p>

                <h2>
                    Business Information
                </h2>

            </div>

        </div>


        <div class="admin-settings-card">


            {{-- EMAIL + PHONE --}}

            <div class="admin-form-row">

                <div class="admin-form-group">

                    <label for="email">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email', $setting?->email) }}"
                        placeholder="info@example.com">

                </div>


                <div class="admin-form-group">

                    <label for="phone">
                        Phone
                    </label>

                    <input
                        type="text"
                        id="phone"
                        name="phone"
                        value="{{ old('phone', $setting?->phone) }}"
                        placeholder="+62 xxx xxx xxxx">

                </div>

            </div>


            {{-- WHATSAPP + ADDRESS --}}

            <div class="admin-form-row">

                <div class="admin-form-group">

                    <label for="whatsapp">
                        WhatsApp
                    </label>

                    <input
                        type="text"
                        id="whatsapp"
                        name="whatsapp"
                        value="{{ old('whatsapp', $setting?->whatsapp) }}"
                        placeholder="+62 xxx xxx xxxx">

                </div>


                <div class="admin-form-group">

                    <label for="address">
                        Address
                    </label>

                    <textarea
                        id="address"
                        name="address"
                        rows="3"
                        placeholder="Company address...">{{ old('address', $setting?->address) }}</textarea>

                </div>

            </div>


            {{-- BUSINESS DAYS + BUSINESS HOURS --}}

            <div class="admin-form-row">

                <div class="admin-form-group">

                    <label for="business_days">
                        Business Days
                    </label>

                    <input
                        type="text"
                        id="business_days"
                        name="business_days"
                        value="{{ old('business_days', $setting?->business_days) }}"
                        placeholder="Example: Monday - Friday">

                    <small class="admin-form-help">
                        Example: Monday - Friday
                    </small>

                </div>


                <div class="admin-form-group">

                    <label for="business_hours">
                        Business Hours
                    </label>

                    <input
                        type="text"
                        id="business_hours"
                        name="business_hours"
                        value="{{ old('business_hours', $setting?->business_hours) }}"
                        placeholder="Example: 08:00 - 17:00">

                    <small class="admin-form-help">
                        Example: 08:00 - 17:00
                    </small>

                </div>

            </div>

        </div>

    </div>


    {{-- =================================================
         03 — SOCIAL MEDIA
    ================================================== --}}

    <div class="admin-settings-section">

        <div class="admin-section-header">

            <div>

                <p class="section-label">
                    03 — SOCIAL MEDIA
                </p>

                <h2>
                    Social Media
                </h2>

            </div>

        </div>


        <div class="admin-settings-card">


            {{-- INSTAGRAM + FACEBOOK --}}

            <div class="admin-form-row">

                <div class="admin-form-group">

                    <label for="instagram">
                        Instagram
                    </label>

                    <input
                        type="text"
                        id="instagram"
                        name="instagram"
                        value="{{ old('instagram', $setting?->instagram) }}"
                        placeholder="Instagram URL">

                </div>


                <div class="admin-form-group">

                    <label for="facebook">
                        Facebook
                    </label>

                    <input
                        type="text"
                        id="facebook"
                        name="facebook"
                        value="{{ old('facebook', $setting?->facebook) }}"
                        placeholder="Facebook URL">

                </div>

            </div>


            {{-- LINKEDIN + YOUTUBE --}}

            <div class="admin-form-row">

                <div class="admin-form-group">

                    <label for="linkedin">
                        LinkedIn
                    </label>

                    <input
                        type="text"
                        id="linkedin"
                        name="linkedin"
                        value="{{ old('linkedin', $setting?->linkedin) }}"
                        placeholder="LinkedIn URL">

                </div>


                <div class="admin-form-group">

                    <label for="youtube">
                        YouTube
                    </label>

                    <input
                        type="text"
                        id="youtube"
                        name="youtube"
                        value="{{ old('youtube', $setting?->youtube) }}"
                        placeholder="YouTube URL">

                </div>

            </div>

        </div>

    </div>


    {{-- =================================================
         04 — SEO
    ================================================== --}}

    <div class="admin-settings-section">

        <div class="admin-section-header">

            <div>

                <p class="section-label">
                    04 — SEO
                </p>

                <h2>
                    Search Engine Optimization
                </h2>

                <p>
                    Configure how search engines understand
                    and display your website.
                </p>

            </div>

        </div>


        <div class="admin-settings-card">


            {{-- SEO TITLE --}}

            <div class="admin-form-group">

                <label for="seo_title">
                    SEO Title
                </label>

                <input
                    type="text"
                    id="seo_title"
                    name="seo_title"
                    value="{{ old('seo_title', $setting?->seo_title) }}"
                    placeholder="Example: Xclip - Business Solutions">

                <small class="admin-form-help">
                    The main title used by search engines.
                </small>

            </div>


            {{-- META DESCRIPTION --}}

            <div class="admin-form-group">

                <label for="seo_description">
                    Meta Description
                </label>

                <textarea
                    id="seo_description"
                    name="seo_description"
                    rows="4"
                    maxlength="500"
                    placeholder="Describe your website for search engines...">{{ old('seo_description', $setting?->seo_description) }}</textarea>

                <small class="admin-form-help">
                    A short description that may appear in search results.
                </small>

            </div>


            {{-- KEYWORDS --}}

            <div class="admin-form-group">

                <label for="seo_keywords">
                    Keywords
                </label>

                <textarea
                    id="seo_keywords"
                    name="seo_keywords"
                    rows="3"
                    placeholder="construction, industrial, project, Xclip">{{ old('seo_keywords', $setting?->seo_keywords) }}</textarea>

                <small class="admin-form-help">
                    Optional keywords related to your website.
                </small>

            </div>


            {{-- CANONICAL + ROBOTS --}}

            <div class="admin-form-row">

                <div class="admin-form-group">

                    <label for="canonical_url">
                        Canonical URL
                    </label>

                    <input
                        type="url"
                        id="canonical_url"
                        name="canonical_url"
                        value="{{ old('canonical_url', $setting?->canonical_url) }}"
                        placeholder="https://example.com">

                </div>


                <div class="admin-form-group">

                    <label for="robots">
                        Robots
                    </label>

                    <select
                        id="robots"
                        name="robots">

                        <option
                            value="index, follow"
                            {{ old('robots', $setting?->robots ?? 'index, follow') === 'index, follow' ? 'selected' : '' }}>
                            Index, Follow
                        </option>

                        <option
                            value="noindex, follow"
                            {{ old('robots', $setting?->robots) === 'noindex, follow' ? 'selected' : '' }}>
                            Noindex, Follow
                        </option>

                        <option
                            value="index, nofollow"
                            {{ old('robots', $setting?->robots) === 'index, nofollow' ? 'selected' : '' }}>
                            Index, Nofollow
                        </option>

                        <option
                            value="noindex, nofollow"
                            {{ old('robots', $setting?->robots) === 'noindex, nofollow' ? 'selected' : '' }}>
                            Noindex, Nofollow
                        </option>

                    </select>

                </div>

            </div>

        </div>

    </div>


    {{-- =================================================
         05 — OPEN GRAPH
    ================================================== --}}

    <div class="admin-settings-section">

        <div class="admin-section-header">

            <div>

                <p class="section-label">
                    05 — OPEN GRAPH
                </p>

                <h2>
                    Social Sharing
                </h2>

                <p>
                    Control the title and description shown
                    when your website is shared on social media.
                </p>

            </div>

        </div>


        <div class="admin-settings-card">


            {{-- OG TITLE --}}

            <div class="admin-form-group">

                <label for="og_title">
                    OG Title
                </label>

                <input
                    type="text"
                    id="og_title"
                    name="og_title"
                    value="{{ old('og_title', $setting?->og_title) }}"
                    placeholder="Xclip - Business Solutions">

            </div>


            {{-- OG DESCRIPTION --}}

            <div class="admin-form-group">

                <label for="og_description">
                    OG Description
                </label>

                <textarea
                    id="og_description"
                    name="og_description"
                    rows="4"
                    maxlength="500"
                    placeholder="Description shown when your website is shared...">{{ old('og_description', $setting?->og_description) }}</textarea>

            </div>

        </div>

    </div>


    {{-- =================================================
         06 — GOOGLE TOOLS
    ================================================== --}}

    <div class="admin-settings-section">

        <div class="admin-section-header">

            <div>

                <p class="section-label">
                    06 — GOOGLE TOOLS
                </p>

                <h2>
                    Analytics & Verification
                </h2>

                <p>
                    Connect Google services to your website.
                </p>

            </div>

        </div>


        <div class="admin-settings-card">

            <div class="admin-form-row">


                {{-- GOOGLE ANALYTICS --}}

                <div class="admin-form-group">

                    <label for="google_analytics_id">
                        Google Analytics ID
                    </label>

                    <input
                        type="text"
                        id="google_analytics_id"
                        name="google_analytics_id"
                        value="{{ old('google_analytics_id', $setting?->google_analytics_id) }}"
                        placeholder="G-XXXXXXXXXX">

                </div>


                {{-- GOOGLE VERIFICATION --}}

                <div class="admin-form-group">

                    <label for="google_site_verification">
                        Google Site Verification
                    </label>

                    <input
                        type="text"
                        id="google_site_verification"
                        name="google_site_verification"
                        value="{{ old('google_site_verification', $setting?->google_site_verification) }}"
                        placeholder="Verification code">

                </div>

            </div>

        </div>

    </div>


    {{-- =================================================
         07 — GOOGLE MAPS
    ================================================== --}}

    <div class="admin-settings-section">

        <div class="admin-section-header">

            <div>

                <p class="section-label">
                    07 — GOOGLE MAPS
                </p>

                <h2>
                    Office Location
                </h2>

                <p>
                    Set the Google Maps location displayed
                    on the Contact page.
                </p>

            </div>

        </div>


        <div class="admin-settings-card">

            <div class="admin-form-group">

                <label for="google_maps_embed">
                    Google Maps Embed URL
                </label>

                <textarea
                    id="google_maps_embed"
                    name="google_maps_embed"
                    rows="4"
                    placeholder="https://www.google.com/maps/embed?pb=...">{{ old('google_maps_embed', $setting?->google_maps_embed) }}</textarea>

                <small class="admin-form-help">
                    Paste the Google Maps Embed URL here.
                </small>

            </div>

        </div>

    </div>


    {{-- =================================================
         SAVE SETTINGS
    ================================================== --}}

    <div class="admin-settings-actions">

        <button
            type="submit"
            class="admin-btn admin-btn-primary">

            Save Settings →

        </button>

    </div>

</form>

@endsection