<x-header />

<!-- Hero Section -->
<div class="page-hero bg-image overlay-dark" style="background-image: url('{{ asset('frontend/assets/img/plumber.jpg') }}'); background-size: cover; background-position: center; height: 100vh; display: flex; align-items: center; justify-content: center;">
    <div class="hero-section text-center text-white">
        <span class="subhead" style="font-size: 1.25rem; font-weight: 300; letter-spacing: 2px;">Reliable & Affordable Plumbing Solutions</span>
        <h1 class="display-4" style="font-size: 3.5rem; font-weight: 700; margin: 20px 0;">PlumbFix Repairs</h1>
        <a href="{{ route('contact') }}" class="btn btn-warning" style="background-color: #FFC107; border: none; padding: 10px 30px; font-size: 1rem; font-weight: 600; letter-spacing: 1px;">Get a Free Quote</a>
    </div>
</div>

<!-- About Section -->
<div class="page-section pb-0" style="padding: 80px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3">
                <h1 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 20px;">Welcome to PlumbFix Repairs</h1>
                <p class="text-grey mb-4" style="font-size: 1rem; line-height: 1.6; color: #666;">
                    We provide top-quality plumbing services, from emergency repairs to full installations.
                    Our team is dedicated to keeping your home and business running smoothly with reliable and affordable plumbing solutions.
                </p>
                <a href="{{ route('about') }}" class="btn btn-warning" style="background-color: #FFC107; border: none; padding: 10px 30px; font-size: 1rem; font-weight: 600; letter-spacing: 1px;">Learn More</a>
            </div>
            <div class="col-lg-6">
                <div class="img-place custom-img-1">
                    <img src="{{ asset('frontend/assets/img/plumber4.jpg') }}" alt="Plumber at Work" style="border-radius: 10px; width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services Section -->
<div class="page-section" style="padding: 80px 0;">
    <div class="container">
        <h1 class="text-center mb-5" style="font-size: 2.5rem; font-weight: 700; color: #333;">Our Services</h1>

        <div class="row">
            <div class="col-lg-4 py-2">
                <div class="card-service" style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); overflow: hidden; height:400px;">
                    <div class="header">
                        <img src="{{ asset('frontend/assets/img/plumber2.jpg') }}" alt="Leak Repairs" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="body" style="padding: 20px;">
                        <h5 class="service-title" style="font-size: 1.5rem; font-weight: 600; margin-bottom: 10px;">Leak Repairs</h5>
                        <p style="font-size: 1rem; color: #666;">Quick and effective fixes for pipe leaks, faucets, and more.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 py-2">
                <div class="card-service" style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); overflow: hidden; height:400px;">
                    <div class="header">
                        <img src="{{ asset('frontend/assets/img/plumber4.jpg') }}" alt="Drain Cleaning" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="body" style="padding: 20px;">
                        <h5 class="service-title" style="font-size: 1.5rem; font-weight: 600; margin-bottom: 10px;">Drain Cleaning</h5>
                        <p style="font-size: 1rem; color: #666;">Unclogging and maintenance for free-flowing drains.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 py-2">
                <div class="card-service" style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); overflow: hidden; height:400px;">
                    <div class="header">
                        <img src="{{ asset('frontend/assets/img/plumber.jpg') }}" alt="Water Heater Installation" style="width: 100%; height: 200px; object-fit: cover;">
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

<!-- Pricing Section -->
<div class="page-section bg-light" style="padding: 80px 0;">
    <div class="container">
        <h1 class="text-center mb-5" style="font-size: 2.5rem; font-weight: 700; color: #333;">Our Pricing</h1>
        <div class="row justify-content-center">
            <!-- Basic Plan -->
            <div class="col-lg-4 py-2">
                <div class="card-pricing" style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 30px; text-align: center; height:450px">
                    <h3 style="font-size: 1.75rem; font-weight: 600; color: #333;">Basic Plan</h3>
                    <p style="font-size: 1rem; color: #666;">Ideal for small repairs and maintenance.</p>
                    <h2 style="font-size: 2.5rem; font-weight: 700; color: #FFC107; margin: 20px 0;">$49<span style="font-size: 1rem; color: #666;">/visit</span></h2>
                    <ul style="list-style: none; padding: 0; margin: 20px 0;">
                        <li style="font-size: 1rem; color: #666; margin: 10px 0;">Leak Repairs</li>
                        <li style="font-size: 1rem; color: #666; margin: 10px 0;">Faucet Fixes</li>
                        <li style="font-size: 1rem; color: #666; margin: 10px 0;">Drain Cleaning</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-warning" style="background-color: #FFC107; border: none; padding: 10px 30px; font-size: 1rem; font-weight: 600; letter-spacing: 1px;">Get Started</a>
                </div>
            </div>

            <!-- Standard Plan -->
            <div class="col-lg-4 py-2">
                <div class="card-pricing" style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 30px; text-align: center; height:450px">
                    <h3 style="font-size: 1.75rem; font-weight: 600; color: #333;">Standard Plan</h3>
                    <p style="font-size: 1rem; color: #666;">Perfect for regular maintenance and minor installations.</p>
                    <h2 style="font-size: 2.5rem; font-weight: 700; color: #FFC107; margin: 20px 0;">$99<span style="font-size: 1rem; color: #666;">/visit</span></h2>
                    <ul style="list-style: none; padding: 0; margin: 20px 0;">
                        <li style="font-size: 1rem; color: #666; margin: 10px 0;">All Basic Features</li>
                        <li style="font-size: 1rem; color: #666; margin: 10px 0;">Pipe Replacement</li>
                        <li style="font-size: 1rem; color: #666; margin: 10px 0;">Water Heater Repair</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-warning" style="background-color: #FFC107; border: none; padding: 10px 30px; font-size: 1rem; font-weight: 600; letter-spacing: 1px;">Get Started</a>
                </div>
            </div>

            <!-- Premium Plan -->
            <div class="col-lg-4 py-2">
                <div class="card-pricing" style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 30px; text-align: center; height:450px">
                    <h3 style="font-size: 1.75rem; font-weight: 600; color: #333;">Premium Plan</h3>
                    <p style="font-size: 1rem; color: #666;">Comprehensive solutions for large installations and emergencies.</p>
                    <h2 style="font-size: 2.5rem; font-weight: 700; color: #FFC107; margin: 20px 0;">$199<span style="font-size: 1rem; color: #666;">/visit</span></h2>
                    <ul style="list-style: none; padding: 0; margin: 20px 0;">
                        <li style="font-size: 1rem; color: #666; margin: 10px 0;">All Standard Features</li>
                        <li style="font-size: 1rem; color: #666; margin: 10px 0;">Full System Installation</li>
                        <li style="font-size: 1rem; color: #666; margin: 10px 0;">24/7 Emergency Support</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-warning" style="background-color: #FFC107; border: none; padding: 10px 30px; font-size: 1rem; font-weight: 600; letter-spacing: 1px;">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials Section -->
<div class="page-section bg-light" style="padding: 80px 0;">
    <div class="container">
        <h1 class="text-center" style="font-size: 2.5rem; font-weight: 700; color: #333;">What Our Clients Say</h1>
        <div class="row mt-5">
            <div class="col-lg-4 py-2">
                <div class="card-testimonial" style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 20px;">
                    <p style="font-size: 1rem; color: #666;">"Fast and professional service! Fixed my leaking pipes in no time. Highly recommended!"</p>
                    <h5 style="font-size: 1.25rem; font-weight: 600; margin-top: 15px;">- James Carter</h5>
                </div>
            </div>
            <div class="col-lg-4 py-2">
                <div class="card-testimonial" style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 20px;">
                    <p style="font-size: 1rem; color: #666;">"They installed my new water heater perfectly. Great pricing and quality work!"</p>
                    <h5 style="font-size: 1.25rem; font-weight: 600; margin-top: 15px;">- Sarah Johnson</h5>
                </div>
            </div>
            <div class="col-lg-4 py-2">
                <div class="card-testimonial" style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 20px;">
                    <p style="font-size: 1rem; color: #666;">"Excellent customer service and very knowledgeable staff. Will call again!"</p>
                    <h5 style="font-size: 1.25rem; font-weight: 600; margin-top: 15px;">- Mark Williams</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Form -->
<div class="page-section" style="padding: 80px 0;">
    <div class="container">
        <h1 class="text-center" style="font-size: 2.5rem; font-weight: 700; color: #333;">Request a Service</h1>

        <form class="main-form" style="max-width: 800px; margin: 0 auto;">
            <div class="row mt-5">
                <div class="col-12 col-sm-6 py-2">
                    <input type="text" class="form-control" placeholder="Full Name" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd;">
                </div>
                <div class="col-12 col-sm-6 py-2">
                    <input type="text" class="form-control" placeholder="Email Address" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd;">
                </div>
                <div class="col-12 col-sm-6 py-2">
                    <input type="text" class="form-control" placeholder="Phone Number" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd;">
                </div>
                <div class="col-12 col-sm-6 py-2">
                    <select name="service" id="service" class="custom-select" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd;">
                        <option value="leak-repair">Leak Repair</option>
                        <option value="drain-cleaning">Drain Cleaning</option>
                        <option value="water-heater">Water Heater Installation</option>
                        <option value="pipe-replacement">Pipe Replacement</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="col-12 py-2">
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Describe your plumbing issue..." style="padding: 10px; border-radius: 5px; border: 1px solid #ddd;"></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-warning mt-3" style="background-color: #FFC107; border: none; padding: 10px 30px; font-size: 1rem; font-weight: 600; letter-spacing: 1px;">Submit Request</button>
        </form>
    </div>
</div>

<x-footer />