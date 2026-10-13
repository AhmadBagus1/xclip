<aside class="admin-sidebar" id="adminSidebar">

    {{-- BRAND --}}
    <div class="admin-sidebar-brand">

        {{-- Logo utama saat sidebar terbuka --}}
        <a href="{{ route('admin.dashboard') }}"
            class="admin-sidebar-brand-link"
            aria-label="Xclip Dashboard">
            <img
                src="{{ asset('images/xclip-logo-Photoroom-admin.png') }}"
                alt="Xclip"
                class="admin-sidebar-brand-logo">
        </a>

        {{-- Logo mini saat sidebar diperkecil --}}
        <span class="admin-sidebar-brand-mini" aria-hidden="true">
            <img
                src="{{ asset('images/xclip-sidebar-logo.png') }}"
                alt="">
        </span>

        {{-- Tombol toggle --}}
        <button
            type="button"
            class="admin-sidebar-toggle"
            id="adminSidebarToggle"
            aria-label="Perkecil sidebar"
            aria-controls="adminSidebar"
            aria-expanded="true"
            title="Perkecil sidebar">

            <!-- Ikon panah saat sidebar terbuka -->
            <svg
                class="sidebar-toggle-icon sidebar-toggle-icon-arrow"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true">
                <path d="m14 18-6-6 6-6" />
            </svg>

            <!-- Ikon hamburger saat sidebar diperkecil -->
            <svg
                class="sidebar-toggle-icon sidebar-toggle-icon-menu"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                aria-hidden="true">
                <path d="M4 6h16" />
                <path d="M4 12h16" />
                <path d="M4 18h16" />
            </svg>
        </button>

    </div>

    {{-- NAVIGATION --}}
    <nav class="admin-sidebar-nav">

        {{-- MAIN --}}
        <div class="admin-nav-group">
            <p class="admin-nav-title">MAIN</p>

            <a href="{{ route('admin.dashboard') }}"
                class="admin-nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                title="Dashboard">
                <svg class="admin-nav-icon" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.8"
                    stroke-linecap="round" stroke-linejoin="round"
                    aria-hidden="true">
                    <rect x="3" y="3" width="7" height="7" rx="1.5" />
                    <rect x="14" y="3" width="7" height="7" rx="1.5" />
                    <rect x="14" y="14" width="7" height="7" rx="1.5" />
                    <rect x="3" y="14" width="7" height="7" rx="1.5" />
                </svg>
                <span class="admin-nav-label">Dashboard</span>
            </a>

            <a href="{{ route('admin.messages.index') }}"
                class="admin-nav-item {{ request()->routeIs('admin.messages.*') ? 'active' : '' }}"
                title="Messages">
                <svg class="admin-nav-icon" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.8"
                    stroke-linecap="round" stroke-linejoin="round"
                    aria-hidden="true">
                    <path d="M21 11.5a8.4 8.4 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.4 8.4 0 0 1-3.8-.9L3 21l1.9-5.7a8.4 8.4 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.4 8.4 0 0 1 3.8-.9h.5a8.5 8.5 0 0 1 8 8v.5Z" />
                </svg>
                <span class="admin-nav-label">Messages</span>
            </a>

            <a href="{{ route('admin.rfq.index') }}"
                class="admin-nav-item {{ request()->routeIs('admin.rfq.*') ? 'active' : '' }}"
                title="Request a Quote">
                <svg class="admin-nav-icon" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.8"
                    stroke-linecap="round" stroke-linejoin="round"
                    aria-hidden="true">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8Z" />
                    <path d="M14 2v6h6M8 13h8M8 17h8" />
                </svg>
                <span class="admin-nav-label">Request a Quote</span>
            </a>
        </div>

        {{-- CONTENT --}}
        <div class="admin-nav-group">
            <p class="admin-nav-title">CONTENT</p>

            <a href="{{ route('admin.services.index') }}"
                class="admin-nav-item {{ request()->routeIs('admin.services.*') ? 'active' : '' }}"
                title="Services">
                <svg class="admin-nav-icon" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.8"
                    stroke-linecap="round" stroke-linejoin="round"
                    aria-hidden="true">
                    <path d="m12 3 9 5-9 5-9-5 9-5Z" />
                    <path d="m3 12 9 5 9-5M3 16l9 5 9-5" />
                </svg>
                <span class="admin-nav-label">Services</span>
            </a>

            <a href="{{ route('admin.projects.index') }}"
                class="admin-nav-item {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}"
                title="Projects">
                <svg class="admin-nav-icon" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.8"
                    stroke-linecap="round" stroke-linejoin="round"
                    aria-hidden="true">
                    <rect x="3" y="4" width="18" height="16" rx="2" />
                    <path d="M3 10h18M9 4v6" />
                </svg>
                <span class="admin-nav-label">Projects</span>
            </a>

            <a href="{{ route('admin.news.index') }}"
                class="admin-nav-item {{ request()->routeIs('admin.news.*') ? 'active' : '' }}"
                title="News">
                <svg class="admin-nav-icon" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.8"
                    stroke-linecap="round" stroke-linejoin="round"
                    aria-hidden="true">
                    <path d="M4 4h16v16H4z" />
                    <path d="M8 8h8M8 12h8M8 16h5" />
                </svg>
                <span class="admin-nav-label">News</span>
            </a>

            <a href="{{ route('admin.downloads.index') }}"
                class="admin-nav-item {{ request()->routeIs('admin.downloads.*') ? 'active' : '' }}"
                title="Downloads">
                <svg class="admin-nav-icon" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.8"
                    stroke-linecap="round" stroke-linejoin="round"
                    aria-hidden="true">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                    <path d="m7 10 5 5 5-5M12 15V3" />
                </svg>
                <span class="admin-nav-label">Downloads</span>
            </a>
        </div>

        {{-- SYSTEM --}}
        <div class="admin-nav-group">
            <p class="admin-nav-title">SYSTEM</p>

            <a href="{{ route('admin.settings.index') }}"
                class="admin-nav-item {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}"
                title="Settings">
                <svg class="admin-nav-icon" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.8"
                    stroke-linecap="round" stroke-linejoin="round"
                    aria-hidden="true">
                    <circle cx="12" cy="12" r="3" />
                    <path d="m19.4 15 .1.1 1.4 1.1-1.4 2.4-1.7-.6a8 8 0 0 1-1.8 1l-.3 1.8h-2.8l-.3-1.8a8 8 0 0 1-1.8-1l-1.7.6-1.4-2.4 1.4-1.1a8 8 0 0 1 0-2l-1.4-1.1 1.4-2.4 1.7.6a8 8 0 0 1 1.8-1l.3-1.8h2.8l.3 1.8a8 8 0 0 1 1.8 1l1.7-.6 1.4 2.4-1.4 1.1a8 8 0 0 1 0 1.9Z" />
                </svg>
                <span class="admin-nav-label">Settings</span>
            </a>
        </div>

    </nav>

</aside>

<script>
    (function() {
        const sidebar = document.getElementById('adminSidebar');
        const toggle = document.getElementById('adminSidebarToggle');
        const layout = document.querySelector('.admin-layout');

        if (!sidebar || !toggle || !layout) return;

        const storageKey = 'xclip-admin-sidebar-collapsed';

        function setSidebarState(collapsed) {
            layout.classList.toggle('sidebar-collapsed', collapsed);

            toggle.setAttribute('aria-expanded', String(!collapsed));
            toggle.setAttribute(
                'aria-label',
                collapsed ? 'Perbesar sidebar' : 'Perkecil sidebar'
            );
            toggle.setAttribute(
                'title',
                collapsed ? 'Perbesar sidebar' : 'Perkecil sidebar'
            );
        }

        let collapsed = false;

        try {
            collapsed = localStorage.getItem(storageKey) === 'true';
        } catch (error) {
            collapsed = false;
        }

        setSidebarState(collapsed);

        toggle.addEventListener('click', function() {
            collapsed = !layout.classList.contains('sidebar-collapsed');

            setSidebarState(collapsed);

            try {
                localStorage.setItem(storageKey, String(collapsed));
            } catch (error) {
                // Sidebar tetap berfungsi jika penyimpanan browser tidak tersedia.
            }
        });
    })();
</script>