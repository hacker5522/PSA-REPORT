<x-header />

<!-- Services Hero Section -->
<div class="page-hero bg-image overlay-dark" style="background-image: url('{{ asset('frontend/assets/img/plumber4.jpg') }}'); background-size: cover; background-position: center; height: 60vh; display: flex; align-items: center; justify-content: center;">
    <div class="hero-section text-center text-white">
        <h1 class="display-4" style="font-size: 3rem; font-weight: 700; margin: 20px 0;">Our Plumbing Services</h1>
    </div>
</div>

<!-- Services Section -->
<div class="page-section" style="padding: 80px 0;">
    <div class="container">
        <h1 class="text-center mb-5" style="font-size: 2.5rem; font-weight: 700; color: #333;">What We Offer</h1>
        <div class="row">
            <div class="col-lg-4 py-2">
                <div class="card-service" style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); overflow: hidden; height: 400px;">
                    <div class="header">
                        <img src="{{ asset('frontend/assets/img/plumber5.jpg') }}" alt="Leak Repairs" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="body" style="padding: 20px;">
                        <h5 class="service-title" style="font-size: 1.5rem; font-weight: 600; margin-bottom: 10px;">Leak Repairs</h5>
                        <p style="font-size: 1rem; color: #666;">Quick and effective fixes for pipe leaks, faucets, and more.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 py-2">
                <div class="card-service" style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); overflow: hidden; height: 400px;">
                    <div class="header">
                        <img src="{{ asset('frontend/assets/img/plumber3.jpg') }}" alt="Drain Cleaning" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="body" style="padding: 20px;">
                        <h5 class="service-title" style="font-size: 1.5rem; font-weight: 600; margin-bottom: 10px;">Drain Cleaning</h5>
                        <p style="font-size: 1rem; color: #666;">Unclogging and maintenance for free-flowing drains.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 py-2">
                <div class="card-service" style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); overflow: hidden; height: 400px;">
                    <div class="header">
                        <img src="{{ asset('frontend/assets/img/plumber6.jpg') }}" alt="Water Heater Installation" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="body" style="padding: 20px;">
                        <h5 class="service-title" style="font-size: 1.5rem; font-weight: 600; margin-bottom: 10px;">Water Heater Installation</h5>
                        <p style="font-size: 1rem; color: #666;">Expert installation and repair of water heating systems.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="page-section bg-light" style="padding: 80px 0; text-align: center;">
    <h2 style="font-size: 2rem; font-weight: 700; color: #333;">Need Professional Plumbing Services?</h2>
    <p style="font-size: 1rem; color: #666; margin-bottom: 20px;">Contact us today for a free quote and expert plumbing solutions.</p>
    <a href="{{ route('contact') }}" class="btn btn-warning" style="background-color: #FFC107; border: none; padding: 10px 30px; font-size: 1rem; font-weight: 600; letter-spacing: 1px;">Get a Free Quote</a>
</div>

<x-footer />
