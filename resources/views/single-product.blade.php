@extends('layouts.app')

@section('title', 'Single Product')

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
                    <p>See more Details</p>
                    <h1>Single Product</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Section -->

<!-- Single Product -->
<div class="single-product mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="single-product-img">
                    <img src="{{ asset('storage/' . $product->product_image) }}" alt="{{ $product->product_name }}">
                </div>
            </div>
            <div class="col-md-7">
                <div class="single-product-content">
                    <h3>{{ $product->product_name }}</h3>
                    <p class="single-product-pricing"><span>Per Unit</span> &#8377;{{ number_format($product->price, 2) }}</p>
                    <p>{{ $product->description }}</p>
                    <div class="single-product-form">
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="number" placeholder="0" name="quantity" required>
                            <button type="submit" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </form>
                        <p><strong>Categories: </strong>{{ ucfirst($product->category) }}</p>
                    </div>
                    <h4>Share:</h4>
                    <ul class="product-share">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Single Product -->

<!-- More Products -->
<div class="more-products mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Related</span> Products</h3>
                    <p>Explore similar items.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($relatedProducts as $relatedProduct)
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="{{ route('single-product', $relatedProduct->id) }}"><img src="{{ asset('storage/' . $relatedProduct->product_image) }}" alt=""></a>
                    </div>
                    <h3>{{ $relatedProduct->product_name }}</h3>
                    <p class="product-price"><span>Per Unit</span> &#8377;{{ number_format($relatedProduct->price, 2) }}</p>
                    <a href="{{ route('cart.add', $relatedProduct->id) }}" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End More Products -->

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