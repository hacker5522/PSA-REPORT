<x-header />

<div class="page-hero bg-image overlay-dark" style="background-image: url('{{ asset('frontend/assets/img/plumber6.jpg') }}'); background-size: cover; background-position: center; height: 60vh; display: flex; align-items: center; justify-content: center;">
    <div class="hero-section text-center text-white">
        <h1 class="display-4" style="font-size: 3.5rem; font-weight: 700;">Contact Us</h1>
    </div>
</div>

<div class="page-section" style="padding: 80px 0;">
    <div class="container">
        <h1 class="text-center" style="font-size: 2.5rem; font-weight: 700;">Get In Touch</h1>
        <form class="main-form mt-5" style="max-width: 800px; margin: 0 auto;">
            <div class="row">
                <div class="col-12 col-sm-6 py-2">
                    <input type="text" class="form-control" placeholder="Full Name" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd;">
                </div>
                <div class="col-12 col-sm-6 py-2">
                    <input type="email" class="form-control" placeholder="Email Address" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd;">
                </div>
                <div class="col-12 col-sm-6 py-2">
                    <input type="text" class="form-control" placeholder="Phone Number" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd;">
                </div>
                <div class="col-12 py-2">
                    <textarea name="message" class="form-control" rows="6" placeholder="Your Message" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd;"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-warning mt-3" style="background-color: #FFC107; border: none; padding: 10px 30px; font-size: 1rem; font-weight: 600;">Send Message</button>
        </form>
    </div>
</div>


<x-footer />