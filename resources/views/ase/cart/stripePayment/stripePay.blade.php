<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Daban| StripePayment</title>
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
    </style>

</head>


<body class="sticky-header">
    <header class="header axil-header header-style-5">
        <div class="axil-header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="header-top-dropdown">
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    English
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">Arabic</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    USD
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">USD</a></li>
                                    <li><a class="dropdown-item" href="#">EUR</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @if (auth()->guest())
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="header-top-link">
                                <ul class="quick-link">
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
                            <li class="wishlist">
                                <a href="#">
                                    <i class="flaticon-heart"></i>
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
                                    <p>Shop NOW GET 10% OFF : <a href="#">GET OFFER</a></p>
                                </div>
                            </div>
                            <div class="slick-slide">
                                <div class="campaign-content">
                                    <p>Shop NOW GET 10% OFF : <a href="#">GET OFFER</a></p>
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

        <!-- Start Checkout Area  -->
        <div class="axil-checkout-area axil-section-gap">
            <div class="container">
                <div id="payment-message" style="display: none;" class="alert alert-info"></div>
                
                <form action="" method="POST" id="payment-form">
                    <div id="payment-element"></div>
                    <button type="submit" id="submit" class="axil-btn btn-bg-primary checkout-btn">
                        <span id="button-text">Pay Now</span>
                        <span id="spinner" style="display:none;">Processing...</span>
                    </button>
                </form>
            </div>
        </div>
        <!-- End Checkout Area  -->

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
                                <a href="index.html">
                                    <img class="light-logo" src="{{ asset('fas/assets/images/logo/Daban.jpg') }}"
                                        alt="Logo Images" width="120" height="80">
                                </a>
                            </div>
                            <div class="inner">
                                <p><i class="far fa-map-marker-alt"></i> &nbsp; {{ $support->address }}</p>

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

    <!-- Header Search Modal End -->
    
    <!-- Header Search Modal End -->

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        // This is your test publishable API key.
        const stripe = Stripe("{{ config('services.stripe.publishable_key') }}");

        let elements;

        initialize();
        checkStatus();

        document
            .querySelector("#payment-form")
            .addEventListener("submit", handleSubmit);

        async function initialize() {
            const {
                clientSecret
            } = await fetch("{{ route('stripe.paymentIntent',$checkout->id) }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({
                    "_token": "{{ csrf_token() }}"
                }),
            }).then((r) => r.json());

            elements = stripe.elements({
                clientSecret
            });

            const linkAuthenticationElement = elements.create("linkAuthentication");
            linkAuthenticationElement.mount("#link-authentication-element");

            const paymentElementOptions = {
                layout: "tabs",
            };

            const paymentElement = elements.create("payment", paymentElementOptions);
            paymentElement.mount("#payment-element");
        }

        async function handleSubmit(e) {
            e.preventDefault();
            setLoading(true);

            const {
                error
            } = await stripe.confirmPayment({
                elements,
                confirmParams: {
                    // Make sure to change this to your payment completion page
                    return_url: "{{ route('stripe.return') }}",
                    receipt_email: emailAddress,
                },
            });

            // This point will only be reached if there is an immediate error when
            // confirming the payment. Otherwise, your customer will be redirected to
            // your `return_url`. For some payment methods like iDEAL, your customer will
            // be redirected to an intermediate site first to authorize the payment, then
            // redirected to the `return_url`.
            if (error.type === "card_error" || error.type === "validation_error") {
                showMessage(error.message);
            } else {
                showMessage("An unexpected error occurred.");
            }

            setLoading(false);
        }

        // Fetches the payment intent status after payment submission
        async function checkStatus() {
            const clientSecret = new URLSearchParams(window.location.search).get(
                "payment_intent_client_secret"
            );

            if (!clientSecret) {
                return;
            }

            const {
                paymentIntent
            } = await stripe.retrievePaymentIntent(clientSecret);

            switch (paymentIntent.status) {
                case "succeeded":
                    showMessage("Payment succeeded!");
                    break;
                case "processing":
                    showMessage("Your payment is processing.");
                    break;
                case "requires_payment_method":
                    showMessage("Your payment was not successful, please try again.");
                    break;
                default:
                    showMessage("Something went wrong.");
                    break;
            }
        }

        // ------- UI helpers -------

        function showMessage(messageText) {
            const messageContainer = document.querySelector("#payment-message");

            messageContainer .style.display = "block";
            messageContainer.textContent = messageText;

            setTimeout(function() {
                messageContainer.style.display = "none";
                messageContainer.textContent = "";
            }, 4000);
        }

        // Show a spinner on payment submission
        function setLoading(isLoading) {
            if (isLoading) {
                // Disable the button and show a spinner
                document.querySelector("#submit").disabled = true;
                document.querySelector("#spinner").style.display = "inline";
                document.querySelector("#button-text").style.display = "none";
            } else {
                document.querySelector("#submit").disabled = false;
                document.querySelector("#spinner").style.display = "none";
                document.querySelector("#button-text").style.display = "inline";
            }
        }
    </script>


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

    <!-- Main JS -->
    <script src="{{ asset('fas/assets/js/rtl-main.js') }}"></script>

    <script src="{{ asset('js/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('js/axios.js') }}"></script>
    <script src="{{ asset('js/Crud.js') }}"></script>
    <script src="{{ asset('js/sweet.js') }}"></script>
</body>

</html>
