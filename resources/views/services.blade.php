@extends('layouts.main_layout')

@section('content')

    <!-- Hero Section -->
    <section class="text-white py-5" style="background-color: #0B1F3A;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <h1 class="display-4 fw-bold mb-3">
                        {{ $hero->title ?? 'Our Tax Services for Small Businesses' }}
                    </h1>
                    <p class="lead fs-5 mb-4">
                        {{ $hero->subtitle ?? 'From tax preparation to strategic advisory — explore our full range of services designed to help small businesses stay compliant and financially optimized.' }}
                    </p>
                    @if ($whatsapp)
                        <a class="btn btn-success btn-lg" href="https://wa.me/{{ $whatsapp }}" target="_blank">
                            Contact us via whatsApp
                        </a>
                    @endif
                </div>
                <div class="col-lg-6 text-center" data-aos="fade-left">
                    @if ($hero && $hero->image)
                        <img src="{{ asset('storage/' . $hero->image) }}" alt="Our Services" class="img-fluid rounded-4 shadow-lg" style="max-height: 400px; object-fit: cover;">
                    @else
                        <img src="{{ asset('images/service.jpg') }}" alt="Our Services" class="img-fluid rounded-4 shadow-lg" style="max-height: 400px; object-fit: cover;">
                    @endif
                </div>
            </div>
        </div>
    </section>
    

    <!-- Services Section -->
    @php
        $services = \App\Models\Service::all();
    @endphp

    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Our Services</h2>
                <p class="text-muted">Explore how we can support your business success</p>
            </div>
            <div class="row g-4">
                @isset($services)
                    @foreach ($services as $service)
                        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="bg-white rounded-4 p-4 shadow-sm h-100 border border-0 transition hover-shadow">
                                <div class="mb-3">
                                    <i class="fa-solid fa-briefcase fa-2x text-primary"></i> <!-- آیکون ثابت -->
                                </div>
                                <h5 class="fw-bold mb-2 text-dark">{{ $service->title }}</h5>
                                <p class="text-muted">{{ \Illuminate\Support\Str::limit($service->description, 100, '...') }}</p>
                                <a href="/services/{{ $service->id }}" class="text-decoration-none text-primary fw-semibold mt-auto d-inline-block">Read More →</a>
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div>
        </div>
    </section>


@endsection
