@extends('layouts.admin')

@section('title', 'Dashboard - Xclip Admin')

@section('content')

{{-- =====================================================
     DASHBOARD HEADER
===================================================== --}}

<div class="admin-page-header">

    <div>

        <p class="section-label">
            XCLIP ADMIN PANEL
        </p>

        <h2>
            Welcome Back.
        </h2>

        <p>
            Manage your website, messages, and project requests
            from this dashboard.
        </p>

    </div>

</div>


{{-- =====================================================
     STATISTICS
===================================================== --}}

<div class="admin-stats">

    {{-- CONTACT MESSAGES --}}

    <div class="admin-stat-card">

        <div class="admin-stat-number">
            {{ $contactMessages }}
        </div>

        <div class="admin-stat-info">

            <span>
                01
            </span>

            <h3>
                Contact Messages
            </h3>

            <p>
                Messages received from website visitors.
            </p>

        </div>

    </div>


    {{-- RFQ REQUESTS --}}

    <div class="admin-stat-card">

        <div class="admin-stat-number">
            {{ $rfqRequests }}
        </div>

        <div class="admin-stat-info">

            <span>
                02
            </span>

            <h3>
                Quote Requests
            </h3>

            <p>
                Project requests submitted by visitors.
            </p>

        </div>

    </div>

</div>


{{-- =====================================================
     RECENT CONTACT MESSAGES
===================================================== --}}

<div class="admin-dashboard-section">

    <div class="admin-section-header">

        <div>

            <p class="section-label">
                CONTACT
            </p>

            <h2>
                Recent Messages
            </h2>

        </div>

        <a href="{{ route('admin.messages.index') }}" class="admin-view-link">
            View All →
        </a>

    </div>


    <div class="admin-table-wrapper">

        @if($recentMessages->count() > 0)

        <table class="admin-table">

            <thead>

                <tr>

                    <th>
                        Name
                    </th>

                    <th>
                        Email
                    </th>

                    <th>
                        Subject
                    </th>

                    <th>
                        Date
                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach($recentMessages as $message)

                <tr>

                    <td>
                        {{ $message->name ?? '-' }}
                    </td>

                    <td>
                        {{ $message->email ?? '-' }}
                    </td>

                    <td>
                        {{ $message->subject ?? '-' }}
                    </td>

                    <td>
                        {{ $message->created_at ?? '-' }}
                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

        @else

        <div class="admin-empty">

            <span>
                NO MESSAGES
            </span>

            <p>
                No contact messages have been received yet.
            </p>

        </div>

        @endif

    </div>

</div>


{{-- =====================================================
     RECENT RFQ
===================================================== --}}

<div class="admin-dashboard-section">

    <div class="admin-section-header">

        <div>

            <p class="section-label">
                REQUEST A QUOTE
            </p>

            <h2>
                Recent Requests
            </h2>

        </div>

        <a href="{{ route('admin.rfq.index') }}" class="admin-view-link">
            View All →
        </a>

    </div>


    <div class="admin-table-wrapper">

        @if($recentRfq->count() > 0)

        <table class="admin-table">

            <thead>

                <tr>

                    <th>
                        Company
                    </th>

                    <th>
                        Contact
                    </th>

                    <th>
                        Project
                    </th>

                    <th>
                        Status
                    </th>

                    <th>
                        Date
                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach($recentRfq as $rfq)

                <tr>

                    <td>
                        {{ $rfq->company ?? '-' }}
                    </td>

                    <td>
                        {{ $rfq->name ?? '-' }}
                    </td>

                    <td>
                        {{ $rfq->project_name ?? '-' }}
                    </td>

                    <td>

                        <span class="admin-status">
                            {{ $rfq->project_status ?? 'New' }}
                        </span>

                    </td>

                    <td>
                        {{ $rfq->created_at ?? '-' }}
                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

        @else

        <div class="admin-empty">

            <span>
                NO REQUESTS
            </span>

            <p>
                No Request a Quote submissions have been received yet.
            </p>

        </div>

        @endif

    </div>

</div>

@endsection