@extends("layouts.main_layout")

@section("content")

    <!-- Hero Section -->
    <section class="hero-section position-relative overflow-hidden" style="background-color: #0B1F3A;">
        <div class="container py-5 position-relative z-2">
            <div class="row align-items-center">
                <div class="col-md-6 text-white">
                    <h1 class="fw-bold display-5 mb-3">
                        {{ $hero->title ?? 'Reliable Tax Advisory for Small Businesses' }}
                    </h1>
                    <p class="mb-4">
                        {{ $hero->subtitle ?? 'Helping you stay compliant and save on taxes with expert guidance.' }}
                    </p>
                    @if ($whatsapp)
                        <a class="btn btn-success btn-lg" href="https://wa.me/{{ $whatsapp }}" target="_blank">
                            Contact us via whatsApp
                        </a>
                    @endif
                </div>
            </div>
        </div>
        
        <div class="hero-image d-none d-md-block">
            @if ($hero && $hero->image)

                <img src="{{ asset('storage/' . $hero->image) }}"
                    alt="Hero"
                    class="hero-img" />
                
            @else

                <img src="{{ asset('images/home.jpg') }}"
                    alt="Hero"
                    class="hero-img" />

            @endif
        </div>
    </section>
    
    <style>

    </style>
    

    <!-- Who We Are -->
    <section class="py-5" style="background-color: #F1F5F9;">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-md-6" data-aos="fade-up">
                    <h2 class="fw-bold mb-3 text-dark">Who We Are</h2>
                    <p class="text-muted mb-4">Elite Tax Advisory and Preparation LLC provides tailored tax services to help your business grow efficiently.</p>
                    <a href="/about" class="btn btn-outline-primary rounded-pill">Learn More</a>
                </div>
                <div class="col-md-6 d-flex gap-4 flex-wrap justify-content-center">
                    @isset($services)
                        @foreach ($services->take(2) as $service)
                            <div class="p-4 bg-white rounded shadow-sm text-center" style="width: 250px;" data-aos="zoom-in">
                                <i class="fas fa-user-cog text-primary me-2" style="color: #0EA5E9;"></i>
                                <h5 class="fw-bold text-dark">{{ $service->title }}</h5>
                                <p class="text-muted">{{ \Illuminate\Support\Str::limit($service->description, 100, '...') }}</p>
                                <a href="/services/{{ $service->id }}" class="text-decoration-none fw-semibold" style="color: #2563EB;">Read More</a>
                            </div>
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="py-5 bg-white">
        <div class="container">
            <h2 class="fw-bold mb-5 text-center text-dark" data-aos="fade-up">Our Services</h2>
            <div class="row g-4">
                @isset($services)
                    @foreach ($services as $service)
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="p-4 bg-white rounded-3 shadow-sm h-100 d-flex flex-column justify-content-between border">
                                <div>
                                    <i class="fas fa-user-cog text-primary me-2" style="color: #0EA5E9;"></i>
                                    <h5 class="fw-bold text-dark">{{ $service->title }}</h5>
                                    <p class="text-muted">{{ \Illuminate\Support\Str::limit($service->description, 100, '...') }}</p>

                                </div>
                                <a href="/services/{{ $service->id }}" class="mt-3 text-decoration-none fw-semibold" style="color: #2563EB;">Read More →</a>
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div>
        </div>
    </section>

    @if ($trustReasons != [])

        <!-- Why Clients Trust Us -->
        <section class="py-5" style="background-color: #F1F5F9;">
            <div class="container">
                <h2 class="fw-bold mb-5 text-center text-dark" data-aos="fade-up">Why Clients Trust Us</h2>
                <div class="row g-4 text-center">
                    @isset($trustReasons)
                        @foreach ($trustReasons as $reason)
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                                <div class="bg-white p-4 rounded shadow-sm h-100 border">
                                    <i class="bi bi-lightbulb-fill text-warning me-2" style="color: #0EA5E9;"></i>
                                    <h6 class="fw-bold text-dark">{{ $reason->title }}</h6>
                                    <p class="text-muted small">{{ $reason->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endisset
                </div>
            </div>
        </section>

    @endif


@endsection
