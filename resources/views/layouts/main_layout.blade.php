<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tax Advisor</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }

        .hero {
            background: linear-gradient(to right, rgba(11, 31, 58, 0.95), rgba(25, 91, 140, 0.9)), url('/images/hero-image.png') no-repeat center right;
            background-size: cover;
            color: white;
            padding: 100px 0;
        }

        .navbar {
            background-color: #0B1F3A
        }

    .cta-btn {
        background-color: #157347;
        color: white;
        padding: 12px 24px;
        border-radius: 5px;
        text-decoration: none;
    }

    .cta-btn:hover {
        background-color: #1a8d5c;
    }

    .service-card {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        height: 100%;
    }

    .icon {
        font-size: 28px;
        color: #0B1F3A;
    }

    footer {
        background: #0B1F3A;
        color: white;
        padding: 20px 0;
    }
    a {
        text-decoration: none
    }

    .hero-section {
        min-height: 500px;
        position: relative;
    }
    
    .hero-image {
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        width: 50%;
        overflow: hidden;
    }
    
    .hero-img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        object-position: center right;
    
        /* افکت محو و مرز نرم */
        -webkit-mask-image: linear-gradient(to left, rgba(0,0,0,1) 60%, rgba(0,0,0,0));
        mask-image: linear-gradient(to left, rgba(0,0,0,1) 60%, rgba(0,0,0,0));
        -webkit-mask-size: 100%;
        mask-size: 100%;
    }
</style>
    @vite(['resources/js/app.js'])
</head>
<body>


    @php

        $contactDetails = \App\Models\ContactDetails::first();


        $services = \App\Models\Service::limit(4)->get();

    @endphp

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">MyWebsite</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('services') ? 'active' : '' }}" href="/services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    @yield('content')

        <!-- CTA Section -->
    <section class="py-5 text-white text-center" style="background-color: #2563EB;">
        <div class="container" data-aos="fade-up">
            <h2 class="fw-bold mb-3">Ready to Get Started?</h2>
            <p class="mb-4">Book a free consultation with one of our tax experts today.</p>
            <a href="/contact" class="btn btn-light btn-lg rounded-pill">Contact Us</a>
        </div>
    </section>

    <footer style="color: #f0f0f0; padding: 40px 20px; background-color: #0B1F3A;">
        <div style="display: flex; flex-wrap: wrap; justify-content: space-between; max-width: 1200px; margin: 0 auto;" data-aos="fade-up">
            <!-- Company Info -->
            <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
                <h3>About Us</h3>
                <p>At Elite Tax Advisory and Preparation LLC, we specialize in small business tax services designed to reduce your tax burden and ensure compliance.</p>
            </div>
            <!-- Services -->
            <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
                <h3>Our Services</h3>
                <ul style="list-style: none; padding: 0;">
                    @isset($services)
                        @foreach($services as $service)
                            <li><a href="/services/tax-preparation" style="color: #d3d3d3; text-decoration: none;">{{$service->title}}</a></li>
                        @endforeach
                    @endisset
                </ul>
            </div>
            <!-- Policies -->
            <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
                <h3>Company Links</h3>
                <ul style="list-style: none; padding: 0;">
                    <li><a href="/about" style="color: #d3d3d3; text-decoration: none;">About Us</a></li>
                </ul>
            </div>
            <!-- Contact -->
            <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
                <h3>Contact Us</h3>
            
                @if ($contactDetails?->phone)
                    <p>Phone: {{ $contactDetails->phone }}</p>
                @else
                    <p>Phone: +1 (123) 456-7890</p>
                @endif
            
                @if ($contactDetails?->email)
                    <p>Email: <a href="mailto:{{ $contactDetails->email }}" style="color: #d3d3d3;">{{ $contactDetails->email }}</a></p>
                @else
                    <p>Email: <a href="mailto:info@elitetaxadvisory.com" style="color: #d3d3d3;">info@elitetaxadvisory.com</a></p>
                @endif
            
                @if ($contactDetails?->address)
                    <p>Address: {{ $contactDetails->address }}</p>
                @else
                    <p>Address: 123 Business Rd, Suite 100</p>
                @endif
            
                <h3 style="margin-top: 20px;">Follow Us</h3>
            
                @if ($contactDetails?->facebook)
                    <a href="{{ $contactDetails->facebook }}" style="color: #d3d3d3; margin-right: 10px; text-decoration: none;">Facebook</a>
                @endif

                @if ($contactDetails?->instagram)
                    <a href="{{ $contactDetails->instagram }}" style="color: #d3d3d3; margin-right: 10px; text-decoration: none;">Instagram</a>
                @endif
            
                @if ($contactDetails?->linkedin)
                    <a href="{{ $contactDetails->linkedin }}" style="color: #d3d3d3; text-decoration: none;">LinkedIn</a>
                @endif
            </div>
            

        <hr style="border-color: #555;">
        <div class="text-center w-100">
            <p style="text-align: center; margin-top: 10px;">&copy; {{now()->year}} Elite Tax Advisory and Preparation LLC. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>


</body>
</html>