<x-header />

<!-- About Us Page -->
<div class="page-hero bg-image overlay-dark" style="background-image: url('{{ asset('frontend/assets/img/plumber3.jpg') }}'); background-size: cover; background-position: center; height: 60vh; display: flex; align-items: center; justify-content: center;">
    <div class="hero-section text-center text-white">
        <h1 class="display-4" style="font-size: 3.5rem; font-weight: 700;">About Us</h1>
    </div>
</div>

<div class="page-section" style="padding: 80px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3">
                <h1 style="font-size: 2.5rem; font-weight: 700;">Who We Are</h1>
                <p class="text-grey mb-4" style="font-size: 1rem; line-height: 1.6; color: #666;">
                    At PlumbFix Repairs, we specialize in providing top-quality plumbing services for residential and commercial properties. With years of experience, our team is dedicated to excellence, offering reliable, fast, and affordable plumbing solutions.
                </p>
                <a href="{{ route('services') }}" class="btn btn-warning" style="background-color: #FFC107; border: none; padding: 10px 30px; font-size: 1rem; font-weight: 600;">Our Services</a>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('frontend/assets/img/plumber5.jpg') }}" alt="About Us" style="border-radius: 10px; width: 100%; height: auto;">
            </div>
        </div>
    </div>
</div>

<!-- Contact Page -->


<x-footer />

