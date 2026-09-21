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


    {{-- =========================================================
         ADMIN CSS
    ========================================================== --}}

    @vite([
    'resources/css/app.css',
    'resources/css/admin/admin.css'
    ])

</head>


<body class="admin-body">

    <div class="admin-layout">


        {{-- =====================================================
             SIDEBAR
        ====================================================== --}}

        @include('admin.components.sidebar')


        {{-- =====================================================
             MAIN CONTENT
        ====================================================== --}}

        <main class="admin-main">


            {{-- =================================================
                 TOP BAR
            ================================================== --}}

            <header class="admin-topbar">


                {{-- =================================================
                     PAGE TITLE
                ================================================== --}}

                <div class="admin-topbar-heading">

                    <p class="admin-topbar-label">
                        XCLIP ADMIN
                    </p>

                    <h1>
                        @yield('page-title', 'Dashboard')
                    </h1>

                </div>


                {{-- =================================================
                     ADMIN PROFILE DROPDOWN
                ================================================== --}}

                <div class="admin-profile-dropdown">


                    {{-- =================================================
                         PROFILE BUTTON
                    ================================================== --}}

                    <button
                        type="button"
                        class="admin-user"
                        onclick="toggleAdminProfileMenu()"
                        aria-label="Open admin profile menu">

                        {{-- PROFILE PHOTO --}}

                        <div class="admin-user-avatar">

                            @if(auth()->user()->profile_photo)

                            <img
                                src="{{ asset('storage/' . auth()->user()->profile_photo) }}"
                                alt="{{ auth()->user()->name }}">

                            @else

                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                            @endif

                        </div>


                        {{-- USER INFORMATION --}}

                        <div class="admin-user-info">

                            <strong>
                                {{ auth()->user()->name }}
                            </strong>

                            <span>
                                Super Admin
                            </span>

                        </div>


                        {{-- ARROW --}}

                        <span class="admin-user-arrow">
                            ▼
                        </span>

                    </button>


                    {{-- =================================================
                         FLOATING PROFILE MENU
                    ================================================== --}}

                    <div
                        id="adminProfileMenu"
                        class="admin-profile-menu">


                        {{-- PROFILE --}}

                        <a
                            href="{{ route('admin.profile.index') }}"
                            class="admin-profile-menu-item">

                            <span class="admin-profile-menu-icon">
                                ◎
                            </span>

                            <span>
                                Profile
                            </span>

                        </a>


                        {{-- LOGOUT --}}

                        <button
                            type="button"
                            class="admin-profile-menu-item admin-profile-menu-logout"
                            onclick="openLogoutModal()">

                            <span class="admin-profile-menu-icon">
                                ↪
                            </span>

                            <span>
                                Logout
                            </span>

                        </button>


                    </div>

                </div>


            </header>


            {{-- =================================================
                 PAGE CONTENT
            ================================================== --}}

            <div class="admin-content">

                @yield('content')

            </div>


        </main>

    </div>


    {{-- =========================================================
         LOGOUT MODAL
    ========================================================== --}}

    <div
        id="logoutModal"
        class="logout-modal"
        aria-hidden="true">

        <div
            class="logout-modal-content"
            role="dialog"
            aria-modal="true"
            aria-labelledby="logoutModalTitle">


            {{-- =================================================
                 CLOSE BUTTON
            ================================================== --}}

            <button
                type="button"
                class="logout-modal-close"
                onclick="closeLogoutModal()"
                aria-label="Close">

                ×

            </button>


            {{-- =================================================
                 ICON
            ================================================== --}}

            <div class="logout-icon">
                ↪
            </div>


            {{-- =================================================
                 TITLE
            ================================================== --}}

            <h2 id="logoutModalTitle">
                Logout?
            </h2>


            {{-- =================================================
                 DESCRIPTION
            ================================================== --}}

            <p>
                Apakah kamu yakin ingin keluar dari halaman admin?
            </p>


            {{-- =================================================
                 ACTION BUTTONS
            ================================================== --}}

            <div class="logout-modal-actions">


                {{-- CANCEL --}}

                <button
                    type="button"
                    class="logout-cancel"
                    onclick="closeLogoutModal()">

                    Cancel

                </button>


                {{-- LOGOUT --}}

                <form
                    method="POST"
                    action="{{ route('admin.logout') }}">

                    @csrf

                    <button
                        type="submit"
                        class="logout-confirm">

                        Logout

                    </button>

                </form>


            </div>


        </div>

    </div>


    {{-- =========================================================
         VITE JAVASCRIPT
    ========================================================== --}}

    @vite('resources/js/app.js')


    {{-- =========================================================
         SWEETALERT2
    ========================================================== --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    {{-- =========================================================
         PAGE SCRIPTS
    ========================================================== --}}

    @stack('scripts')


    {{-- =========================================================
         ADMIN PROFILE DROPDOWN
    ========================================================== --}}

    <script>
        function toggleAdminProfileMenu() {

            const dropdown =
                document.querySelector(
                    '.admin-profile-dropdown'
                );

            if (!dropdown) {
                return;
            }

            dropdown.classList.toggle('open');

        }


        document.addEventListener(
            'click',
            function(event) {

                const dropdown =
                    document.querySelector(
                        '.admin-profile-dropdown'
                    );

                if (!dropdown) {
                    return;
                }

                if (!dropdown.contains(event.target)) {

                    dropdown.classList.remove('open');

                }

            }
        );


        document.addEventListener(
            'keydown',
            function(event) {

                if (event.key === 'Escape') {

                    const dropdown =
                        document.querySelector(
                            '.admin-profile-dropdown'
                        );

                    if (dropdown) {

                        dropdown.classList.remove('open');

                    }

                }

            }
        );
    </script>


    {{-- =========================================================
         LOGOUT MODAL
    ========================================================== --}}

    <script>
        function openLogoutModal() {

            /*
             * Close profile dropdown
             */

            const dropdown =
                document.querySelector(
                    '.admin-profile-dropdown'
                );

            if (dropdown) {

                dropdown.classList.remove('open');

            }


            /*
             * Open modal
             */

            const modal =
                document.getElementById(
                    'logoutModal'
                );

            if (!modal) {
                return;
            }

            modal.classList.add('active');

            modal.setAttribute(
                'aria-hidden',
                'false'
            );

            document.body.classList.add(
                'modal-open'
            );

        }


        function closeLogoutModal() {

            const modal =
                document.getElementById(
                    'logoutModal'
                );

            if (!modal) {
                return;
            }

            modal.classList.remove('active');

            modal.setAttribute(
                'aria-hidden',
                'true'
            );

            document.body.classList.remove(
                'modal-open'
            );

        }


        const logoutModal =
            document.getElementById(
                'logoutModal'
            );

        if (logoutModal) {

            logoutModal.addEventListener(
                'click',
                function(event) {

                    if (event.target === this) {

                        closeLogoutModal();

                    }

                }
            );

        }


        document.addEventListener(
            'keydown',
            function(event) {

                if (event.key === 'Escape') {

                    closeLogoutModal();

                }

            }
        );
    </script>


    {{-- =========================================================
         SWEETALERT DELETE CONFIRMATION
    ========================================================== --}}

    <script>
        document.addEventListener(
            'DOMContentLoaded',
            function() {

                const deleteForms =
                    document.querySelectorAll(
                        '.swal-delete-form'
                    );


                deleteForms.forEach(
                    function(form) {

                        form.addEventListener(
                            'submit',
                            function(event) {

                                event.preventDefault();


                                Swal.fire({

                                    title: 'Hapus data ini?',

                                    text: 'Data yang dihapus tidak dapat dikembalikan.',

                                    icon: 'warning',

                                    showCancelButton: true,

                                    confirmButtonColor: '#1f2937',

                                    cancelButtonColor: '#dc2626',

                                    confirmButtonText: 'Ya, Hapus',

                                    cancelButtonText: 'Batal',

                                    reverseButtons: true,

                                    customClass: {

                                        popup: 'xclip-swal-popup',

                                        title: 'xclip-swal-title',

                                        htmlContainer: 'xclip-swal-text',

                                        confirmButton: 'xclip-swal-confirm',

                                        cancelButton: 'xclip-swal-cancel'

                                    }

                                }).then(
                                    function(result) {

                                        if (
                                            result.isConfirmed
                                        ) {

                                            form.submit();

                                        }

                                    }
                                );

                            }
                        );

                    }
                );

            }
        );
    </script>


    {{-- =========================================================
         SWEETALERT DELETE SUCCESS
    ========================================================== --}}

    @if(session('delete_success'))

    <script>
        document.addEventListener(
            'DOMContentLoaded',
            function() {

                Swal.fire({

                    title: 'Berhasil Dihapus',

                    text: '{{ session('
                    delete_success ') }}',

                    icon: 'success',

                    confirmButtonColor: '#1f2937',

                    confirmButtonText: 'OK',

                    customClass: {

                        popup: 'xclip-swal-popup',

                        title: 'xclip-swal-title',

                        htmlContainer: 'xclip-swal-text',

                        confirmButton: 'xclip-swal-confirm'

                    }

                });

            }
        );
    </script>

    @endif


</body>

</html>