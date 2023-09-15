<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Daban</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('fas/assets/images/favicon.png') }}">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('fas/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fas/assets/css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('fas/assets/css/vendor/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('fas/assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('fas/assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('fas/assets/css/vendor/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fas/assets/css/vendor/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('fas/assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('fas/assets/css/vendor/base.css') }}">
    <link rel="stylesheet" href="{{ asset('fas/assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/toastr/toastr.min.css') }}">
    <style>
        .toast-message {
            font-size: 16px !important;
        }

        .bg_image--5 {
            background-image: url({{asset('fas/assets/images/logo/newsL3.png')}});
        }
    </style>


</head>


<body class="sticky-header newsletter-popup-modal">

    <header class="header axil-header header-style-1">
        <div class="header-top-campaign">
            <div class="container position-relative">
                <div class="campaign-content">
                    <p>Open doors to the world of electronics</p>
                </div>
            </div>
            <button class="remove-campaign"><i class="fal fa-times"></i></button>
        </div>
        <div class="axil-header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="header-top-dropdown">
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    English
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">Arabic</a></li>
                                    <li><a class="dropdown-item" href="#">Spanish</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    USD
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">USD</a></li>
                                    <li><a class="dropdown-item" href="#">AUD</a></li>
                                    <li><a class="dropdown-item" href="#">EUR</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @if (auth()->guest())
                    <div class="col-sm-6">
                        <div class="header-top-link">
                            <ul class="quick-link">
                                <li><a href="#">Help</a></li>
                                <li><a href="{{ route('login') }}">Sign In</a></li>
                            </ul>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- Start Mainmenu Area  -->
        <div id="axil-sticky-placeholder"></div>
        <div class="axil-mainmenu">
            <div class="container">
                <div class="header-navbar">
                    <div class="header-brand">
                        <a href="{{ route('front.index') }}" class="logo logo-dark">
                            <img src="{{ asset('fas/assets/images/logo/Daban.jpg') }}" alt="Site Logo" width="120" height="80">
                        </a>
                        <a href="index.html" class="logo logo-light">
                            <img src="{{ asset('fas/assets/images/logo/logo-light.png') }}" alt="Site Logo">
                        </a>
                    </div>
                    <div class="header-main-nav">
                        <!-- Start Mainmanu Nav -->
                        <nav class="mainmenu-nav">
                            <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                            <div class="mobile-nav-brand">
                                <a href="index.html" class="logo">
                                    <img src="{{ asset('fas/assets/images/logo/logo.png') }}" alt="Site Logo">
                                </a>
                            </div>
                            <ul class="mainmenu">
                                <li><a href="{{ route('front.index') }}">Home</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="axil-submenu">
                                        <li><a href="{{ route('front.sidebar') }}">Shop With Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('front.about') }}">About</a></li>

                            </ul>
                        </nav>
                        <!-- End Mainmanu Nav -->
                    </div>
                    <div class="header-action">
                        <ul class="action-list">
                            <li class="axil-search d-xl-block d-none">
                                <input type="search" class="placeholder product-search-input" name="search2"
                                    id="search2" value="" maxlength="128" placeholder=" ? What are you looking for"
                                    autocomplete="off">
                                <button type="submit" class="icon wooc-btn-search">
                                    <i class="flaticon-magnifying-glass"></i>
                                </button>
                            </li>
                            <li class="axil-search d-xl-none d-block">
                                <a href="javascript:void(0)" class="header-search-icon" title="Search">
                                    <i class="flaticon-magnifying-glass"></i>
                                </a>
                            </li>
                            <li class="shopping-cart">
                                <a href="#" class="cart-dropdown-btn">
                                    <span class="cart-count" id="carts-count">{{ count($carts) }}</span>
                                    <i class="flaticon-shopping-cart"></i>
                                </a>
                            </li>
                            <li class="my-account">
                                <a href="javascript:void(0)">
                                    <i class="flaticon-person"></i>
                                </a>
                                <div class="my-account-dropdown">
                                    <span class="title">QUICKLINKS</span>
                                    <ul>
                                        <li>
                                            <a href="{{ route('home') }}">My Account</a>
                                        </li>
                                    </ul>
                                    @if (auth()->guest())
                                    <a href="{{ route('login') }}" class="axil-btn btn-bg-primary">Login</a>
                                    <div class="reg-footer text-center">No account yet? <a
                                            href="{{ route('register') }}" class="btn-link">REGISTER HERE.</a>
                                    </div>
                                    @endif
                                </div>
                            </li>
                            <li class="axil-mobile-toggle">
                                <button class="menu-btn mobile-nav-toggler">
                                    <i class="flaticon-menu-2"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mainmenu Area -->
    </header>

    <main class="main-wrapper">
        <div class="axil-main-slider-area main-slider-style-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-sm-6">
                        <div class="main-slider-content">
                            <div class="slider-content-activation-one">
                                <div class="single-slide slick-slide" data-sal="slide-up" data-sal-delay="400"
                                    data-sal-duration="800">
                                    <span class="subtitle"><i class="fas fa-fire"></i> Hot Deal In This Week</span>
                                    <h1 class="title">We have everything you need</h1>
                                    <div class="slide-action">
                                        <div class="shop-btn">
                                            <a href="{{ route('front.sidebar') }}" class="axil-btn btn-bg-white"><i
                                                    class="fal fa-shopping-cart"></i>Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide slick-slide">
                                    <span class="subtitle"><i class="fas fa-fire"></i> Hot Deal In This Week</span>
                                    <h2 class="title">That making cool look easy feeling</h2>
                                    <div class="slide-action">
                                        <div class="shop-btn">
                                            <a href="{{ route('front.sidebar') }}" class="axil-btn btn-bg-white"><i
                                                    class="fal fa-shopping-cart"></i>Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="main-slider-large-thumb">
                            <div class="slider-thumb-activation-one axil-slick-dots">
                                @foreach ($products->take(3)->reverse() as $product)
                                <div class="single-slide slick-slide" data-sal="slide-up" data-sal-delay="600"
                                    data-sal-duration="1500">
                                    <img class="img-fluid" style="width:500px; height: 500px; !important "
                                        src="{{ Storage::url($product->image) }}" alt="products">
                                    <div class="product-price">
                                        <span class="text">From</span>
                                        <span class="price-amount">${{ $product->price }}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1"><img src="{{ asset('fas/assets/images/others/shape-1.png') }}" alt="Shape">
                </li>
                <li class="shape-2"><img src="{{ asset('fas/assets/images/others/shape-2.png') }}" alt="Shape">
                </li>
            </ul>
        </div>

        <!-- Start Categorie Area  -->
        <div class="axil-categorie-area bg-color-white axil-section-gapcommon">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-secondary"> <i class="far fa-tags"></i>
                        Categories</span>
                    <h2 class="title">Browse by Category</h2>
                </div>
                <div class="categrie-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
                    @foreach ($categories as $categorie)
                    <div class="slick-single-layout">
                        <div class="categrie-product" data-sal="zoom-out" data-sal-delay="200" data-sal-duration="500">
                            <a href="{{ route('front.sidebar', ['category' => $categorie->id]) }}">
                                <img class="img-fluid" style="width:300px; height: 150px; !important "
                                    src="{{ Storage::url($categorie->image) }}" alt="product categorie">
                                <h6 class="cat-title">{{ $categorie->categoryName }}</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- End Categorie Area  -->
        <!-- Start Expolre Product Area  -->
        <div class="axil-product-area bg-color-white axil-section-gap">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i> Our
                        Products</span>
                    <h2 class="title">Explore our Products</h2>
                </div>
                <div
                    class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                    <div class="slick-single-layout">
                        <div class="row row--15">
                            @foreach ($products->take(8) as $product)
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a href="{{ route('front.productItem', $product->id) }}">
                                            <img data-sal="zoom-out" style="height: 300px ; width: 300px;"
                                                data-sal-delay="300" data-sal-duration="800" loading="lazy"
                                                src="{{ Storage::url($product->image) }}" alt="Product Images">
                                            <img class="hover-img" style="height: 300px ; width: 300px;"
                                                src="{{ Storage::url($product->image) }}" alt="Product Images">
                                        </a>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="quickview"><a onclick="quickView({{ $product->id }})"
                                                        data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i
                                                            class="far fa-eye"></i></a></li>
                                                <li class="select-option">
                                                    <a onclick="addProductToCart({{ $product->id }})">Add to
                                                        Cart</a>
                                                </li>
                                                <li class="wishlist"><a href="#"><i class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <h5 class="title">{{ $product->category->categoryName }}</h5>
                                            <h5><a href="{{ route('front.productItem', $product->id) }}">{{
                                                    $product->productName }}</a>
                                            </h5>
                                            @if ($product->flag)
                                            <div class="product-price-variant">
                                                <span class="price current-price">${{ $product->discount }}</span>
                                                <span class="price old-price">${{ $product->price }}</span>
                                            </div>
                                            @else
                                            <div class="product-price-variant">
                                                <span class="price current-price">${{ $product->price }}</span>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Axil Product Poster Area  -->
        <div class="axil-poster">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb--30">
                        <div class="single-poster">
                            <a href="{{route('front.sidebar')}}">
                                <img src="{{ asset('fas/assets/images/product/poster/electronec1.png') }}"
                                    style="height: 300px " alt="eTrade promotion poster">
                                <div class="poster-content">
                                </div>
                                <!-- End .poster-content -->
                            </a>
                        </div>
                        <!-- End .single-poster -->
                    </div>
                    <div class="col-lg-6 mb--30">
                        <div class="single-poster">
                            <a href="{{route('front.sidebar')}}">
                                <img src="{{ asset('fas/assets/images/product/poster/electronec3.jpg') }}"
                                    style="height: 300px ;" alt="eTrade promotion poster">
                                <div class="poster-content content-left">
                                    <div class="inner">
                                        <span class="sub-title" style="color: black></span>
                                        <h3 class="sub-title style="color: black"> <br> </h3>
                                    </div>
                                </div>
                                <!-- End .poster-content -->
                            </a>
                        </div>
                        <!-- End .single-poster -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Axil Product Poster Area  -->

        <!-- Start Axil Newsletter Area  -->
        <div class="axil-newsletter-area axil-section-gap pt--0">
            <div class="container">
                <div class="etrade-newsletter-wrapper bg_image bg_image--5">
                    <div class="newsletter-content">
                        <span class="title-highlighter highlighter-primary2"><i
                                class="fas fa-envelope-open"></i>Newsletter</span>
                        <h2 class="title mb--40 mb_sm--30">Get weekly <br> update</h2>
                        <div class="input-group newsletter-form">
                            <div class="position-relative newsletter-inner mb--15">
                                <input placeholder="example@gmail.com" type="text" id="email">
                            </div>
                            <button type="submit" class="axil-btn mb--15">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .container -->
        </div>
        <!-- End Axil Newsletter Area  -->

    </main>


    <div class="service-area">
        <div class="container">
            <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="{{ asset('fas/assets/images/icons/service1.png') }}" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Fast &amp; Secure Delivery</h6>
                            <p>Tell about your service.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="{{ asset('fas/assets/images/icons/service2.png') }}" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Money Back Guarantee</h6>
                            <p>Within 10 days.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="{{ asset('fas/assets/images/icons/service3.png') }}" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">24 Hour Return Policy</h6>
                            <p>No question ask.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="{{ asset('fas/assets/images/icons/service4.png') }}" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Pro Quality Support</h6>
                            <p>24/7 Live support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Area  -->
    <footer class="axil-footer-area footer-style-2">
        <!-- Start Footer Top Area  -->
        <div class="footer-top separator-top">
            <div class="container">
                <div class="row">
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Support</h5>
                            <div class="logo mb--30">
                                <a href="{{ route('home') }}">
                                    <img class="light-logo" src="{{ asset('fas/assets/images/logo/Daban.jpg') }}"
                                        alt="Logo Images" width="120" height="80">
                                </a>
                            </div>
                            <div class="inner">
                                <p> <i class="far fa-map-marker-alt"></i> &nbsp; {{ $support->address }}</p>

                                <ul class="support-list-item">
                                    <li><a href="https://mail.google.com/mail/u/0/#inbox"> <i
                                                class="fal fa-envelope-open"></i> &nbsp;
                                            {{ $support->email }}</a></li>
                                    <li><a href="tel:{{ $support->phone }}"> <i class="fal fa-phone-alt"></i> &nbsp;
                                            {{ $support->phone }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Account</h5>
                            <div class="inner">
                                <ul>
                                    <li><a href="{{ route('home') }}">My Account</a></li>
                                    <li><a href="{{ route('login') }}">Login / Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Quick Link</h5>
                            <div class="inner">
                                <ul>
                                    <li><a href="{{ route('front.about') }}">About-us</a></li>
                                    <li><a href="{{ route('cart') }}">Cart</a></li>
                                    <li><a href="{{ route('front.sidebar') }}">Wishlist</a></li>
                                    <li><a href="{{ route('front.sidebar') }}">Shop</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Download App</h5>
                            <div class="inner">
                                <span>Save $3 With App & New User only</span>
                                <div class="download-btn-group">
                                    <div class="qr-code">
                                        <img src="{{ asset('fas/assets/images/others/qr.png') }}" alt="Axilthemes">
                                    </div>
                                    <div class="app-link">
                                        <a href="#">
                                            <img src="{{ asset('fas/assets/images/others/app-store.png') }}"
                                                alt="App Store">
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('fas/assets/images/others/play-store.png') }}"
                                                alt="Play Store">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                </div>
            </div>
        </div>
        <!-- End Footer Top Area  -->
        <!-- Start Copyright Area  -->
        <div class="copyright-area copyright-default separator-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="social-share">
                            <a href="https://www.facebook.com/dabancom?locale=ar_AR"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/daban.co/"><i class="fab fa-instagram"></i></a>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="copyright-left d-flex flex-wrap justify-content-center">
                            <ul class="quick-link">
                                <li style="width: 550px"> ©
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                    , made with ❤️ by <span>Mostafa, Mohammed, Osama & Mohammed</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div
                            class="copyright-right d-flex flex-wrap justify-content-xl-end justify-content-center align-items-center">
                            <span class="card-text">Accept For</span>
                            <ul class="payment-icons-bottom quick-link">
                                <li><img src="{{ asset('fas/assets/images/icons/cart/cart-1.png') }}" alt="paypal cart">
                                </li>
                                <li><img src="{{ asset('fas/assets/images/icons/cart/cart-2.png') }}" alt="paypal cart">
                                </li>
                                <li><img src="{{ asset('fas/assets/images/icons/cart/cart-5.png') }}" alt="paypal cart">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area  -->
    </footer>
    <!-- End Footer Area  -->

    <!-- Product Quick View Modal Start -->
    <div class="modal fade quick-view-product" id="quick-view-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="far fa-times"></i></button>
                </div>
                <div class="modal-body" id="quickViewProduct">

                </div>
            </div>
        </div>
    </div>

    <!-- Product Quick View Modal End -->


    <div class="header-search-modal" id="header-search-modal">
        <button class="card-close sidebar-close"><i class="fas fa-times"></i></button>
        <div class="header-search-wrap">
            <div class="card-header">
                <form action="#">
                    @csrf
                    <div class="input-group">
                        <input type="search" class="form-control" onkeyup="productSearch(this)" name="prod-search"
                            id="prod-search" placeholder="Write Something....">
                        <button type="submit" class="axil-btn btn-bg-primary"><i class="far fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="search-result-header">
                    <span class="filter-results">Result (<span style="color: #3577F0; font-size:19px;">{{
                            $products->count() }}</span>)
                        Found</span>
                    <a href="{{ route('front.sidebar') }}" class="view-all">View All</a>
                </div>
                <div class="psearch-results" id="searchContainer">

                </div>
            </div>
        </div>
    </div>


    <div class="cart-dropdown" id="cart-dropdown">
        <div class="cart-content-wrap">
            <div class="cart-header">
                <h2 class="header-title">Cart review</h2>
                <button class="cart-close sidebar-close"><i class="fas fa-times"></i></button>
            </div>

            <div class="cart-body">
                <ul class="cart-item-list" id="cart-list-container">
                    @foreach ($carts as $cart)
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="{{ route('front.productItem', $cart->product_id) }}"><img
                                    src="{{ Storage::url($cart->product->image) }}" alt="Commodo Blown Lamp"></a>
                            <button class="close-btn" onclick="removeProduct({{ $cart->product_id }}, this)"><i
                                    class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="{{ route('front.productItem', $cart->product_id) }}">{{
                                    $cart->product->productName }}</a>
                            </h3>
                            <div class="item-price"><span class="currency-symbol">$</span>{{ !$cart->product->flag ?
                                $cart->product->price : $cart->product->discount }}
                            </div>
                            <div class="pro-qty item-quantity">
                                <span class="dec qtybtn"
                                    onclick="changeQuantity({{ $cart->product_id }}, 'dec', this)">-</span>
                                <input type="number" class="quantity-input" id="quantity_{{ $cart->product_id }}"
                                    value="{{ $cart->quantity }}" disabled>
                                <span class="inc qtybtn"
                                    onclick="changeQuantity({{ $cart->product_id }}, 'inc', this)">+</span>
                            </div>

                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="cart-footer">
                <h3 class="cart-subtotal">
                    <span class="subtotal-title">Subtotal:</span>
                    <span class="subtotal-amount">$<span id="carts-total">{{ $total }}</span></span>

                </h3>
                <div class="group-btn">
                    <a href="{{ route('cart') }}" class="axil-btn btn-bg-primary viewcart-btn">View Cart</a>
                    <a href="{{ route('checkout') }}" class="axil-btn btn-bg-secondary checkout-btn">Checkout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Offer Modal Start -->
    <div class="offer-popup-modal" id="offer-popup-modal">
        <div class="offer-popup-wrap">
            <div class="card-body">
                <button class="popup-close"><i class="fas fa-times"></i></button>
                <div class="content">
                    <div class="section-title-wrapper">
                        <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i>
                            Don’t Miss!!</span>
                        <h3 class="title">Best Sales Offer<br> Grab Yours</h3>
                    </div>
                    <div class="poster-countdown countdown"></div>
                    <a href="shop.html" class="axil-btn btn-bg-primary">Shop Now <i
                            class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="closeMask"></div>
    <!-- Offer Modal End -->
    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('fas/assets/js/vendor/modernizr.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('fas/assets/js/vendor/jquery.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('fas/assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('fas/assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fas/assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('fas/assets/js/vendor/js.cookie.js') }}"></script>
    <!-- <script src="{{ asset('fas/assets/js/vendor/jquery.style.switcher.js') }}"></script> -->
    <script src="{{ asset('fas/assets/js/vendor/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('fas/assets/js/vendor/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('fas/assets/js/vendor/sal.js') }}"></script>
    <script src="{{ asset('fas/assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('fas/assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('fas/assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('fas/assets/js/vendor/counterup.js') }}"></script>
    <script src="{{ asset('fas/assets/js/vendor/waypoints.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('fas/assets/js/rtl-main.js') }}"></script>
    {{-- <script src="{{asset('fas/js/popper.min.js')}}"></script> --}}

    <script src="{{ asset('js/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('js/axios.js') }}"></script>
    <script src="{{ asset('js/Crud.js') }}"></script>
    <script src="{{ asset('js/sweet.js') }}"></script>

    <script>
        //Product Search
        function productSearch(e) {
            axios.get(`/daban/search?q=${e.value}`)
                .then(function(response) {
                    console.log(response);
                    document.getElementById('searchContainer').innerHTML = response.data;
                })
                .catch(function(error) {
                    console.log(error);
                });
        }

        //Change Quantity
        function changeQuantity(id, type, ref) {
            setTimeout(() => {
                console.log(document.getElementById('quantity_' + id).value)
                if (document.getElementById('quantity_' + id).value < 1) {
                    removeProduct(id, ref)
                } else {
                    axios.put(`/daban/cart/${id}`, {
                        type: type
                    }).then((response) => {
                        console.log(response.data);
                        document.getElementById('carts-total').innerHTML = response.data.total;
                    }).catch((error) => {
                        console.log(error.response.data);
                    })
                }
            }, 1);
        }





        //QuickView
        function quickView(d) {
            axios.get(`/daban/quickView/${d}`)
                .then(function(response) {
                    console.log(response);
                    document.getElementById('quickViewProduct').innerHTML = response.data;
                })
                .catch(function(error) {
                    console.log(error);
                });
        }

        // Add Product to Cart
        function addProductToCart(id) {
            let url = `/daban/cart/add/${id}`;
            let data = {
                quantity: 1
            }
            axios.post(url, data).then((response) => {
                console.log(response)
                toastr.success(response.data.message);
                document.getElementById('cart-list-container').innerHTML = response.data.cartList;
                document.getElementById('carts-count').innerHTML = response.data.cartCount;
                document.getElementById('carts-total').innerHTML = response.data.cartTotal;

                $('.qtybtn').on('click', function() {
                    var $button = $(this);
                    var oldValue = $button.parent().find('input').val();
                    if ($button.hasClass('inc')) {
                        var newVal = parseFloat(oldValue) + 1;
                    } else {
                        // Don't allow decrementing below zero
                        if (oldValue > 0) {
                            var newVal = parseFloat(oldValue) - 1;
                        } else {
                            newVal = 0;
                        }
                    }
                    $button.parent().find('input').val(newVal);
                });
            }).catch((error) => {
                console.log(error.response)
                toastr.success(error.response.data.message);
            })
        }

        // Remove Product from Slide Cart
        function removeProduct(id, ref) {
            console.log('Removing product with ID ' + id);
            let url = `/daban/cart/${id}`;
            axios.delete(url).then((response) => {
                console.log('Product removed successfully:', response);
                toastr.success(response.data.message);
                ref.closest('li').remove();
                document.getElementById('carts-count').innerHTML = response.data.cartCount;
                document.getElementById('carts-total').innerHTML = response.data.cartTotal;
            }).catch((error) => {
                console.log('Error removing product:', error);
                toastr.error(error.response.data.message);
            })
        }


        //Subscribe
        function Subscribe(d) {
            axios.get(`/subscribe/${d}`)
                .then(function(response) {
                    console.log(response);
                    document.getElementById('subscribe').innerHTML = response.data;
                })
                .catch(function(error) {
                    console.log(error);
                });
        }

    </script>

</body>

</html>
