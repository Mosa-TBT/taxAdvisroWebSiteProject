@extends('layouts.main_layout')

@section("content")

    <!-- Hero Section -->
    <section class="text-white py-5" style="background-color: #0B1F3A;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <h1 class="display-4 fw-bold mb-3">
                        {{ $hero->title ?? 'About Our Tax Advisory Firm' }}
                    </h1>
                    <p class="lead fs-5 mb-4">
                        {{ $hero->subtitle ?? 'With years of experience in small business taxation, we are committed to helping you navigate compliance with clarity and confidence.' }}
                    </p>
                    @if ($whatsapp)
                        <a class="btn btn-success btn-lg" href="https://wa.me/{{ $whatsapp }}" target="_blank">
                            Contact us via whatsApp
                        </a>
                    @endif
                </div>

                <div class="col-lg-6 text-center" data-aos="fade-left">
                    @if ($hero && $hero->image)
                        <img src="{{ asset('storage/' . $hero->image) }}"
                             alt="About Image"
                             class="img-fluid"
                             style="max-height: 400px; width: auto;">
                    @else
                        <img src="{{ asset('images/homePic.webp') }}"
                             alt="About Image"
                             class="img-fluid"
                             style="max-height: 400px; width: auto;">
                    @endif
                </div>
            </div>
        </div>
    </section>

    @forelse ($sections as $index => $section)

        @if($section->type === 'block')
            <section class="py-5 {{ $index % 2 === 0 ? 'bg-white' : 'bg-light' }}">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="border-start border-4 ps-4" style="border-color: #0B1F3A;">
                                <h3 class="fw-bold mb-3 text-dark">
                                    <i class="bi bi-briefcase-fill text-primary me-2"></i>
                                    {{ $section->title }}
                                </h3>
                                <p class="text-muted fs-5">{{ $section->text_content }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        @elseif($section->type === 'list')
            <section class="py-5 position-relative" style="background: linear-gradient(to right, #f9f9f9, #eef1f7);">
                <div class="container">
                    <h4 class="mb-4 fw-bold text-dark border-bottom pb-2" style="border-color: #0B1F3A;">
                        <i class="bi bi-stars text-warning me-2"></i>
                        {{ $section->title }}
                    </h4>
                    <div class="d-flex flex-wrap gap-3">
                        @foreach ($section->list_content as $item)
                            <span class="badge bg-white border shadow-sm p-3 text-dark rounded text-wrap" style="border-left: 4px solid #0B1F3A;">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                {{ $item['item'] }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

    @empty
        <section class="py-5 text-center bg-light">
            <div class="container">
                <p class="text-muted fs-5">There is currently no content available to display on the About page.</p>
            </div>
        </section>
    @endforelse

@endsection
