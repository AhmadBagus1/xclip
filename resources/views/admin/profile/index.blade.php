@extends('layouts.admin')

@section('title', 'Profile - Xclip Admin')

@section('page-title', 'Profile')

@section('content')

<div class="admin-page-header">

    <div>

        <p class="section-label">
            XCLIP ADMIN PANEL
        </p>

        <h2>
            Profile.
        </h2>

        <p>
            Kelola informasi akun Super Admin,
            foto profil, dan password.
        </p>

    </div>

</div>


{{-- =========================================================
     SUCCESS MESSAGE
========================================================= --}}

@if(session('success'))

<div class="admin-alert admin-alert-success">

    {{ session('success') }}

</div>

@endif


{{-- =========================================================
     ERROR MESSAGE
========================================================= --}}

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


{{-- =========================================================
     PROFILE
========================================================= --}}

<div class="admin-profile-layout">


    {{-- =====================================================
         PROFILE CARD
    ====================================================== --}}

    <div class="admin-profile-card">


        {{-- PROFILE HEADER --}}

        <div class="admin-profile-card-header">

            <p class="section-label">
                ACCOUNT
            </p>

            <h2>
                Administrator
            </h2>

            <span class="admin-profile-role">
                SUPER ADMIN
            </span>

        </div>


        {{-- PROFILE PHOTO --}}

        <div class="admin-profile-photo-wrapper">

            @if($user->profile_photo)

            <img
                src="{{ asset('storage/' . $user->profile_photo) }}"
                alt="{{ $user->name }}"
                class="admin-profile-photo">

            @else

            <div class="admin-profile-photo-placeholder">

                {{ strtoupper(substr($user->name, 0, 1)) }}

            </div>

            @endif

        </div>


        <div class="admin-profile-summary">

            <strong>
                {{ $user->name }}
            </strong>

            <span>
                {{ $user->email }}
            </span>

        </div>


    </div>


    {{-- =====================================================
         PROFILE FORM
    ====================================================== --}}

    <div class="admin-profile-form-card">

        <div class="admin-profile-form-header">

            <p class="section-label">
                ACCOUNT SETTINGS
            </p>

            <h2>
                Edit Profile.
            </h2>

            <p>
                Update your name, profile photo,
                or account password.
            </p>

        </div>


        <form
            action="{{ route('admin.profile.update') }}"
            method="POST"
            enctype="multipart/form-data">

            @csrf

            @method('PUT')


            {{-- =================================================
                 PERSONAL INFORMATION
            ================================================== --}}

            <div class="admin-profile-section">

                <div class="admin-profile-section-title">

                    <span>
                        01
                    </span>

                    <h3>
                        Personal Information
                    </h3>

                </div>


                {{-- NAME --}}

                <div class="admin-form-group">

                    <label for="name">
                        Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name', $user->name) }}"
                        placeholder="Administrator"
                        required>

                    @error('name')

                    <small class="admin-field-error">
                        {{ $message }}
                    </small>

                    @enderror

                </div>


                {{-- EMAIL --}}

                <div class="admin-form-group">

                    <label for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        value="{{ $user->email }}"
                        readonly>

                    <small class="admin-form-help">
                        Email digunakan untuk login dan tidak dapat diubah.
                    </small>

                </div>


                {{-- PROFILE PHOTO --}}

                <div class="admin-form-group">

                    <label for="profile_photo">
                        Profile Photo
                    </label>

                    <input
                        type="file"
                        id="profile_photo"
                        name="profile_photo"
                        accept=".jpg,.jpeg,.png,.webp">

                    <small class="admin-form-help">
                        JPG, JPEG, PNG, atau WEBP. Maksimal 5 MB.
                    </small>

                    @error('profile_photo')

                    <small class="admin-field-error">
                        {{ $message }}
                    </small>

                    @enderror

                </div>

            </div>


            {{-- =================================================
                 PASSWORD
            ================================================== --}}

            <div class="admin-profile-section">

                <div class="admin-profile-section-title">

                    <span>
                        02
                    </span>

                    <h3>
                        Change Password
                    </h3>

                </div>


                <div class="admin-profile-password-note">

                    <strong>
                        Password change
                    </strong>

                    <span>
                        Kosongkan bagian password jika
                        tidak ingin mengganti password.
                    </span>

                </div>


                {{-- CURRENT PASSWORD --}}

                <div class="admin-form-group">

                    <label for="current_password">
                        Current Password
                    </label>

                    <input
                        type="password"
                        id="current_password"
                        name="current_password"
                        placeholder="Enter current password"
                        autocomplete="current-password">

                    @error('current_password')

                    <small class="admin-field-error">
                        {{ $message }}
                    </small>

                    @enderror

                </div>


                {{-- NEW PASSWORD --}}

                <div class="admin-form-group">

                    <label for="password">
                        New Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter new password"
                        autocomplete="new-password">

                    @error('password')

                    <small class="admin-field-error">
                        {{ $message }}
                    </small>

                    @enderror

                </div>


                {{-- CONFIRM PASSWORD --}}

                <div class="admin-form-group">

                    <label for="password_confirmation">
                        Confirm New Password
                    </label>

                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Confirm new password"
                        autocomplete="new-password">

                </div>

            </div>


            {{-- =================================================
                 FORM ACTION
            ================================================== --}}

            <div class="admin-profile-actions">

                <a
                    href="{{ route('admin.dashboard') }}"
                    class="admin-button">

                    Back to Dashboard

                </a>


                <button
                    type="submit"
                    class="admin-btn admin-btn-primary">

                    Save Changes

                </button>

            </div>


        </form>

    </div>

</div>

@endsection