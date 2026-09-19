@extends('layouts.admin')

@section('title', 'Detail Pesan - Xclip')

@section('page-title', 'Detail Pesan')

@section('content')

<div class="admin-page-header">

    <p class="admin-topbar-label">
        PESAN KONTAK
    </p>

    <h2>
        Detail Pesan.
    </h2>

    <p>
        Lihat informasi lengkap pesan yang dikirim melalui website Xclip.
    </p>


    <div style="margin-top: 15px;">

        <a
            href="{{ route('admin.messages.index') }}"
            class="admin-view-link">

            Kembali ke Pesan

        </a>

    </div>

</div>


{{-- =====================================================
     MESSAGE DETAIL
===================================================== --}}

<div class="admin-dashboard-section">

    <div class="message-detail-header">

        <div>

            <span class="admin-topbar-label">
                SUBJEK
            </span>

            <h2 class="message-detail-subject">
                {{ $message->subject ?? 'Tanpa Subjek' }}
            </h2>

        </div>


        <div class="message-header-actions">

            {{-- STATUS --}}
            @if($message->status === 'read')

            <span class="admin-status admin-status-read">
                READ
            </span>

            @else

            <span class="admin-status admin-status-new">
                NEW
            </span>

            @endif


            {{-- DELETE --}}
            <form
                action="{{ route('admin.messages.destroy', $message) }}"
                method="POST"
                class="swal-delete-form">

                @csrf

                @method('DELETE')

                <button
                    type="submit"
                    class="admin-delete-button">

                    Hapus

                </button>

            </form>

        </div>

    </div>


    <div class="message-divider"></div>


    {{-- =================================================
         SENDER INFORMATION
    ================================================= --}}

    <div class="message-section-title">

        <span class="message-section-number">
            01
        </span>

        <h3>
            Informasi Pengirim
        </h3>

    </div>


    <div class="rfq-admin-details">

        {{-- NAMA --}}
        <div class="rfq-detail-item">

            <span>
                NAMA
            </span>

            <strong>
                {{ $message->name ?? '-' }}
            </strong>

        </div>


        {{-- EMAIL --}}
        <div class="rfq-detail-item">

            <span>
                EMAIL
            </span>

            <strong>

                @if($message->email)

                <a
                    href="mailto:{{ $message->email }}"
                    class="message-email-link">

                    {{ $message->email }}

                </a>

                @else

                -

                @endif

            </strong>

        </div>


        {{-- PHONE --}}
        <div class="rfq-detail-item">

            <span>
                TELEPON / WHATSAPP
            </span>

            <strong>
                {{ $message->phone ?? '-' }}
            </strong>

        </div>


        {{-- TANGGAL --}}
        <div class="rfq-detail-item">

            <span>
                TANGGAL DITERIMA
            </span>

            <strong>
                {{ $message->created_at?->format('d M Y, H:i') ?? '-' }}
            </strong>

        </div>

    </div>


    {{-- =================================================
         MESSAGE
    ================================================= --}}

    <div class="message-section-title message-section-title-spaced">

        <span class="message-section-number">
            02
        </span>

        <h3>
            Isi Pesan
        </h3>

    </div>


    <div class="message-content">

        {{ $message->message ?? '-' }}

    </div>

</div>

@endsection