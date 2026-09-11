@extends('layouts.admin')

@section('title', 'Detail RFQ - Xclip')

@section('content')

<div class="admin-page-header">

    <p class="admin-topbar-label">
        REQUEST A QUOTE
    </p>

    <h2>
        Detail RFQ.
    </h2>

    <p>
        Tinjau informasi permintaan penawaran proyek
        yang dikirim melalui website Xclip.
    </p>

</div>


@if(session('success'))

<div class="admin-alert">
    {{ session('success') }}
</div>

@endif


{{-- =====================================================
     COMPANY INFORMATION
===================================================== --}}

<div class="admin-dashboard-section">

    <div class="admin-section-header">

        <div>

            <h2>
                Informasi Perusahaan
            </h2>

        </div>

        <div>

            @if($rfq->is_read)

            <span class="admin-status admin-status-read">
                READ
            </span>

            @else

            <span class="admin-status admin-status-new">
                NEW
            </span>

            @endif

        </div>

    </div>


    <div class="rfq-admin-details">

        <div class="rfq-detail-item">

            <span>
                NAMA PERUSAHAAN
            </span>

            <strong>
                {{ $rfq->company ?? '-' }}
            </strong>

        </div>


        <div class="rfq-detail-item">

            <span>
                JENIS PERUSAHAAN / ORGANISASI
            </span>

            <strong>
                {{ $rfq->company_type ?? '-' }}
            </strong>

        </div>

    </div>

</div>


{{-- =====================================================
     CONTACT INFORMATION
===================================================== --}}

<div class="admin-dashboard-section">

    <div class="admin-section-header">

        <div>

            <h2>
                Informasi Kontak
            </h2>

        </div>

    </div>


    <div class="rfq-admin-details">

        <div class="rfq-detail-item">

            <span>
                NAMA KONTAK
            </span>

            <strong>
                {{ $rfq->name ?? '-' }}
            </strong>

        </div>


        <div class="rfq-detail-item">

            <span>
                JABATAN
            </span>

            <strong>
                {{ $rfq->position ?? '-' }}
            </strong>

        </div>


        <div class="rfq-detail-item">

            <span>
                EMAIL
            </span>

            <strong>
                {{ $rfq->email ?? '-' }}
            </strong>

        </div>


        <div class="rfq-detail-item">

            <span>
                TELEPON / WHATSAPP
            </span>

            <strong>
                {{ $rfq->phone ?? '-' }}
            </strong>

        </div>

    </div>

</div>


{{-- =====================================================
     PROJECT INFORMATION
===================================================== --}}

<div class="admin-dashboard-section">

    <div class="admin-section-header">

        <div>

            <h2>
                Informasi Proyek
            </h2>

        </div>

    </div>


    <div class="rfq-admin-details">

        <div class="rfq-detail-item">

            <span>
                NAMA PROYEK
            </span>

            <strong>
                {{ $rfq->project_name ?? '-' }}
            </strong>

        </div>


        <div class="rfq-detail-item">

            <span>
                KATEGORI LAYANAN
            </span>

            <strong>
                {{ $rfq->service ?? '-' }}
            </strong>

        </div>


        <div class="rfq-detail-item">

            <span>
                LOKASI PROYEK
            </span>

            <strong>
                {{ $rfq->project_location ?? '-' }}
            </strong>

        </div>


        <div class="rfq-detail-item">

            <span>
                STATUS PROYEK
            </span>

            <strong>
                {{ $rfq->project_status ?? '-' }}
            </strong>

        </div>


        <div class="rfq-detail-item">

            <span>
                PERKIRAAN ANGGARAN
            </span>

            <strong>
                {{ $rfq->budget ?? 'Belum ditentukan' }}
            </strong>

        </div>


        <div class="rfq-detail-item">

            <span>
                PERKIRAAN WAKTU PELAKSANAAN
            </span>

            <strong>
                {{ $rfq->timeline ?? 'Belum ditentukan' }}
            </strong>

        </div>

    </div>

</div>


{{-- =====================================================
     PROJECT DESCRIPTION
===================================================== --}}

<div class="admin-dashboard-section">

    <div class="admin-section-header">

        <div>

            <h2>
                Deskripsi Proyek
            </h2>

        </div>

    </div>


    <div class="rfq-description">

        {{ $rfq->description ?? '-' }}

    </div>

</div>


{{-- =====================================================
     SUPPORTING DOCUMENT
===================================================== --}}

<div class="admin-dashboard-section">

    <div class="admin-section-header">

        <div>

            <h2>
                Dokumen Pendukung
            </h2>

        </div>

    </div>


    @if($rfq->document)

    <a
        href="{{ asset('storage/' . $rfq->document) }}"
        target="_blank"
        class="admin-view-link">

        Lihat / Unduh Dokumen →

    </a>

    @else

    <p>
        Tidak ada dokumen pendukung yang dilampirkan.
    </p>

    @endif

</div>


{{-- =====================================================
     DELETE
===================================================== --}}

<div class="admin-dashboard-section">

    <form
        action="{{ route('admin.rfq.destroy', $rfq) }}"
        method="POST"
        onsubmit="return confirm('Apakah Anda yakin ingin menghapus RFQ ini?');">

        @csrf

        @method('DELETE')


        <button
            type="submit"
            class="admin-view-link">

            Hapus RFQ

        </button>

    </form>

</div>


{{-- =====================================================
     BACK
===================================================== --}}

<div style="margin-top: 30px;">

    <a
        href="{{ route('admin.rfq.index') }}"
        class="admin-view-link">

        ← Kembali ke Daftar RFQ

    </a>

</div>

@endsection