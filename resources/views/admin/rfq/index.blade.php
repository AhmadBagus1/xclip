@extends('layouts.admin')

@section('title', 'Manajemen RFQ - Xclip')

@section('page-title', 'Request a Quote')

@section('content')

<div class="admin-page-header">

    <p class="admin-topbar-label">
        REQUEST A QUOTE
    </p>

    <h2>
        Manajemen RFQ.
    </h2>

    <p>
        Kelola permintaan penawaran proyek yang dikirim melalui website Xclip.
    </p>

</div>


<div class="admin-dashboard-section">

    <div class="admin-section-header">

        <div>
            <h2>
                Permintaan Penawaran
            </h2>
        </div>

        <div>
            <span class="admin-status">
                {{ $rfqs->count() }} Permintaan
            </span>
        </div>

    </div>


    <div class="admin-table-wrapper">

        <table class="admin-table">

            <thead>

                <tr>
                    <th>#</th>
                    <th>PERUSAHAAN</th>
                    <th>KONTAK</th>
                    <th>PROYEK</th>
                    <th>LAYANAN</th>
                    <th>STATUS BACA</th>
                    <th>TANGGAL</th>
                    <th>AKSI</th>
                </tr>

            </thead>


            <tbody>

                @forelse($rfqs as $rfq)

                <tr>

                    {{-- NOMOR --}}
                    <td>
                        {{ $loop->iteration }}
                    </td>


                    {{-- PERUSAHAAN --}}
                    <td>

                        <strong>
                            {{ $rfq->company ?? '-' }}
                        </strong>

                        <br>

                        <small>
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
                        </small>

                    </td>


                    {{-- KONTAK --}}
                    <td>

                        <strong>
                            {{ $rfq->name ?? '-' }}
                        </strong>

                        <br>

                        <small>
                            {{ $rfq->email ?? '-' }}
                        </small>

                    </td>


                    {{-- PROYEK --}}
                    <td>
                        {{ $rfq->project_name ?? '-' }}
                    </td>


                    {{-- LAYANAN --}}
                    <td>

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

                    </td>


                    {{-- STATUS BACA --}}
                    <td>

                        @if($rfq->is_read)

                        <span class="admin-status admin-status-read">
                            READ
                        </span>

                        @else

                        <span class="admin-status admin-status-new">
                            NEW
                        </span>

                        @endif

                    </td>


                    {{-- TANGGAL --}}
                    <td>
                        {{ $rfq->created_at?->format('d M Y') ?? '-' }}
                    </td>


                    {{-- AKSI --}}
                    <td>

                        <a
                            href="{{ route('admin.rfq.show', $rfq) }}"
                            class="admin-view-link">

                            Lihat

                        </a>

                    </td>

                </tr>


                @empty

                <tr>

                    <td colspan="8">

                        <div class="admin-empty">

                            <span>
                                BELUM ADA RFQ
                            </span>

                            <p>
                                Belum ada permintaan penawaran yang diterima.
                            </p>

                        </div>

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection