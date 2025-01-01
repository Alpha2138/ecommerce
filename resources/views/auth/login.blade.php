@extends('layouts.app')

@section('title', 'Login')

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
                    <h1>Login</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Section -->

<!-- Login Form -->
<div class="contact-from-section mt-150 mb-150">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="form-title text-center">
                    <h2>Welcome Back!</h2>
                    <p>Please login to your account.</p>
                </div>
                <div id="form_status"></div>
                <div class="contact-form">
                    <form method="POST" action="{{ route('login') }}" id="login-form">
                        @csrf
                        <div class="contact-form-box">
                            <input type="email" placeholder="Email" name="email" id="email" class="form-control" required autofocus>
                        </div>
                        <div class="contact-form-box mt-4">
                            <input type="password" placeholder="Password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <div class="block">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                            <div>
                                <a href="{{ route('password.request') }}" class="underline text-sm text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100">
                                    {{ __('Forgot your password?') }}
                                </a>
                            </div>
                            @endif
                        </div>
                        <div class="text-center mt-4">
                            <input type="submit" value="Log in" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Login Form -->

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