<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Daban | Product Item</title>
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

        .single-product-thumbnail .thumbnail img {
            width: 100%;
            border-radius: 6px;
        }

        .bg_image--5 {
            background-image: url({{ asset('fas/assets/images/logo/newsL3.png') }});
        }
    </style>

</head>


<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
    <!-- Start Header -->
    <header class="header axil-header header-style-5">

        <!-- Start Mainmenu Area  -->
        <div id="axil-sticky-placeholder"></div>
        <div class="axil-mainmenu">
            <div class="container">
                <div class="header-navbar">
                    <div class="header-brand">
                        <a href="index.html" class="logo logo-dark">
                            <img src="{{ asset('fas/assets/images/logo/Daban.jpg') }}" alt="Site Logo" width="120"
                                height="80">
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
                                <li>
                                    <a href="{{ route('front.index') }}">Home</a>
                                </li>
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
                                    id="search2" value="" maxlength="128"
                                    placeholder="?What are you looking for" autocomplete="off">
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
        <div class="header-top-campaign">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-10">
                        <div class="header-campaign-activation axil-slick-arrow arrow-both-side header-campaign-arrow">
                            <div class="slick-slide">
                                <div class="campaign-content">
                                    <p>Shop NOW GET 10% OFF</p>
                                </div>
                            </div>
                            <div class="slick-slide">
                                <div class="campaign-content">
                                    <p>Shop NOW GET 10% OFF</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <main class="main-wrapper">
        <!-- Start Shop Area  -->
        <div class="axil-single-product-area bg-color-white">
            <div class="single-product-thumb axil-section-gap pb--20 pb_sm--0 bg-vista-white">
                <div class="container">
                    <div class="row row--50">
                        <div class="col-lg-6 mb--40">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div
                                        class="product-large-thumbnail-2 single-product-thumbnail axil-product slick-layout-wrapper--15 axil-slick-arrow arrow-both-side-3">
                                        <div class="thumbnail">
                                            <img src="{{ Storage::url($products->image) }}" alt="Product Images"
                                                style="width: 1000px; height: 500px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb--40">

                            <div class="single-product-content">
                                <div class="inner">
                                    <h5 class="title">{{ $products->category->categoryName }}</h5>
                                    <h2 class="product-title">{{ $products->productName }}</h2>
                                    @if ($products->flag)
                                        <div class="product-price-variant">
                                            <h4><span class="price current-price">${{ $products->discount }}</span>
                                                <del><span
                                                        class="price old-price">${{ $products->price }}</span></del>
                                            </h4>
                                        </div>
                                    @else
                                        <div class="product-price-variant">
                                            <h4> <span class="price current-price">${{ $products->price }}</span></h4>
                                        </div>
                                    @endif

                                    <div class="product-rating">
                                        <div class="star-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>

                                    <ul class="product-meta">
                                        <li><i class="fal fa-check"></i>In stock ({{ $products->quantity }})</li>
                                        <li><i class="fal fa-check"></i>Free Delivery Available</li>
                                    </ul>

                                    <div class="product-variations-wrapper">

                                        <!-- Start Product Variation  -->
                                        <div class="product-variation">
                                            <h6 class="title">Colors:</h6>
                                            <div class="color-variant-wrapper">
                                                <ul class="color-variant mt--0">
                                                    <li class="color-extra-01 active"><span><span
                                                                class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-02"><span><span
                                                                class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-03"><span><span
                                                                class="color"></span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- End Product Variation  -->

                                        <!-- Start Product Variation  -->
                                        <div class="product-variation product-size-variation">
                                            <h6 class="title">Size:</h6>
                                            <ul class="range-variant">
                                                <li>xs</li>
                                                <li>s</li>
                                                <li>m</li>
                                                <li>l</li>
                                                <li>xl</li>
                                            </ul>
                                        </div>
                                        <!-- End Product Variation  -->

                                        <h4 class="primary-color mb--40 desc-heading">Description</h4>
                                        <div class="single-desc mb--30">
                                            <h5 class="title">Specifications:</h5>
                                            <p>{{ $products->discreption }}</p>
                                        </div>
                                    </div>
                                    <hr class="sidebar-divider">

                                    <!-- Start Product Action Wrapper  -->
                                    <div class="product-action-wrapper d-flex-center">
                                        <!-- Start Quentity Action  -->

                                        {{-- @foreach ($carts->take($products->id) as $cart)

                                        <div class="pro-qty item-quantity">
                                            <span class="dec qtybtn"
                                                onclick="changeQuantity({{ $carts->product_id }}, 'dec', this)">-</span>
                                            @if ($carts->quantity)

                                            <input type="number" class="quantity-input"
                                                id="quantity_{{ $carts->product_id }}" value="{{  $carts->quantity }}">
                                            @else
                                            <input type="number" class="quantity-input"
                                                id="quantity_{{ $carts->product_id }}" value="0">
                                            @endif
                                            <span class="inc qtybtn"
                                                onclick="changeQuantity({{  $carts->product_id }}, 'inc', this)">+</span>
                                        </div>
                                        @endforeach --}}
                                        <!-- Start Product Action  -->
                                        <ul class="product-action d-flex-center mb--0">
                                            <li class="add-to-cart"><button type="button"
                                                    onclick="addProductToCart()" class="axil-btn btn-bg-primary">Add
                                                    to Cart</button></li>
                                            <li class="wishlist"><a href="#" class="axil-btn wishlist-btn"><i
                                                        class="far fa-heart"></i></a>
                                            </li>
                                        </ul>
                                        <!-- End Product Action  -->

                                    </div>
                                    <ul class="pro-des-features pro-desc-style-two pt-10">
                                        <li class="single-features">
                                            <div class="icon">
                                                <img src="{{ asset('fas/assets/images/product/product-thumb/icon-3.png') }}"
                                                    alt="icon">
                                            </div>
                                            Easy Returns
                                        </li>
                                        <li class="single-features">
                                            <div class="icon">
                                                <img src="{{ asset('fas/assets/images/product/product-thumb/icon-2.png') }}"
                                                    alt="icon">
                                            </div>
                                            Quality Service
                                        </li>
                                        <li class="single-features">
                                            <div class="icon">
                                                <img src="{{ asset('fas/assets/images/product/product-thumb/icon-1.png') }}"
                                                    alt="icon">
                                            </div>
                                            Original Product
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .single-product-thumb -->

        </div>
        <!-- End Shop Area  -->

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
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Support</h5>
                            <div class="logo mb--30" style=" margin-bottom: 15px;">
                                <a href="{{ route('home') }}">
                                    {{-- <img class="light-logo" src="{{ asset('fas/assets/images/logo/daban_grey.png') }}" --}}
                                    <img class="light-logo" style="opacity: 0.6; filter: grayscale(1); height: 100px;"
                                        src="{{ asset('fas/assets/images/logo/Daban.jpg') }}" alt="Logo Images">
                                </a>
                            </div>
                            <div class="inner">

                                <ul class="support-list-item">
                                    <i class="far fa-map-marker-alt"></i> &nbsp; {{ $support->address }}
                                    <li>
                                        <a href="https://mail.google.com/mail/u/0/#inbox">
                                            <i class="fal fa-envelope-open"></i>
                                            &nbsp; {{ $support->email }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tel:{{ $support->phone }}">
                                            <i class="fal fa-phone-alt"></i>
                                            &nbsp; {{ $support->phone }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->

                    <!-- Start Single Widget  -->
                    <div class="col-lg-2 col-md-6 col-sm-6">
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
                    <div class="col-lg-2 col-md-6 col-sm-6">
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

                    {{-- <!-- Start Single Widget  -->
                    <div class="col-lg-1 col-md-6 col-sm-6">
                        <div class="axil-footer-widget">
                            <div class="inner">
                                <div style="background-color: #f6f7fb; width: 2px;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  --> --}}

                    <!-- Start Single Widget (Map Widget Takes Two Columns) -->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="axil-footer-widget">
                            {{-- <h5 class="widget-title">Location</h5> --}}
                            <div class="inner">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3401.743066883534!2d34.455341!3d31.5037454!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fd7f711080143d%3A0xe82e58c9eaecea6f!2z2LTYsdmD2Kkg2LbYqNin2YYg2YTZhNij2KzZh9iy2Kkg2KfZhNmD2YfYsdio2KfYptmK2Kkg2Ygg2KPYr9mI2KfYqiDYp9mE2LrYp9iy!5e0!3m2!1sen!2s!4v1694919425401!5m2!1sen!2s"
                                    width="100%" height="308" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                            <a href="https://www.facebook.com/dabancom?locale=ar_AR"><i
                                    class="fab fa-facebook-f"></i></a>
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
                                    , made with ❤️ by
                                    <a target="_blank" class="footer-link fw-bolder">Mostafa, Mohammed, Osama &
                                        Mohammed</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div
                            class="copyright-right d-flex flex-wrap justify-content-xl-end justify-content-center align-items-center">
                            <span class="card-text">Accept For</span>
                            <ul class="payment-icons-bottom quick-link">
                                <li><img src="{{ asset('fas/assets/images/icons/cart/cart-1.png') }}"
                                        alt="paypal cart">
                                </li>
                                <li><img src="{{ asset('fas/assets/images/icons/cart/cart-2.png') }}"
                                        alt="paypal cart">
                                </li>
                                <li><img src="{{ asset('fas/assets/images/icons/cart/cart-5.png') }}"
                                        alt="paypal cart">
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
                <div class="modal-body">
                    <div class="single-product-thumb">
                        <div class="row">
                            <div class="col-lg-7 mb--40">
                                <div class="row">
                                    <div class="col-lg-10 order-lg-2">
                                        <div
                                            class="single-product-thumbnail product-large-thumbnail axil-product thumbnail-badge zoom-gallery">
                                            <div class="thumbnail">
                                                <img src="{{ asset('fas/assets/images/product/product-big-01.png') }}"
                                                    alt="Product Images">
                                                <div class="label-block label-right">
                                                    <div class="product-badget">20% OFF</div>
                                                </div>
                                                <div class="product-quick-view position-view">
                                                    <a href="{{ asset('fas/assets/images/product/product-big-01.png') }}"
                                                        class="popup-zoom">
                                                        <i class="far fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="thumbnail">
                                                <img src="{{ asset('fas/assets/images/product/product-big-02.png') }}"
                                                    alt="Product Images">
                                                <div class="label-block label-right">
                                                    <div class="product-badget">20% OFF</div>
                                                </div>
                                                <div class="product-quick-view position-view">
                                                    <a href="{{ asset('fas/assets/images/product/product-big-02.png') }}"
                                                        class="popup-zoom">
                                                        <i class="far fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="thumbnail">
                                                <img src="{{ asset('fas/assets/images/product/product-big-03.png') }}"
                                                    alt="Product Images">
                                                <div class="label-block label-right">
                                                    <div class="product-badget">20% OFF</div>
                                                </div>
                                                <div class="product-quick-view position-view">
                                                    <a href="{{ asset('fas/assets/images/product/product-big-03.png') }}"
                                                        class="popup-zoom">
                                                        <i class="far fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 order-lg-1">
                                        <div class="product-small-thumb small-thumb-wrapper">
                                            <div class="small-thumb-img">
                                                <img src="{{ asset('fas/assets/images/product/product-thumb/thumb-08.png') }}"
                                                    alt="thumb image">
                                            </div>
                                            <div class="small-thumb-img">
                                                <img src="{{ asset('fas/assets/images/product/product-thumb/thumb-07.png') }}"
                                                    alt="thumb image">
                                            </div>
                                            <div class="small-thumb-img">
                                                <img src="{{ asset('fas/assets/images/product/product-thumb/thumb-09.png') }}"
                                                    alt="thumb image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 mb--40">
                                <div class="single-product-content">
                                    <div class="inner">
                                        <div class="product-rating">
                                            <div class="star-rating">
                                                <img src="{{ asset('fas/assets/images/icons/rate.png') }}"
                                                    alt="Rate Images">
                                            </div>
                                            <div class="review-link">
                                                <a href="#">(<span>1</span> customer reviews)</a>
                                            </div>
                                        </div>
                                        <h3 class="product-title">Serif Coffee Table</h3>
                                        <span class="price-amount">$155.00 - $255.00</span>
                                        <ul class="product-meta">
                                            <li><i class="fal fa-check"></i>In stock</li>
                                            <li><i class="fal fa-check"></i>Free delivery available</li>
                                            <li><i class="fal fa-check"></i>Sales 30% Off Us Code: MOTIVE30</li>
                                        </ul>
                                        <p class="description">In ornare lorem ut est dapibus, ut tincidunt nisi
                                            pretium. Integer ante est, elementum eget magna. Pellentesque sagittis
                                            dictum libero, eu dignissim tellus.</p>

                                        <div class="product-variations-wrapper">

                                            <!-- Start Product Variation  -->
                                            <div class="product-variation">
                                                <h6 class="title">Colors:</h6>
                                                <div class="color-variant-wrapper">
                                                    <ul class="color-variant mt--0">
                                                        <li class="color-extra-01 active"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-02"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-03"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- End Product Variation  -->

                                            <!-- Start Product Variation  -->
                                            <div class="product-variation">
                                                <h6 class="title">Size:</h6>
                                                <ul class="range-variant">
                                                    <li>xs</li>
                                                    <li>s</li>
                                                    <li>m</li>
                                                    <li>l</li>
                                                    <li>xl</li>
                                                </ul>
                                            </div>
                                            <!-- End Product Variation  -->

                                        </div>

                                        <!-- Start Product Action Wrapper  -->
                                        <div class="product-action-wrapper d-flex-center">
                                            <!-- Start Quentity Action  -->

                                            <!-- End Quentity Action  -->

                                            <!-- Start Product Action  -->
                                            <ul class="product-action d-flex-center mb--0">
                                                <li class="add-to-cart"><a href="cart.html"
                                                        class="axil-btn btn-bg-primary">Add to Cart</a></li>

                                            </ul>
                                            <!-- End Product Action  -->

                                        </div>
                                        <!-- End Product Action Wrapper  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <span class="filter-results">Result (<span
                            style="color: #3577F0; font-size:19px;">{{ $products->count() }}</span>)
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
                                <h3 class="item-title"><a
                                        href="{{ route('front.productItem', $cart->product_id) }}">{{ $cart->product->productName }}</a>
                                </h3>
                                <div class="item-price"><span
                                        class="currency-symbol">$</span>{{ !$cart->product->flag ? $cart->product->price : $cart->product->discount }}
                                </div>
                                <div class="pro-qty item-quantity">
                                    <span class="dec qtybtn"
                                        onclick="changeQuantity({{ $cart->product_id }}, 'dec', this)">-</span>
                                    <input type="number" class="quantity-input"
                                        id="quantity_{{ $cart->product_id }}" value="{{ $cart->quantity }}"
                                        disabled>
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
    <script src="{{ asset('fas/assets/js/vendor/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('fas/assets/js/vendor/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('fas/assets/js/vendor/sal.js') }}"></script>
    <script src="{{ asset('fas/assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('fas/assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('fas/assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('fas/assets/js/vendor/counterup.js') }}"></script>
    <script src="{{ asset('fas/assets/js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/axios.js') }}"></script>
    <script src="{{ asset('js/toastr/toastr.min.js') }}"></script>


    <!-- Main JS -->
    <script src="{{ asset('fas/assets/js/rtl-main.js') }}"></script>

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

        // Add Product to Cart
        function addProductToCart() {
            let url = '{{ route('cart.add', $products->id) }}';
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

        // Remove Product From Slide Cart
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
    </script>
</body>

</html>
