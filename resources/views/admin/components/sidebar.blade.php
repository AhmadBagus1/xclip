<aside class="admin-sidebar">

    {{-- =====================================================
         SIDEBAR BRAND
    ====================================================== --}}
    <div class="admin-sidebar-brand">

        <h2>
            XCLIP ADMIN
        </h2>

        <span>
            CONTROL PANEL
        </span>

    </div>


    {{-- =====================================================
         NAVIGATION
    ====================================================== --}}
    <nav class="admin-sidebar-nav">


        {{-- =================================================
             MAIN
        ================================================== --}}
        <div class="admin-nav-group">

            <p class="admin-nav-title">
                MAIN
            </p>


            {{-- DASHBOARD --}}
            <a
                href="{{ route('admin.dashboard') }}"
                class="admin-nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">

                <span class="admin-nav-number">
                    01
                </span>

                <span>
                    Dashboard
                </span>

            </a>


            {{-- MESSAGES --}}
            <a
                href="{{ route('admin.messages.index') }}"
                class="admin-nav-item {{ request()->routeIs('admin.messages.*') ? 'active' : '' }}">

                <span class="admin-nav-number">
                    02
                </span>

                <span>
                    Messages
                </span>

            </a>


            {{-- REQUEST A QUOTE --}}
            <a
                href="{{ route('admin.rfq.index') }}"
                class="admin-nav-item {{ request()->routeIs('admin.rfq.*') ? 'active' : '' }}">

                <span class="admin-nav-number">
                    03
                </span>

                <span>
                    Request a Quote
                </span>

            </a>

        </div>



        {{-- =================================================
             CONTENT
        ================================================== --}}
        <div class="admin-nav-group">

            <p class="admin-nav-title">
                CONTENT
            </p>


            {{-- PROJECTS --}}
            <a href="{{ route('admin.projects.index') }}"
                class="admin-nav-item {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">

                <span class="admin-nav-number">04</span>
                <span>Projects</span>

            </a>


            {{-- NEWS --}}
            <a
                href="{{ route('admin.news.index') }}"
                class="admin-nav-item {{ request()->routeIs('admin.news.*') ? 'active' : '' }}">
                <span class="admin-nav-number">05</span>
                <span>News</span>
            </a>


            {{-- DOWNLOADS --}}
            <a
                href="#"
                class="admin-nav-item">

                <span class="admin-nav-number">
                    06
                </span>

                <span>
                    Downloads
                </span>

            </a>

        </div>



        {{-- =================================================
             SYSTEM
        ================================================== --}}
        <div class="admin-nav-group">

            <p class="admin-nav-title">
                SYSTEM
            </p>


            {{-- SETTINGS --}}
            <a
                href="#"
                class="admin-nav-item">

                <span class="admin-nav-number">
                    07
                </span>

                <span>
                    Settings
                </span>

            </a>


            {{-- LOGOUT --}}
            <form
                method="POST"
                action="{{ route('admin.logout') }}">

                @csrf

                <button
                    type="submit"
                    class="admin-nav-item admin-logout">

                    <span class="admin-nav-number">
                        08
                    </span>

                    <span>
                        Logout
                    </span>

                </button>

            </form>

        </div>

    </nav>




</aside>