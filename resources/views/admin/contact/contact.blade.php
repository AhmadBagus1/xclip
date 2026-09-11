@extends('layouts.admin')

@section('title', 'Pesan Kontak - Xclip')

@section('content')

<div class="admin-page-header">

    <p class="admin-topbar-label">
        MANAJEMEN KONTAK
    </p>

    <h2>
        Pesan Kontak.
    </h2>

    <p>
        Kelola pesan dan pertanyaan yang dikirim
        melalui formulir kontak website Xclip.
    </p>

</div>


@if(session('success'))

<div class="admin-alert">
    {{ session('success') }}
</div>

@endif


<div class="admin-dashboard-section">

    <div class="admin-section-header">

        <div>

            <h2>
                Pesan
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

                    <th>TELEPON</th>

                    <th>SUBJEK</th>

                    <th>STATUS</th>

                    <th>TANGGAL</th>

                    <th>AKSI</th>

                </tr>

            </thead>


            <tbody>

                @forelse($messages as $message)

                <tr>

                    <td>
                        {{ $loop->iteration }}
                    </td>


                    <td>

                        <strong>
                            {{ $message->name ?? '-' }}
                        </strong>

                    </td>


                    <td>
                        {{ $message->email ?? '-' }}
                    </td>


                    <td>
                        {{ $message->phone ?? '-' }}
                    </td>


                    <td>
                        {{ $message->subject ?? '-' }}
                    </td>


                    <td>

                        @if($message->status === 'new')

                        <span class="admin-status admin-status-new">
                            NEW
                        </span>

                        @else

                        <span class="admin-status admin-status-read">
                            READ
                        </span>

                        @endif

                    </td>


                    <td>
                        {{ $message->created_at->format('d M Y') }}
                    </td>


                    <td>

                        <a
                            href="{{ route('admin.messages.show', $message) }}"
                            class="admin-view-link">

                            Lihat →

                        </a>

                    </td>

                </tr>


                @empty

                <tr>

                    <td colspan="8">

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