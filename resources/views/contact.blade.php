@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<!-- PreLoader -->
<div class="loader">
    <div class="loader-inner">
        <div class="circle"></div>
    </div>
</div>
<!-- PreLoader Ends -->

<!-- Header -->
@include('partials.header')
<!-- End Header -->

<!-- Search Area -->
@include('partials.search')
<!-- End Search Area -->

<!-- Breadcrumb Section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">

                    <h1>Contact us</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Section -->

<!-- Contact Form -->
<div class="contact-from-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="form-title">
                    <h2>Do you have any Questions?</h2>
                    <p>Feel free to reach out to us through the form below, via email, or by giving us a call. Together, let’s build a healthier tomorrow!</p>
                </div>
                <div id="form_status"></div>
                <div class="contact-form">
                    <form method="POST" action="{{ url('contact') }}" id="fruitkha-contact">
                        @csrf
                        <p>
                            <input type="text" placeholder="Name" name="name" id="name" required>
                            <input type="email" placeholder="Email" name="email" id="email" required>
                        </p>
                        <p>
                            <input type="tel" placeholder="Phone" name="phone" id="phone" required>
                            <input type="text" placeholder="Subject" name="subject" id="subject" required>
                        </p>
                        <p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message" required></textarea></p>
                        <input type="hidden" name="token" value="FsWga4&@f6aw" />
                        <p><input type="submit" value="Submit"></p>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-form-wrap">
                    <div class="contact-form-box">
                        <h4><i class="fas fa-map"></i> Shop Address</h4>
                        <p>9/258, K&N Co-op. Society, <br> Ajit Mill Cross Road, <br> Rakhiyal, Ahmedabad - 380023.</p>
                    </div>
                    <div class="contact-form-box">
                        <h4><i class="far fa-clock"></i> Shop Hours</h4>
                        <p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
                    </div>
                    <div class="contact-form-box">
                        <h4><i class="fas fa-address-book"></i> Contact</h4>
                        <p>Phone: 9725131322 <br> Email: fortunerpharmacy@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Form -->

<!-- Find Our Location -->
<div class="find-location blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p><i class="fas fa-map-marker-alt"></i> Find Our Location</p>
            </div>
        </div>
    </div>
</div>
<!-- End Find Our Location -->

<!-- Google Map Section -->
<div class="embed-responsive embed-responsive-21by9">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.980339499787!2d73.15992977507028!3d22.331433779664177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc9edf2c46931%3A0x5eb0507a47a8220a!2sFortune%20Health%20Care!5e1!3m2!1sen!2sin!4v1735714470990!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- End Google Map Section -->

<!-- Footer -->
@include('partials.footer')
<!-- End Footer -->

<!-- Scripts -->
<script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>
<script src="{{ asset('assets/js/jquery.isotope-3.0.6.min.js') }}"></script>
<script src="{{ asset('assets/js/waypoints.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('assets/js/sticker.js') }}"></script>
<script src="{{ asset('assets/js/form-validate.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@endsection