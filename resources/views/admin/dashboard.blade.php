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


    {{-- =================================================
         CONTACT MESSAGES
    ================================================== --}}

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



    {{-- =================================================
         RFQ REQUESTS
    ================================================== --}}

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
     DASHBOARD CHARTS
===================================================== --}}

<div class="admin-dashboard-charts">


    {{-- =================================================
         GRAPH 1
         CONTACT MESSAGES PER MONTH
    ================================================== --}}

    <div class="admin-chart-card admin-chart-card-large">

        <div class="admin-chart-header">

            <div>

                <p class="section-label">
                    CONTACT
                </p>

                <h2>
                    Contact Messages
                </h2>

            </div>

            <span class="admin-chart-period">
                Last 12 Months
            </span>

        </div>


        <div class="admin-chart-wrapper">

            <canvas id="messagesChart"></canvas>

        </div>

    </div>



    {{-- =================================================
         GRAPH 2
         REQUEST A QUOTE PER MONTH
    ================================================== --}}

    <div class="admin-chart-card admin-chart-card-large">

        <div class="admin-chart-header">

            <div>

                <p class="section-label">
                    REQUEST A QUOTE
                </p>

                <h2>
                    Quote Requests
                </h2>

            </div>

            <span class="admin-chart-period">
                Last 12 Months
            </span>

        </div>


        <div class="admin-chart-wrapper">

            <canvas id="rfqChart"></canvas>

        </div>

    </div>



    {{-- =================================================
         GRAPH 3
         PROJECTS BY STATUS
    ================================================== --}}

    <div class="admin-chart-card admin-chart-card-status">

        <div class="admin-chart-header">

            <div>

                <p class="section-label">
                    PROJECTS
                </p>

                <h2>
                    Projects by Status
                </h2>

            </div>

        </div>


        <div class="admin-project-status-chart">


            {{-- DOUGHNUT CHART --}}

            <div class="admin-project-status-chart-wrapper">

                <canvas id="projectStatusChart"></canvas>

            </div>


            {{-- STATUS LEGEND --}}

            <div class="admin-project-status-legend">


                {{-- PLANNING --}}

                <div class="admin-project-status-item">

                    <span class="admin-project-status-dot planning"></span>

                    <div>

                        <strong>
                            Planning
                        </strong>

                        <span>
                            {{ $projectStatusData['planning'] }}
                            project
                        </span>

                    </div>

                </div>


                {{-- ONGOING --}}

                <div class="admin-project-status-item">

                    <span class="admin-project-status-dot ongoing"></span>

                    <div>

                        <strong>
                            Ongoing
                        </strong>

                        <span>
                            {{ $projectStatusData['ongoing'] }}
                            project
                        </span>

                    </div>

                </div>


                {{-- COMPLETED --}}

                <div class="admin-project-status-item">

                    <span class="admin-project-status-dot completed"></span>

                    <div>

                        <strong>
                            Completed
                        </strong>

                        <span>
                            {{ $projectStatusData['completed'] }}
                            project
                        </span>

                    </div>

                </div>


            </div>

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


        <a
            href="{{ route('admin.messages.index') }}"
            class="admin-view-link">

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


        <a
            href="{{ route('admin.rfq.index') }}"
            class="admin-view-link">

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



{{-- =====================================================
     CHART DATA
===================================================== --}}

<div
    id="dashboard-chart-data"
    data-messages-labels="{{ json_encode($messageChartLabels) }}"
    data-messages-data="{{ json_encode($messageChartData) }}"
    data-rfq-labels="{{ json_encode($rfqChartLabels) }}"
    data-rfq-data="{{ json_encode($rfqChartData) }}"
    data-planning="{{ $projectStatusData['planning'] }}"
    data-ongoing="{{ $projectStatusData['ongoing'] }}"
    data-completed="{{ $projectStatusData['completed'] }}"
    style="display: none;">
</div>



{{-- =====================================================
     CHART.JS
===================================================== --}}

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



<script>
    document.addEventListener('DOMContentLoaded', function() {


        /*
        |--------------------------------------------------------------------------
        | GET CHART DATA
        |--------------------------------------------------------------------------
        */

        const chartDataElement = document.getElementById('dashboard-chart-data');

        if (!chartDataElement) {
            return;
        }

        const chartData = {
            messages: {
                labels: JSON.parse(chartDataElement.dataset.messagesLabels),
                data: JSON.parse(chartDataElement.dataset.messagesData)
            },
            rfq: {
                labels: JSON.parse(chartDataElement.dataset.rfqLabels),
                data: JSON.parse(chartDataElement.dataset.rfqData)
            },
            projects: {
                planning: Number(chartDataElement.dataset.planning),
                ongoing: Number(chartDataElement.dataset.ongoing),
                completed: Number(chartDataElement.dataset.completed)
            }
        };



        /*
        |--------------------------------------------------------------------------
        | COMMON CHART SETTINGS
        |--------------------------------------------------------------------------
        */

        Chart.defaults.font.family =
            'Arial, Helvetica, sans-serif';

        Chart.defaults.font.size =
            12;

        Chart.defaults.color =
            '#1f2937';



        /*
        |--------------------------------------------------------------------------
        | GRAPH 1
        | CONTACT MESSAGES
        |--------------------------------------------------------------------------
        */

        const messagesCanvas =
            document.getElementById('messagesChart');


        if (messagesCanvas) {

            new Chart(messagesCanvas, {

                type: 'bar',


                data: {

                    labels: chartData.messages.labels,


                    datasets: [

                        {

                            label: 'Messages',


                            data: chartData.messages.data,


                            borderWidth: 2,


                            borderRadius: 4,


                            borderSkipped: false,


                            backgroundColor: '#1f2937',


                            hoverBackgroundColor: '#f97316'

                        }

                    ]

                },


                options: {

                    responsive: true,


                    maintainAspectRatio: false,


                    plugins: {

                        legend: {

                            display: false

                        },


                        tooltip: {

                            backgroundColor: '#1f2937',


                            padding: 12,


                            displayColors: false,


                            callbacks: {

                                label: function(context) {

                                    return context.parsed.y +
                                        ' message';

                                }

                            }

                        }

                    },


                    scales: {

                        x: {

                            grid: {

                                display: false

                            },


                            ticks: {

                                maxRotation: 0,


                                minRotation: 0

                            }

                        },


                        y: {

                            beginAtZero: true,


                            ticks: {

                                precision: 0

                            },


                            grid: {

                                color: 'rgba(31, 41, 55, 0.08)'

                            }

                        }

                    }

                }

            });

        }



        /*
        |--------------------------------------------------------------------------
        | GRAPH 2
        | REQUEST A QUOTE
        |--------------------------------------------------------------------------
        */

        const rfqCanvas =
            document.getElementById('rfqChart');


        if (rfqCanvas) {

            new Chart(rfqCanvas, {

                type: 'bar',


                data: {

                    labels: chartData.rfq.labels,


                    datasets: [

                        {

                            label: 'Quote Requests',


                            data: chartData.rfq.data,


                            borderWidth: 2,


                            borderRadius: 4,


                            borderSkipped: false,


                            backgroundColor: '#f97316',


                            hoverBackgroundColor: '#1f2937'

                        }

                    ]

                },


                options: {

                    responsive: true,


                    maintainAspectRatio: false,


                    plugins: {

                        legend: {

                            display: false

                        },


                        tooltip: {

                            backgroundColor: '#1f2937',


                            padding: 12,


                            displayColors: false,


                            callbacks: {

                                label: function(context) {

                                    return context.parsed.y +
                                        ' request';

                                }

                            }

                        }

                    },


                    scales: {

                        x: {

                            grid: {

                                display: false

                            },


                            ticks: {

                                maxRotation: 0,


                                minRotation: 0

                            }

                        },


                        y: {

                            beginAtZero: true,


                            ticks: {

                                precision: 0

                            },


                            grid: {

                                color: 'rgba(31, 41, 55, 0.08)'

                            }

                        }

                    }

                }

            });

        }



        /*
        |--------------------------------------------------------------------------
        | GRAPH 3
        | PROJECTS BY STATUS
        |--------------------------------------------------------------------------
        */

        const projectStatusCanvas =
            document.getElementById('projectStatusChart');


        if (projectStatusCanvas) {

            new Chart(projectStatusCanvas, {

                type: 'doughnut',


                data: {

                    labels: [

                        'Planning',

                        'Ongoing',

                        'Completed'

                    ],


                    datasets: [

                        {

                            data: [

                                chartData.projects.planning,

                                chartData.projects.ongoing,

                                chartData.projects.completed

                            ],


                            borderWidth: 3,


                            borderColor: '#f7f7f2',


                            backgroundColor: [

                                '#facc15',

                                '#3b82f6',

                                '#22c55e'

                            ],


                            hoverOffset: 6

                        }

                    ]

                },


                options: {

                    responsive: true,


                    maintainAspectRatio: false,


                    cutout: '68%',


                    plugins: {

                        legend: {

                            display: false

                        },


                        tooltip: {

                            backgroundColor: '#1f2937',


                            padding: 12,


                            callbacks: {

                                label: function(context) {

                                    return context.label +
                                        ': ' +
                                        context.parsed;

                                }

                            }

                        }

                    }

                }

            });

        }

    });
</script>


@endsection