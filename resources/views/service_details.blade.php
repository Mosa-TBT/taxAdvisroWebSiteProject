@extends('layouts.main_layout')

@section('title', 'Tax Advisory Service')

@section('content')

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow rounded-4 p-4">
                    <div class="row align-items-center">
                        {{-- Content on the left --}}
                        <div class="col-md-6">
                            <h1 class="mb-4">{{ $service->title ?? "Title not set yet !" }}</h1>

                            <p>
                                {{ $service->description ?? "Description not set yet !" }}
                            </p>

                            <a href="/services" class="btn btn-outline-primary mt-4">← Back to Services</a>
                        </div>

                        {{-- Image on the right --}}
                        <div class="col-md-6 text-center">
                            @if ($service && $service->image)
                                <img src="{{ asset('storage/' . $service->image) }}" alt="Tax Advisory" class="img-fluid rounded shadow">
                            @else
                                <img src="{{ asset('images/homePic.webp') }}" alt="Tax Advisory" class="img-fluid rounded shadow">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
