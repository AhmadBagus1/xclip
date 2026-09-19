<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>
        Admin Login - Xclip
    </title>

    @vite([
    'resources/css/app.css',
    'resources/css/admin/admin.css'
    ])

</head>


<body class="admin-login-body">

    <main class="admin-login-page">

        <div class="admin-login-container">


            {{-- =====================================================
                 LOGIN BRAND
            ====================================================== --}}

            <div class="admin-login-brand">

                <div class="admin-login-brand-mark">
                    X
                </div>

                <div>

                    <strong>
                        XCLIP ADMIN
                    </strong>

                    <span>
                        CONTROL PANEL
                    </span>

                </div>

            </div>


            {{-- =====================================================
                 LOGIN CARD
            ====================================================== --}}

            <div class="admin-login-card">


                {{-- HEADER --}}

                <div class="admin-login-header">

                    <p class="section-label">
                        ADMIN ACCESS
                    </p>

                    <h1>
                        Welcome
                        <span>Back.</span>
                    </h1>

                    <p>
                        Login untuk mengakses
                        dashboard administrasi Xclip.
                    </p>

                </div>


                {{-- =================================================
                     ERROR
                ================================================== --}}

                @if ($errors->any())

                <div class="admin-login-error">

                    <div class="admin-login-error-icon">
                        !
                    </div>

                    <div>

                        @foreach ($errors->all() as $error)

                        <p>
                            {{ $error }}
                        </p>

                        @endforeach

                    </div>

                </div>

                @endif


                {{-- =================================================
                     LOGIN FORM
                ================================================== --}}

                <form
                    action="{{ route('admin.login.submit') }}"
                    method="POST"
                    class="admin-login-form">

                    @csrf


                    {{-- EMAIL --}}

                    <div class="admin-login-form-group">

                        <label for="email">
                            Email Address
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="admin@xclip.com"
                            autocomplete="email"
                            required>

                    </div>


                    {{-- PASSWORD --}}

                    <div class="admin-login-form-group">

                        <label for="password">
                            Password
                        </label>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Enter your password"
                            autocomplete="current-password"
                            required>

                    </div>


                    {{-- SUBMIT --}}

                    <button
                        type="submit"
                        class="admin-login-submit">

                        <span>
                            Login
                        </span>

                        <span>

                        </span>

                    </button>

                </form>


                {{-- =================================================
                     FOOTER CARD
                ================================================== --}}

                <div class="admin-login-card-footer">

                    <span>
                        XCLIP
                    </span>

                    <span>
                        SECURE ADMIN AREA
                    </span>

                </div>

            </div>


            {{-- =====================================================
                 PAGE FOOTER
            ====================================================== --}}

            <div class="admin-login-page-footer">

                <span>
                    © {{ date('Y') }} Xclip
                </span>

                <span>
                    Administrator Access
                </span>

            </div>

        </div>

    </main>


    @vite('resources/js/app.js')

</body>

</html>