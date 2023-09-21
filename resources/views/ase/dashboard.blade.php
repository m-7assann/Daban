<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard | @yield('title')</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('fas/assets/images/favicon.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('ase/assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('ase/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('ase/assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('ase/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('ase/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('ase/assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/toastr/toastr.min.css') }}">

    @yield('style')

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('ase/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('ase/assets/js/config.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="{{ route('home') }}" class="app-brand-link">
                        <img src="{{asset('ase/assets/img/avatars/logo-large.png')}}" style="opacity: 0.6; filter: grayscale(1);" alt
                            class="w-px-40 h-auto rounded-circle" />
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">Dashboard</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item active">
                        <a href="{{ route('home') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    {{-- Users --}}
                    @if (auth()->user()->role == 'admin' )

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Users</span>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class='menu-icon tf-icons bx bxs-user-account'></i>
                            <div data-i18n="Account Settings">Users</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('users.create') }}" class="menu-link">
                                    <div data-i18n="Account">Create</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('users.index') }}" class="menu-link">
                                    <div data-i18n="Notifications">Index</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('users.restoreUsers') }}" class="menu-link">
                                    <div data-i18n="Connections">Deleted</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif


                    {{-- Categorys --}}
                    @if (auth()->user()->role == 'admin' )

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Category</span>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class='menu-icon tf-icons bx bx-category-alt'></i>
                            <div data-i18n="Account Settings">Category</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('category.create') }}" class="menu-link">
                                    <div data-i18n="Account">Create</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('category.index') }}" class="menu-link">
                                    <div data-i18n="Notifications">Index</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('category.restoreCategory') }}" class="menu-link">
                                    <div data-i18n="Connections">Deleted</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    @endif


                    <!-- Products -->
                    @if (auth()->user()->role == 'admin' )

                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Product</span></li>
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class='menu-icon tf-icons bx bx-closet'></i>
                            <div data-i18n="User interface">Products</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('products.create') }}" class="menu-link">
                                    <div data-i18n="Accordion">Create</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('products.index') }}" class="menu-link">
                                    <div data-i18n="Alerts">Index</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('products.restoreProducts') }}" class="menu-link">
                                    <div data-i18n="Badges">Deleted</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    {{-- puschases --}}

                    <li class="menu-header small text-uppercase"><span class="menu-header-text"> All Customer
                            Needs</span></li>

                    <li class="menu-item">
                        <a href="{{route('purchase.index')}}" class="menu-link">
                            <i class='menu-icon tf-icons bx bx-shopping-bag'></i>
                            <div data-i18n="Tables">Purchase</div>
                        </a>
                    </li>




                    <!-- UserInterFace -->

                    <li class="menu-item">
                        <a href="{{route('front.index')}}" class="menu-link">
                            <i class='menu-icon tf-icons bx bx-face'></i>
                            <div data-i18n="UserInterface">User Interface</div>
                        </a>
                    </li>

                    {{-- Logout --}}


                    <li class="menu-item">
                        <a href="{{route('logout')}}" class="menu-link">
                            <i class='menu-icon tf-icons bx bx-log-out-circle'></i>
                            <div data-i18n="Logout">Logout</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->






            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            @if (auth()->user()->role == 'admin')

                            <li class="nav-item lh-1 me-3">
                                <span>Users</span></a>
                                <a class="social-count" style="color: #2B90FA" target="_blank"> (
                                    {{\App\Models\User::where('role','user')->count() }} )
                            </li>

                            <li class="nav-item lh-1 me-3">
                                <span style="color: #798088">Admins</span></a>
                                <a class="social-count" style="color: #2B90FA" target="_blank"> ( {{
                                    \App\Models\User::where('role' ,'admin')->count() }} )
                            </li>
                            @endif


                            {{-- <li class="nav-item lh-1 me-3">
                                <a class="github-button"
                                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                                    data-icon="octicon-star" data-size="large" data-show-count="true"
                                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
                            </li> --}}


                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ auth()->user()->image_url }}" alt
                                            class="w-px-40 h-px-40 rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ auth()->user()->image_url }}" alt
                                                            class="w-px-40 h-px-40 rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span
                                                        class="fw-semibold d-block">{{auth()->user()->UsersName}}</span>
                                                    <small class="text-muted">{{auth()->user()->role}}</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('users.account')}}">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('user.resetPass')}}">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                                <span class="flex-grow-1 align-middle">Billing</span>
                                                <span
                                                    class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('logout')}}">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                @yield('content')

                {{-- Company Revenue --}}


                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('ase/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('ase/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('ase/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('ase/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('ase/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('ase/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('ase/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('ase/assets/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>


    <script src="{{ asset('js/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('js/axios.js') }}"></script>
    <script src="{{ asset('js/Crud.js') }}"></script>
    <script src="{{ asset('js/sweet.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    @yield('script')
</body>

</html>
