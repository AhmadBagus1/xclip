<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Admin - Xclip')
    </title>

    @vite([
    'resources/css/app.css',
    'resources/css/admin/admin.css'
    ])

</head>


<body class="admin-body">

    <div class="admin-layout">

        {{-- SIDEBAR --}}
        @include('admin.components.sidebar')


        {{-- MAIN CONTENT --}}
        <main class="admin-main">

            {{-- TOP BAR --}}
            <header class="admin-topbar">

                {{-- PAGE TITLE --}}
                <div class="admin-topbar-heading">

                    <p class="admin-topbar-label">
                        XCLIP ADMIN
                    </p>

                    <h1>
                        @yield('page-title', 'Dashboard')
                    </h1>

                </div>


                {{-- ADMIN DROPDOWN --}}
                <details class="admin-user-dropdown">

                    <summary class="admin-user">

                        <div class="admin-user-avatar">
                            A
                        </div>

                        <div class="admin-user-info">

                            <strong>
                                Administrator
                            </strong>

                            <span>
                                Super Admin
                            </span>

                        </div>

                        <span class="admin-user-arrow">
                            ▼
                        </span>

                    </summary>


                    {{-- DROPDOWN MENU --}}
                    <div class="admin-user-menu">

                        <div class="admin-user-menu-header">

                            <strong>
                                Administrator
                            </strong>

                            <span>
                                Super Admin
                            </span>

                        </div>


                        {{-- LOGOUT --}}
                        <form
                            method="POST"
                            action="{{ route('admin.logout') }}">

                            @csrf

                            <button
                                type="submit"
                                class="admin-dropdown-logout">

                                <span>
                                    ↪
                                </span>

                                <span>
                                    Logout
                                </span>

                            </button>

                        </form>

                    </div>

                </details>

            </header>


            {{-- PAGE CONTENT --}}
            <div class="admin-content">

                @yield('content')

            </div>

        </main>

    </div>


    @vite('resources/js/app.js')

    @stack('scripts')

</body>

</html>