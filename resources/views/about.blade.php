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

	<!-- Breadcrumb Section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>About us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Section -->

    <!-- Search Area -->
    @include('partials.search')

    <div class="abt-section mb-150 mt-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12 d-flex justify-content-center mb-4">
                    <!-- Centered Image -->
                    <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid" alt="Fortune Logo">
                </div>
            </div>

            <div class="row">
                <!-- Left Column: About Us Details -->
                <div class="col-lg-6 col-md-12">
                    <div class="abt-text">
                        <h2>We are <span class="orange-text">Fortune</span></h2>
                        <p>Welcome to Fortune, Over the past three years, we have steadily built a reputation for excellence, innovation, and reliability.</p>
                        <p>Our products have gained positive reviews locally, establishing us as a trusted name in Ahmedabad’s vibrant business community.</p>
                        <p>We take pride in our commitment to quality, affordability, and customer satisfaction.</p>
                        <br>
                        <p><b>Our Brands</b></p>
                        <p><b>Week Free</b>: Affordable, comfortable, and skin-friendly sanitary pads designed with the modern woman in mind.</p>
                        <p><b>Baby Smile</b>: Safe, durable, and high-quality baby care products, including bottles, nipples, and other essential items to ensure your baby's comfort and safety.</p>
                        <p><b>No Entry</b>: Premium condoms that prioritize safety, reliability, and affordability for your personal wellness.</p>
                    </div>
                </div>

                <!-- Right Column: Mission, Vision, Why Choose Us -->
                <div class="col-lg-6 col-md-12">
                    <div class="abt-text">
                        <h3>Our Mission</h3>
                        <p>Our mission is to create products that enhance comfort, safety, and quality of life while being accessible to businesses across India and beyond. We aim to build long-term relationships with our partners by delivering exceptional products and services.</p>
                       <br>
                        <h3>Our Vision</h3>
                        <p>We envision becoming a leading name in the manufacturing of sanitary pads, baby care products, and condoms, expanding step by step to serve customers across India and globally. Through innovation, sustainability, and a commitment to excellence, we aim to positively impact the lives of millions.</p>
                        <br>
                        <h3>Why Choose Us?</h3>
                        <ul>
                        <li><strong>Local Expertise:</strong> Rooted in Ahmedabad, we understand the needs of our local community and B2B customers.</li>
                        <li><strong>Proven Quality:</strong> Backed by three years of consistent quality and positive reviews.</li>
                        <li><strong>Growth-Oriented:</strong> With a plan for step-by-step expansion, we are continuously innovating to serve you better.</li>
                        <li><strong>Customer-Centric:</strong> Your satisfaction is our top priority, and we strive to exceed expectations with every product.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
