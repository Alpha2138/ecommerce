<!-- partials/header.blade.php -->
<div class="top-header-area" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="main-menu-wrap">
                    <div class="site-logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="">
                        </a>
                    </div>
                    <nav class="main-menu">
                        <ul>
                            <li class="current-list-item"><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('about') }}">About</a></li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                            <li><a href="{{ url('shop') }}">Shop</a></li>

                            <!-- Products Dropdown - Only show if user is authenticated -->
                            @auth
                            <li class="has-dropdown">
                                <a href="#">Products</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('add-product') }}">Add Product</a></li>
                                    <li><a href="{{ url('add-category') }}">Add Category</a></li>
                                    <li><a href="{{ url('products') }}">Product List</a></li>
                                    <li><a href="{{ route('categories.index') }}">Category List</a></li>
                                </ul>
                            </li>
                            @endauth

                            <li>
                                <div class="header-icons d-flex align-items-center justify-content-end">
                                    <!-- User Dropdown - Only show if user is authenticated -->
                                    @auth
                                    <div class="has-dropdown">
                                        <a href="#">{{ Auth::user()->name }}</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('profile') }}">Profile</a></li> <!-- Profile Link -->
                                            <li>
                                                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item">Logout</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    @endauth

                                    <!-- Shopping Cart Icon -->
                                    <a class="shopping-cart ml-3" href="{{ url('cart') }}"><i class="fas fa-shopping-cart"></i></a>

                                    <!-- Search Icon -->
                                    <a class="mobile-hide search-bar-icon ml-3" href="#"><i class="fas fa-search"></i></a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</div>