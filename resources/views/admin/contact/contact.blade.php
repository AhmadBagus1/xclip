@extends('layouts.admin')

@section('title', 'Pesan Kontak - Xclip')

@section('page-title', 'Messages')

@section('content')

<div class="admin-page-header">

    <p class="admin-topbar-label">
        PESAN KONTAK
    </p>

    <h2>
        Pesan Masuk.
    </h2>

    <p>
        Kelola pesan yang dikirim melalui halaman kontak website Xclip.
    </p>

</div>


<div class="admin-dashboard-section">

    <div class="admin-section-header">

        <div>

            <h2>
                Daftar Pesan
            </h2>

        </div>

        <div>

            <span class="admin-status">
                {{ $messages->count() }} Pesan
            </span>

        </div>

    </div>


    <div class="admin-table-wrapper">

        <table class="admin-table">

            <thead>

                <tr>
                    <th>#</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>SUBJEK</th>
                    <th>STATUS</th>
                    <th>TANGGAL</th>
                    <th>AKSI</th>
                </tr>

            </thead>


            <tbody>

                @forelse($messages as $message)

                <tr>

                    {{-- NOMOR --}}
                    <td>
                        {{ $loop->iteration }}
                    </td>


                    {{-- NAMA --}}
                    <td>

                        <strong>
                            {{ $message->name ?? '-' }}
                        </strong>

                        @if($message->phone)

                        <br>

                        <small>
                            {{ $message->phone }}
                        </small>

                        @endif

                    </td>


                    {{-- EMAIL --}}
                    <td>
                        {{ $message->email ?? '-' }}
                    </td>


                    {{-- SUBJECT --}}
                    <td>
                        {{ $message->subject ?? '-' }}
                    </td>


                    {{-- STATUS --}}
                    <td>

                        @if($message->status === 'read')

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
                        {{ $message->created_at?->format('d M Y') ?? '-' }}
                    </td>


                    {{-- AKSI --}}
                    <td>

                        <a
                            href="{{ route('admin.messages.show', $message) }}"
                            class="admin-view-link">

                            Lihat

                        </a>

                    </td>

                </tr>


                @empty

                <tr>

                    <td colspan="7">

                        <div class="admin-empty">

                            <span>
                                BELUM ADA PESAN
                            </span>

                            <p>
                                Belum ada pesan kontak yang diterima.
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