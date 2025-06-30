@extends('layouts.main_layout')

@section("content")

<!-- Hero Section -->
<section class="text-white py-5" style="background-color: #0B1F3A;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
                <h1 class="display-5 fw-bold">
                    {{ $hero->title ?? 'Get in Touch with Us' }}
                </h1>
                <p class="display-5 fs-5">
                    {{ $hero->subtitle ?? 'We’re here to answer your questions and help your business thrive. Contact us today.' }}
                </p>
            </div>
            <div class="col-md-6 text-center" data-aos="fade-left">
                @if ($hero && $hero->image)
                    <img src="{{ asset('storage/' . $hero->image) }}" alt="Contact Us" class="img-fluid rounded" style="max-width: 100%; height: auto; max-height: 400px;">
                @else
                    <img src="{{ asset('images/contact.png') }}" alt="Contact Us" class="img-fluid rounded" style="max-width: 100%; height: auto; max-height: 400px;">
                @endif
            </div>
        </div>
    </div>
</section>

<div class="container py-5">
    <h2 class="text-center mb-3">Get In Touch</h2>
    <p class="text-center mb-4">Fill out the form and we’ll get back to you shortly.</p>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <ul class="mb-0 list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form method="POST" action="{{ route('contact.submit') }}" class="mx-auto" style="max-width: 600px;">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
        </div>
        <div class="mb-3">
            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
        </div>
        <div class="mb-4">
            <textarea name="message" rows="4" class="form-control" placeholder="Message" required></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-dark px-4">Send Message</button>
        </div>
    </form>

    <div class="mt-5 text-center">
        <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
            <h3>Contact Us</h3>
        
            @if ($contactDetails?->phone)
                <p>Phone: {{ $contactDetails->phone }}</p>
            @else
                <p>Phone: +1 (123) 456-7890</p>
            @endif
        
            @if ($contactDetails?->email)
                <p>Email: <a href="mailto:{{ $contactDetails->email }}" style="color: black;">{{ $contactDetails->email }}</a></p>
            @else
                <p>Email: <a href="mailto:info@elitetaxadvisory.com" style="color: black;">info@elitetaxadvisory.com</a></p>
            @endif
        
            @if ($contactDetails?->address)
                <p>Address: {{ $contactDetails->address }}</p>
            @else
                <p>Address: 123 Business Rd, Suite 100</p>
            @endif
        
            <h3 style="margin-top: 20px;">Follow Us</h3>
        
            @if ($contactDetails?->facebook)
                <a href="{{ $contactDetails->facebook }}" style="color: black; margin-right: 10px; text-decoration: none;">Facebook</a>
            @endif

            @if ($contactDetails?->instagram)
                <a href="{{ $contactDetails->instagram }}" style="color: black; margin-right: 10px; text-decoration: none;">Instagram</a>
            @endif
        
            @if ($contactDetails?->linkedin)
                <a href="{{ $contactDetails->linkedin }}" style="color: black; text-decoration: none;">LinkedIn</a>
            @endif
        </div>
    </div>
</div>

@endsection
