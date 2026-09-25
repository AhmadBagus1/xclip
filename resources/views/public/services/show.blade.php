@extends('layouts.app')

@section('title', 'Xclip — ' . $service->title)

@section('meta_description', $service->short_description)

@section('content')

<section class="service-detail-hero">

    <div class="container">

        <div class="service-detail-content">

            <p class="services-label">
                {{ $service->category?->name ?? 'OUR SERVICES' }}
            </p>

            <h1>
                {{ $service->title }}
            </h1>

            @if($service->short_description)

            <p class="service-detail-intro">
                {{ $service->short_description }}
            </p>

            @endif

        </div>

    </div>

</section>


<section class="service-detail-content-section">

    <div class="container">

        <div class="service-detail-grid">

            <div class="service-detail-main">

                <p class="services-section-label">
                    SERVICE DETAILS
                </p>

                <h2>
                    {{ $service->title }}
                </h2>

                <div class="service-description">

                    {!! nl2br(e($service->description)) !!}

                </div>

            </div>


            <aside class="service-detail-sidebar">

                <div class="service-detail-card">

                    <span class="service-detail-symbol">

                        {{ $service->icon ?: '+' }}

                    </span>

                    <p>
                        SERVICE CATEGORY
                    </p>

                    <h3>
                        {{ $service->category?->name ?? 'Xclip Services' }}
                    </h3>

                </div>

            </aside>

        </div>

    </div>

</section>



@endsection