@extends('layouts.admin')

@section('title', 'Detail RFQ - Xclip')

@section('page-title', 'Detail RFQ')

@section('content')

<div class="admin-page-header">

    <p class="admin-topbar-label">
        REQUEST A QUOTE
    </p>

    <h2>
        Detail RFQ.
    </h2>

    <p>
        Tinjau informasi lengkap permintaan penawaran proyek
        yang dikirim melalui website Xclip.
    </p>

</div>


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


        <div class="rfq-header-actions">

            {{-- STATUS --}}
            @if($rfq->is_read)

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
                action="{{ route('admin.rfq.destroy', $rfq) }}"
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


    <div class="rfq-admin-details">

        {{-- NAMA PERUSAHAAN --}}
        <div class="rfq-detail-item">

            <span>
                NAMA PERUSAHAAN
            </span>

            <strong>
                {{ $rfq->company ?? '-' }}
            </strong>

        </div>


        {{-- JENIS PERUSAHAAN --}}
        <div class="rfq-detail-item">

            <span>
                JENIS PERUSAHAAN / ORGANISASI
            </span>

            <strong>

                @switch($rfq->company_type)

                @case('company')
                Perusahaan
                @break

                @case('private-company')
                Perusahaan Swasta
                @break

                @case('government')
                Pemerintah
                @break

                @case('government-agency')
                Instansi Pemerintah
                @break

                @case('organization')
                Organisasi
                @break

                @case('individual')
                Individu
                @break

                @case('other')
                Lainnya
                @break

                @default
                {{ $rfq->company_type ?? '-' }}

                @endswitch

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

        {{-- NAMA --}}
        <div class="rfq-detail-item">

            <span>
                NAMA KONTAK
            </span>

            <strong>
                {{ $rfq->name ?? '-' }}
            </strong>

        </div>


        {{-- JABATAN --}}
        <div class="rfq-detail-item">

            <span>
                JABATAN
            </span>

            <strong>
                {{ $rfq->position ?? '-' }}
            </strong>

        </div>


        {{-- EMAIL --}}
        <div class="rfq-detail-item">

            <span>
                EMAIL
            </span>

            <strong>
                {{ $rfq->email ?? '-' }}
            </strong>

        </div>


        {{-- TELEPON --}}
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

        {{-- NAMA PROYEK --}}
        <div class="rfq-detail-item">

            <span>
                NAMA PROYEK
            </span>

            <strong>
                {{ $rfq->project_name ?? '-' }}
            </strong>

        </div>


        {{-- LAYANAN --}}
        <div class="rfq-detail-item">

            <span>
                KATEGORI LAYANAN
            </span>

            <strong>

                @switch($rfq->service)

                @case('construction')
                Konstruksi
                @break

                @case('trade')
                Perdagangan
                @break

                @case('industrial')
                Industrial
                @break

                @case('professional')
                Jasa Profesional
                @break

                @case('other')
                Lainnya
                @break

                @default
                {{ $rfq->service ?? '-' }}

                @endswitch

            </strong>

        </div>


        {{-- LOKASI --}}
        <div class="rfq-detail-item">

            <span>
                LOKASI PROYEK
            </span>

            <strong>
                {{ $rfq->project_location ?? '-' }}
            </strong>

        </div>


        {{-- STATUS PROYEK --}}
        <div class="rfq-detail-item">

            <span>
                STATUS PROYEK
            </span>

            <strong>

                @switch($rfq->project_status)

                @case('planning')
                Perencanaan
                @break

                @case('tender')
                Tender
                @break

                @case('ready')
                Siap
                @break

                @case('ongoing')
                Sedang Berjalan
                @break

                @case('completed')
                Selesai
                @break

                @case('other')
                Lainnya
                @break

                @default
                {{ $rfq->project_status ?? '-' }}

                @endswitch

            </strong>

        </div>


        {{-- BUDGET --}}
        <div class="rfq-detail-item">

            <span>
                PERKIRAAN ANGGARAN
            </span>

            <strong>

                @switch($rfq->budget)

                @case('under-100m')
                Di bawah Rp100 Juta
                @break

                @case('100m-500m')
                Rp100 Juta – Rp500 Juta
                @break

                @case('500m-1b')
                Rp500 Juta – Rp1 Miliar
                @break

                @case('1b-5b')
                Rp1 Miliar – Rp5 Miliar
                @break

                @case('above-5b')
                Di atas Rp5 Miliar
                @break

                @case('not-decided')
                Belum Ditentukan
                @break

                @default
                {{ $rfq->budget ?? 'Belum Ditentukan' }}

                @endswitch

            </strong>

        </div>


        {{-- TIMELINE --}}
        <div class="rfq-detail-item">

            <span>
                PERKIRAAN WAKTU PELAKSANAAN
            </span>

            <strong>

                @switch($rfq->timeline)

                @case('less-1-month')
                Kurang dari 1 Bulan
                @break

                @case('1-3-months')
                1 – 3 Bulan
                @break

                @case('3-6-months')
                3 – 6 Bulan
                @break

                @case('6-12-months')
                6 – 12 Bulan
                @break

                @case('more-12-months')
                Lebih dari 12 Bulan
                @break

                @default
                {{ $rfq->timeline ?? 'Belum Ditentukan' }}

                @endswitch

            </strong>

        </div>

    </div>

</div>


{{-- =====================================================
     DESCRIPTION
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
     DOCUMENT
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
     BACK
===================================================== --}}

<div style="margin-top: 30px;">

    <a
        href="{{ route('admin.rfq.index') }}"
        class="admin-view-link">

        Kembali ke Daftar RFQ

    </a>

</div>

@endsection