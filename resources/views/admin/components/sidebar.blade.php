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

                <span>
                    Dashboard
                </span>

            </a>


            {{-- MESSAGES --}}
            <a
                href="{{ route('admin.messages.index') }}"
                class="admin-nav-item {{ request()->routeIs('admin.messages.*') ? 'active' : '' }}">

                <span>
                    Messages
                </span>

            </a>


            {{-- REQUEST A QUOTE --}}
            <a
                href="{{ route('admin.rfq.index') }}"
                class="admin-nav-item {{ request()->routeIs('admin.rfq.*') ? 'active' : '' }}">

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


            {{-- SERVICES --}}
            <a
                href="{{ route('admin.services.index') }}"
                class="admin-nav-item {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">

                <span>
                    Services
                </span>

            </a>


            {{-- PROJECTS --}}
            <a
                href="{{ route('admin.projects.index') }}"
                class="admin-nav-item {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">

                <span>
                    Projects
                </span>

            </a>


            {{-- NEWS --}}
            <a
                href="{{ route('admin.news.index') }}"
                class="admin-nav-item {{ request()->routeIs('admin.news.*') ? 'active' : '' }}">

                <span>
                    News
                </span>

            </a>


            {{-- DOWNLOADS --}}
            <a
                href="{{ route('admin.downloads.index') }}"
                class="admin-nav-item {{ request()->routeIs('admin.downloads.*') ? 'active' : '' }}">

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
                href="{{ route('admin.settings.index') }}"
                class="admin-nav-item {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">

                <span>
                    Settings
                </span>

            </a>

        </div>

    </nav>

</aside>