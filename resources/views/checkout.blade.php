@extends('layouts.app')

@section('title', 'Check Out')

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
                       
                        <h1>Check Out Product</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Section -->

    <!-- Check Out Section -->
    <div class="checkout-section mt-100 mb-150">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Centered Table -->
                <div class="col-lg-8">
                    <div class="order-details-wrap">
                        <table class="table table-bordered table-striped" style="width: 100%; table-layout: fixed; border-collapse: collapse;">
                            <thead class="thead-light">
                                <tr>
                                    <th style="width: 75%;">Your Order Details</th>
                                    <th style="width: 25%;">Price</th>
                                </tr>
                            </thead>
                            <tbody class="order-details-body">
                                <!-- Static Products -->
                                <tr>
                                    <td>Strawberry</td>
                                    <td>₹85.00</td>
                                </tr>
                                <tr>
                                    <td>Berry</td>
                                    <td>₹70.00</td>
                                </tr>
                                <tr>
                                    <td>Lemon</td>
                                    <td>₹35.00</td>
                                </tr>
                            </tbody>
                            <tbody class="checkout-details">
                                <tr>
                                    <td>Subtotal</td>
                                    <td>₹190.00</td>
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td>₹50.00</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>₹240.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Place Order on WhatsApp Button -->
                        <a href="https://wa.me/9558698068?text=I%20would%20like%20to%20order%20the%20following%3A%0A%0A%20%20%20%20Strawberry%20-%20%2485.00%0A%20%20%20%20Berry%20-%20%2470.00%0A%20%20%20%20Lemon%20-%20%2435.00%0A%20Subtotal%20%3A%20%24190.00%0A%20Shipping%20%3A%20%2450.00%0A%20Total%20%3A%20%24240.00" class="btn btn-success btn-block" target="_blank">
                            Place Order on WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Check Out Section -->

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
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
