@extends('layouts.app')

@section('title', 'Admin Login - Xclip')

@section('content')

<section class="admin-login">

    <div class="container">

        <div class="admin-login-box">

            <div class="admin-login-header">

                <p class="section-label">
                    XCLIP ADMIN
                </p>

                <h1>
                    Admin
                    <span>Login.</span>
                </h1>

                <p>
                    Login untuk mengakses dashboard
                    administrasi Xclip.
                </p>

            </div>

            {{-- ERROR --}}

            @if ($errors->any())

            <div class="admin-login-error">

                @foreach ($errors->all() as $error)

                <p>
                    {{ $error }}
                </p>

                @endforeach

            </div>

            @endif

            {{-- LOGIN FORM --}}

            <form action="{{ route('admin.login.submit') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="admin@xclip.com"
                        value="{{ old('email') }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Password"
                        required>
                </div>

                @if ($errors->any())
                <div class="login-error">
                    {{ $errors->first() }}
                </div>
                @endif

                <button type="submit" class="login-submit">
                    Login →
                </button>
            </form>
        </div>

    </div>

</section>

@endsection