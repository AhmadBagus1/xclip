@extends('layouts.admin')

@section('title', 'Detail Pesan - Xclip')
@section('page-title', 'Detail Pesan')

@section('content')

<div class="admin-page-header">

    <div>

        <p class="admin-topbar-label">
            PESAN KONTAK
        </p>

        <h2>
            Detail Pesan.
        </h2>

        <p>
            Lihat informasi lengkap pesan yang dikirim
            melalui website Xclip.
        </p>

    </div>


    <a
        href="{{ route('admin.messages.index') }}"
        class="admin-view-link">

        ← Kembali ke Pesan

    </a>

</div>


@if(session('success'))

<div class="admin-alert">
    {{ session('success') }}
</div>

@endif


<div class="admin-message-detail">

    <div class="admin-detail-card">


        {{-- =====================================================
             MESSAGE HEADER
        ====================================================== --}}

        <div class="admin-detail-header">

            <div>

                <span class="admin-detail-label">
                    SUBJEK
                </span>

                <h3>
                    {{ $message->subject ?? '-' }}
                </h3>

            </div>


            <div>

                @if($message->status === 'new')

                <span class="admin-status admin-status-new">
                    NEW
                </span>

                @else

                <span class="admin-status admin-status-read">
                    READ
                </span>

                @endif

            </div>

        </div>


        {{-- =====================================================
             SENDER INFORMATION
        ====================================================== --}}

        <div class="admin-detail-section">

            <div class="admin-detail-section-title">

                <span>
                    01
                </span>

                Informasi Pengirim

            </div>


            <div class="admin-detail-grid">


                <div class="admin-detail-item">

                    <span class="admin-detail-label">
                        NAMA
                    </span>

                    <strong>
                        {{ $message->name ?? '-' }}
                    </strong>

                </div>


                <div class="admin-detail-item">

                    <span class="admin-detail-label">
                        EMAIL
                    </span>

                    <a href="mailto:{{ $message->email }}">

                        {{ $message->email ?? '-' }}

                    </a>

                </div>


                @if($message->phone)

                <div class="admin-detail-item">

                    <span class="admin-detail-label">
                        TELEPON / WHATSAPP
                    </span>

                    <a href="tel:{{ $message->phone }}">

                        {{ $message->phone }}

                    </a>

                </div>

                @endif


                @if(isset($message->company) && $message->company)

                <div class="admin-detail-item">

                    <span class="admin-detail-label">
                        PERUSAHAAN
                    </span>

                    <strong>
                        {{ $message->company }}
                    </strong>

                </div>

                @endif

            </div>

        </div>


        {{-- =====================================================
             MESSAGE
        ====================================================== --}}

        <div class="admin-detail-section">

            <div class="admin-detail-section-title">

                <span>
                    02
                </span>

                Pesan

            </div>


            <div class="admin-message-content">

                {{ $message->message ?? '-' }}

            </div>

        </div>


        {{-- =====================================================
             INFORMATION
        ====================================================== --}}

        <div class="admin-detail-section">

            <div class="admin-detail-section-title">

                <span>
                    03
                </span>

                Informasi

            </div>


            <div class="admin-detail-grid">

                <div class="admin-detail-item">

                    <span class="admin-detail-label">
                        DITERIMA
                    </span>

                    <strong>

                        {{ $message->created_at->format('d M Y, H:i') }}

                    </strong>

                </div>


                <div class="admin-detail-item">

                    <span class="admin-detail-label">
                        TERAKHIR DIPERBARUI
                    </span>

                    <strong>

                        {{ $message->updated_at->format('d M Y, H:i') }}

                    </strong>

                </div>

            </div>

        </div>


        {{-- =====================================================
             ACTIONS
        ====================================================== --}}

        <div class="admin-detail-actions">

            <form
                action="{{ route('admin.messages.destroy', $message) }}"
                method="POST"
                onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?');">

                @csrf

                @method('DELETE')


                <button
                    type="submit"
                    class="admin-btn admin-btn-danger">

                    Hapus Pesan

                </button>

            </form>

        </div>


    </div>

</div>

@endsection