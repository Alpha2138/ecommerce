@extends('layouts.app')

@section('title', 'Shop')

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
                    <p>Fresh and Organic</p>
                    <h1>Shop</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Section -->

<!-- Products Section -->
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-filters">
                    <form method="GET" action="{{ route('shop') }}">
                        <ul>
                            <li class="{{ request()->input('category') == 'all' ? 'active' : '' }}">
                                <button type="submit" name="category" value="all">All</button>
                            </li>
                            @foreach($categories as $category)
                            <li class="{{ request()->input('category') == $category->category_name ? 'active' : '' }}">
                                <button type="submit" name="category" value="{{ $category->category_name }}">{{ ucfirst($category->category_name) }}</button>
                            </li>
                            @endforeach
                        </ul>
                    </form>
                </div>
            </div>
        </div>

        <div class="row product-lists">
            @foreach($products as $product)
            <div class="col-lg-4 col-md-6 text-center {{ $product->category }}">
                <div class="single-product-item">
                    <div class="product-image" style="position: relative; width: 100%; height: 300px; overflow: hidden;">
                        <!-- Removed the <a> tag to prevent redirection -->
                        <img src="{{ asset('storage/' . $product->product_image) }}"
                            alt="{{ $product->product_name }}"
                            style="object-fit: cover;">
                    </div>

                    <h3>{{ $product->product_name }}</h3>
                    <p class="product-price">
                        &#8377;{{ number_format($product->price, 2) }}
                    </p>
                    <!-- Add to Cart Form -->
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                        <div class="d-flex align-items-center justify-content-center" style="gap: 10px;">
                            <input type="number" name="quantity" value="1" min="1" style="width: 60px; padding: 5px; text-align: center; border: 1px solid #ccc; border-radius: 5px; font-size: 16px; height: 40px;">
                            <button type="submit" class="cart-btn" style="padding: 8px 15px; font-size: 14px; color: white; background-color: #007bff; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s; height: 40px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-shopping-cart" style="margin-right: 8px;"></i> Add
                            </button>
                        </div>
                    </form>
                </div>

            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <!-- <div class="row">
            <div class="col-lg-12 text-center">
                <div class="pagination-wrap">
                    <ul>
                        <li><a href="#">Prev</a></li>
                        <li><a href="#">1</a></li>
                        <li><a class="active" href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div> -->
    </div>
</div>
<!-- End Products Section -->

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