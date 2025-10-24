<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('meta_tags')
    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/site/{{ isset(settings()->site_favicon) ? settings()->site_favicon : '' }}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap"
        rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" type="text/css" href="/backend/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" href="/frontend/assets/vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/frontend/assets/css/font-electro.css">

    <link rel="stylesheet" href="/frontend/assets/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="/frontend/assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="/frontend/assets/vendor/ion-rangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="/frontend/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="/frontend/assets/vendor/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="/frontend/assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="/frontend/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">

    <!-- CSS Electro Template -->
    <link rel="stylesheet" href="/frontend/assets/css/theme.css">

    <script src="/extra-assets/toastr/jquery-3.7.1.min.js"></script>
    <script src="/extra-assets/toastr/toastr.min.js"></script>
    <link rel="stylesheet" href="/extra-assets/toastr/toastr.css" />
    @stack('stylesheets')
</head>

<body>

    <!-- ========== HEADER ========== -->
    <header id="header" class="u-header u-header-left-aligned-nav">
        <div class="u-header__section">
            <!-- Top bar -->
            <div class="u-header-topbar py-2 d-none d-xl-block">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <div class="topbar-left">
                            <a href="/" class="text-gray-110 font-size-13 u-header-topbar__nav-link">Welcome to
                                Worldwide Electronics Store</a>
                        </div>
                        <div class="topbar-right ml-auto">
                            <ul class="list-inline mb-0">
                                <li
                                    class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                    <a href="{{ route('contact') }}" class="u-header-topbar__nav-link"><i
                                            class="ec ec-map-pointer mr-1"></i> Store Locator</a>
                                </li>
                                <li
                                    class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                    <a href="#" class="u-header-topbar__nav-link">
                                        <i class="ec ec-transport mr-1"></i> Track Your Order</a>
                                </li>
                                <li
                                    class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border u-header-topbar__nav-item-no-border u-header-topbar__nav-item-border-single">
                                    <div class="d-flex align-items-center">
                                        <!-- Language -->
                                        <div class="position-relative">
                                            <a id="languageDropdownInvoker"
                                                class="dropdown-nav-link dropdown-toggle d-flex align-items-center u-header-topbar__nav-link font-weight-normal"
                                                href="javascript:;" role="button" aria-controls="languageDropdown"
                                                aria-haspopup="true" aria-expanded="false" data-unfold-event="hover"
                                                data-unfold-target="#languageDropdown" data-unfold-type="css-animation"
                                                data-unfold-duration="300" data-unfold-delay="300"
                                                data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp"
                                                data-unfold-animation-out="fadeOut">
                                                <span class="d-inline-block d-sm-none">US</span>
                                                <span class="d-none d-sm-inline-flex align-items-center"><i
                                                        class="ec ec-dollar mr-1"></i> Dollar (US)</span>
                                            </a>

                                            <div id="languageDropdown" class="dropdown-menu dropdown-unfold"
                                                aria-labelledby="languageDropdownInvoker">
                                                <a class="dropdown-item active" href="#">English</a>
                                                <a class="dropdown-item" href="#">Deutsch</a>
                                                <a class="dropdown-item" href="#">Español‎</a>
                                            </div>
                                        </div>
                                        <!-- End Language -->
                                    </div>
                                </li>
                                <li
                                    class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border u-header-topbar__nav-item-no-border u-header-topbar__nav-item-border-single">
                                    <div class="d-flex align-items-center">
                                        <!-- user -->
                                        @if (Auth::check())
                                            <div class="position-relative">
                                                <a id="userAccountDropdown"
                                                    class="dropdown-nav-link dropdown-toggle d-flex align-items-center u-header-topbar__nav-link font-weight-normal"
                                                    href="{{ route('admin.profile') }}" role="button"
                                                    aria-controls="userDropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-unfold-event="hover"
                                                    data-unfold-target="#userDropdown" data-unfold-type="css-animation"
                                                    data-unfold-duration="300" data-unfold-delay="300"
                                                    data-unfold-hide-on-scroll="true"
                                                    data-unfold-animation-in="slideInUp"
                                                    data-unfold-animation-out="fadeOut">
                                                    <img src="{{ Auth::user()->picture }}"
                                                        alt="{{ Auth::user()->name }}" class="rounded-circle"
                                                        style="width: 18px; height: 18px; object-fit: cover;">
                                                </a>
                                                <div id="userDropdown" class="dropdown-menu dropdown-unfold"
                                                    aria-labelledby="userAccountDropdown">
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.dashboard') }}">Dashboard</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.profile') }}">Profile</a>
                                                    @if (auth()->user()->type == 'superAdmin')
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.settings') }}">Settings</a>
                                                    @endif
                                                    <form id="frontend-logout-form"
                                                        action="{{ route('admin.logout', ['source' => 'frontend']) }}"
                                                        method="POST" style="display: none;">@csrf
                                                    </form>
                                                    <a class="dropdown-item" href="javascript:;"
                                                        onclick="event.preventDefault();document.getElementById('frontend-logout-form').submit();">Logout</a>
                                                </div>
                                            </div>
                                        @else
                                            <a href="{{ route('admin.login') }}" role="button"
                                                class="u-header-topbar__nav-link">
                                                <i class="ec ec-user mr-1"></i> Register <span
                                                    class="text-gray-50">or</span>
                                                Sign in
                                            </a>
                                        @endif
                                    </div>
                                </li>
                                {{-- <li
                                    class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                    <!-- Account Sidebar Toggle Button -->
                                    <a id="sidebarNavToggler" href="javascript:;" role="button"
                                        class="u-header-topbar__nav-link" aria-controls="sidebarContent"
                                        aria-haspopup="true" aria-expanded="false" data-unfold-event="click"
                                        data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent"
                                        data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight"
                                        data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                                        <i class="ec ec-user mr-1"></i> Register <span class="text-gray-50">or</span>
                                        Sign in
                                    </a>
                                    <!-- End Account Sidebar Toggle Button -->
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Topbar -->

            <!-- Logo and Menu -->
            <div class="py-2 py-xl-4 bg-primary-down-lg">
                <div class="container my-0dot5 my-xl-0">
                    <div class="row align-items-center">
                        <!-- Logo-offcanvas-menu -->
                        <div class="col-auto">
                            <!-- Nav -->
                            <nav
                                class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
                                <!-- Logo -->
                                <a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center"
                                    href="/"
                                    aria-label="{{ isset(settings()->site_title) ? settings()->site_title : '' }}">
                                    <img src="/images/site/{{ isset(settings()->site_logo) ? settings()->site_logo : '' }}"
                                        alt="{{ isset(settings()->site_title) ? settings()->site_title : '' }}"
                                        version="1.1" x="0px" y="0px" width="175.748px" height="42.52px"
                                        viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52"
                                        style="margin-bottom: 0;" />
                                </a>
                                <!-- End Logo -->

                                <!-- Fullscreen Toggle Button -->
                                <button id="sidebarHeaderInvokerMenu" type="button"
                                    class="navbar-toggler d-block btn u-hamburger mr-3 mr-xl-0"
                                    aria-controls="sidebarHeader" aria-haspopup="true" aria-expanded="false"
                                    data-unfold-event="click" data-unfold-hide-on-scroll="false"
                                    data-unfold-target="#sidebarHeader1" data-unfold-type="css-animation"
                                    data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft"
                                    data-unfold-duration="500">
                                    <span id="hamburgerTriggerMenu" class="u-hamburger__box">
                                        <span class="u-hamburger__inner"></span>
                                    </span>
                                </button>
                                <!-- End Fullscreen Toggle Button -->
                            </nav>
                            <!-- End Nav -->

                            <!-- ========== HEADER SIDEBAR ========== -->
                            <aside id="sidebarHeader1" class="u-sidebar u-sidebar--left"
                                aria-labelledby="sidebarHeaderInvokerMenu">
                                <div class="u-sidebar__scroller">
                                    <div class="u-sidebar__container">
                                        <div class="u-header-sidebar__footer-offset pb-0">
                                            <!-- Toggle Button -->
                                            <div class="position-absolute top-0 right-0 z-index-2 pt-4 pr-7">
                                                <button type="button" class="close ml-auto"
                                                    aria-controls="sidebarHeader" aria-haspopup="true"
                                                    aria-expanded="false" data-unfold-event="click"
                                                    data-unfold-hide-on-scroll="false"
                                                    data-unfold-target="#sidebarHeader1"
                                                    data-unfold-type="css-animation"
                                                    data-unfold-animation-in="fadeInLeft"
                                                    data-unfold-animation-out="fadeOutLeft"
                                                    data-unfold-duration="500">
                                                    <span aria-hidden="true"><i
                                                            class="ec ec-close-remove text-gray-90 font-size-20"></i></span>
                                                </button>
                                            </div>
                                            <!-- End Toggle Button -->

                                            <!-- Content -->
                                            <div class="js-scrollbar u-sidebar__body">
                                                <div id="headerSidebarContent"
                                                    class="u-sidebar__content u-header-sidebar__content">
                                                    <!-- Logo -->
                                                    <a class="d-flex ml-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-vertical"
                                                        href="index.html" aria-label="Electro">
                                                        <img src="/images/site/{{ isset(settings()->site_logo) ? settings()->site_logo : '' }}"
                                                            alt="{{ isset(settings()->site_title) ? settings()->site_title : '' }}"
                                                            version="1.1" x="0px" y="0px" width="175.748px"
                                                            height="42.52px" viewBox="0 0 175.748 42.52"
                                                            enable-background="new 0 0 175.748 42.52"
                                                            style="margin-bottom: 0;" />
                                                    </a>
                                                    <!-- End Logo -->

                                                    <!-- List -->
                                                    <ul id="headerSidebarList" class="u-header-collapse__nav">
                                                        <!-- Home Section -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer"
                                                                href="javascript:;" role="button"
                                                                data-toggle="collapse" aria-expanded="false"
                                                                aria-controls="headerSidebarHomeCollapse"
                                                                data-target="#headerSidebarHomeCollapse">
                                                                Home & Static Pages
                                                            </a>

                                                            <div id="headerSidebarHomeCollapse" class="collapse"
                                                                data-parent="#headerSidebarContent">
                                                                <ul id="headerSidebarHomeMenu"
                                                                    class="u-header-collapse__nav-list">
                                                                    <li>
                                                                        <a class="u-header-collapse__submenu-nav-link"
                                                                            href="/">Home</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="u-header-collapse__submenu-nav-link"
                                                                            href="#">About</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="u-header-collapse__submenu-nav-link"
                                                                            href="{{ route('contact') }}">Contact</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="u-header-collapse__submenu-nav-link"
                                                                            href="#">FAQ</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="u-header-collapse__submenu-nav-link"
                                                                            href="#">Store Directory</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="u-header-collapse__submenu-nav-link"
                                                                            href="#">Terms and
                                                                            Conditions</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="u-header-collapse__submenu-nav-link"
                                                                            href="#">404</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <!-- End Home Section -->

                                                        <!-- Shop Pages -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer"
                                                                href="#"
                                                                data-target="#headerSidebarPagesCollapse"
                                                                role="button" data-toggle="collapse"
                                                                aria-expanded="false"
                                                                aria-controls="headerSidebarPagesCollapse">
                                                                Shop Pages
                                                            </a>
                                                        </li>
                                                        <!-- End Shop Pages -->

                                                        <!-- Product Categories -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer"
                                                                href="#"
                                                                data-target="#headerSidebarBlogCollapse"
                                                                role="button" data-toggle="collapse"
                                                                aria-expanded="false"
                                                                aria-controls="headerSidebarBlogCollapse">
                                                                Product Categories
                                                            </a>
                                                        </li>
                                                        <!-- End Product Categories -->

                                                        <!-- Single Product Pages -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer"
                                                                href="#"
                                                                data-target="#headerSidebarShopCollapse"
                                                                role="button" data-toggle="collapse"
                                                                aria-expanded="false"
                                                                aria-controls="headerSidebarShopCollapse">
                                                                Single Product Pages
                                                            </a>
                                                        </li>
                                                        <!-- End Single Product Pages -->

                                                        <!-- Ecommerce Pages -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer"
                                                                href="javascript:;"
                                                                data-target="#headerSidebarDemosCollapse"
                                                                role="button" data-toggle="collapse"
                                                                aria-expanded="false"
                                                                aria-controls="headerSidebarDemosCollapse">
                                                                Ecommerce Pages
                                                            </a>

                                                            <div id="headerSidebarDemosCollapse" class="collapse"
                                                                data-parent="#headerSidebarContent">
                                                                <ul id="headerSidebarDemosMenu"
                                                                    class="u-header-collapse__nav-list">
                                                                    <li><a class="u-header-collapse__submenu-nav-link"
                                                                            href="#">Shop</a></li>
                                                                    <li><a class="u-header-collapse__submenu-nav-link"
                                                                            href="#">Cart</a></li>
                                                                    <li><a class="u-header-collapse__submenu-nav-link"
                                                                            href="#">Checkout</a>
                                                                    </li>
                                                                    <li><a class="u-header-collapse__submenu-nav-link"
                                                                            href="#">My
                                                                            Account</a></li>
                                                                    <li><a class="u-header-collapse__submenu-nav-link"
                                                                            href="#">Track
                                                                            your Order</a></li>
                                                                    <li><a class="u-header-collapse__submenu-nav-link"
                                                                            href="#">Compare</a>
                                                                    </li>
                                                                    <li><a class="u-header-collapse__submenu-nav-link"
                                                                            href="#">wishlist</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <!-- End Ecommerce Pages -->

                                                        <!-- Shop Columns -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer"
                                                                href="javascript:;"
                                                                data-target="#headerSidebardocsCollapse"
                                                                role="button" data-toggle="collapse"
                                                                aria-expanded="false"
                                                                aria-controls="headerSidebardocsCollapse">
                                                                Shop Columns
                                                            </a>
                                                        </li>
                                                        <!-- End Shop Columns -->

                                                        <!-- Blog Pages -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer"
                                                                href="{{ route('posts') }}"
                                                                data-target="#headerSidebarblogsCollapse"
                                                                role="button" data-toggle="collapse"
                                                                aria-expanded="false"
                                                                aria-controls="headerSidebarblogsCollapse">
                                                                Blog Pages
                                                            </a>
                                                        </li>
                                                        <!-- End Blog Pages -->
                                                    </ul>
                                                    <!-- End List -->
                                                </div>
                                            </div>
                                            <!-- End Content -->
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <!-- ========== END HEADER SIDEBAR ========== -->
                        </div>
                        <!-- End Logo-off canvas-menu -->
                        <!-- Primary Menu -->
                        <div class="col d-none d-xl-block">
                            <!-- Nav -->
                            <nav
                                class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
                                <!-- Navigation -->
                                <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                    <ul class="navbar-nav u-header__navbar-nav">
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link" href="/">Home</a>
                                        </li>
                                        <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                            data-animation-in="slideInUp" data-animation-out="fadeOut">
                                            <a id="blogMegaMenu"
                                                class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                href="#" aria-haspopup="true" aria-expanded="false"
                                                aria-labelledby="blogSubMenu">Shop</a>
                                        </li>
                                        <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover"
                                            data-animation-in="slideInUp" data-animation-out="fadeOut">
                                            <a id="pagesMegaMenu"
                                                class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                href="{{ route('posts') }}" aria-haspopup="true"
                                                aria-expanded="false">Blog</a>
                                            <!-- Home - Mega Menu -->
                                            <div class="hs-mega-menu w-100 u-header__sub-menu"
                                                aria-labelledby="pagesMegaMenu">
                                                <div class="row u-header__mega-menu-wrapper">
                                                    {!! navigations() !!}
                                                </div>
                                            </div>
                                            <!-- End Home - Mega Menu -->
                                        </li>
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link" href="#">About us</a>
                                        </li>
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link" href="#">FAQs</a>
                                        </li>
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link"
                                                href="{{ route('contact') }}">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Navigation -->
                            </nav>
                            <!-- End Nav -->
                        </div>
                        <!-- End Primary Menu -->
                        <!-- Customer Care -->
                        <div class="d-none d-xl-block col-md-auto">
                            <div class="d-flex">
                                <i class="ec ec-support font-size-50 text-primary"></i>
                                <div class="ml-2">
                                    <div class="phone">
                                        <strong>Support</strong> <a
                                            href="tel:{{ isset(settings()->site_phone) ? settings()->site_phone : '' }}"
                                            class="text-gray-90">{{ isset(settings()->site_phone) ? settings()->site_phone : '' }}</a>
                                    </div>
                                    <div class="email">
                                        E-mail: <a
                                            href="mailto:{{ isset(settings()->site_email) ? settings()->site_email : '' }}?subject=Help Need"
                                            class="text-gray-90">{{ isset(settings()->site_email) ? settings()->site_email : '' }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Customer Care -->
                        <!-- Header Icons for mobile -->
                        <div class="d-xl-none col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
                            <div class="d-inline-flex">
                                <ul class="d-flex list-unstyled mb-0 align-items-center">
                                    <!-- Search -->
                                    <li class="col d-xl-none px-2 px-sm-3 position-static">
                                        <a id="searchClassicInvoker"
                                            class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary"
                                            href="javascript:;" role="button" data-toggle="tooltip"
                                            data-placement="top" title="Search" aria-controls="searchClassic"
                                            aria-haspopup="true" aria-expanded="false"
                                            data-unfold-target="#searchClassic" data-unfold-type="css-animation"
                                            data-unfold-duration="300" data-unfold-delay="300"
                                            data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp"
                                            data-unfold-animation-out="fadeOut">
                                            <span class="ec ec-search"></span>
                                        </a>

                                        <!-- Input -->
                                        <div id="searchClassic"
                                            class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2"
                                            aria-labelledby="searchClassicInvoker">
                                            <form class="js-focus-state input-group px-3">
                                                <input class="form-control" type="search"
                                                    placeholder="Search Product">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary px-3" type="button"><i
                                                            class="font-size-18 ec ec-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- End Input -->
                                    </li>
                                    <!-- End Search -->
                                    <li class="col d-none d-xl-block"><a href="#" class="text-gray-90"
                                            data-toggle="tooltip" data-placement="top" title="Compare"><i
                                                class="font-size-22 ec ec-compare"></i></a></li>
                                    <li class="col d-none d-xl-block"><a href="#" class="text-gray-90"
                                            data-toggle="tooltip" data-placement="top" title="Favorites"><i
                                                class="font-size-22 ec ec-favorites"></i></a></li>
                                    <li class="col d-xl-none px-2 px-sm-3"><a href="#" class="text-gray-90"
                                            data-toggle="tooltip" data-placement="top" title="My Account"><i
                                                class="font-size-22 ec ec-user"></i></a></li>
                                    <li class="col pr-xl-0 px-2 px-sm-3">
                                        <a href="#" class="text-gray-90 position-relative d-flex "
                                            data-toggle="tooltip" data-placement="top" title="Cart">
                                            <i class="font-size-22 ec ec-shopping-bag"></i>
                                            <span
                                                class="width-22 height-22 bg-dark position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12 text-white">2</span>
                                            <span
                                                class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3">$1785.00</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Header Icons for mobile -->
                    </div>
                </div>
            </div>
            <!-- End Logo and Menu -->

            <!-- Vertical-and-Search-Bar -->
            <div class="d-none d-xl-block bg-primary">
                <div class="container">
                    <div class="row align-items-stretch min-height-50">
                        <!-- Vertical Menu -->
                        <div class="col-md-auto d-none d-xl-flex align-items-end">
                            <div class="max-width-270 min-width-270">
                                <!-- Basics Accordion -->
                                <div id="basicsAccordion">
                                    <!-- Card -->
                                    <div class="card border-0 rounded-0">
                                        <div class="card-header bg-primary rounded-0 card-collapse border-0"
                                            id="basicsHeadingOne">
                                            <button type="button"
                                                class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-gray-90 collapsed"
                                                data-toggle="collapse" data-target="#basicsCollapseOne"
                                                aria-expanded="false" aria-controls="basicsCollapseOne">
                                                <span class="pl-1 text-gray-90">Shop By Department</span>
                                                <span class="text-gray-90 ml-3">
                                                    <span class="ec ec-arrow-down-search"></span>
                                                </span>
                                            </button>
                                        </div>
                                        <div id="basicsCollapseOne" class="collapse vertical-menu v1"
                                            aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion">
                                            <div class="card-body p-0">
                                                <nav
                                                    class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
                                                    <div id="navBar"
                                                        class="collapse navbar-collapse u-header__navbar-collapse">
                                                        <ul
                                                            class="navbar-nav u-header__navbar-nav border-primary border-top-0">
                                                            <li class="nav-item u-header__nav-item" data-event="hover"
                                                                data-position="left">
                                                                <a href="#"
                                                                    class="nav-link u-header__nav-link font-weight-bold">Value
                                                                    of the Day</a>
                                                            </li>
                                                            <li class="nav-item u-header__nav-item" data-event="hover"
                                                                data-position="left">
                                                                <a href="#"
                                                                    class="nav-link u-header__nav-link font-weight-bold">Top
                                                                    100 Offers</a>
                                                            </li>
                                                            <li class="nav-item u-header__nav-item" data-event="hover"
                                                                data-position="left">
                                                                <a href="#"
                                                                    class="nav-link u-header__nav-link font-weight-bold">New
                                                                    Arrivals</a>
                                                            </li>
                                                            <!-- Nav Item MegaMenu -->
                                                            <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                                data-event="hover" data-animation-in="slideInUp"
                                                                data-animation-out="fadeOut" data-position="left">
                                                                <a id="basicMegaMenu"
                                                                    class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                                    href="javascript:;" aria-haspopup="true"
                                                                    aria-expanded="false">Office Supplies &
                                                                    Accessories</a>

                                                                <!-- Nav Item - Mega Menu -->
                                                                <div class="hs-mega-menu vmm-tfw u-header__sub-menu"
                                                                    aria-labelledby="basicMegaMenu">
                                                                    <div class="vmm-bg">
                                                                        <img class="img-fluid"
                                                                            src="/frontend/assets/img/500X400/img1.png"
                                                                            alt="Image Description">
                                                                    </div>
                                                                    <div class="row u-header__mega-menu-wrapper">
                                                                        <div class="col mb-3 mb-sm-0">
                                                                            <span
                                                                                class="u-header__sub-menu-title">Computers
                                                                                & Accessories</span>
                                                                            <ul
                                                                                class="u-header__sub-menu-nav-group mb-3">
                                                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                        href="#">All Computers &
                                                                                        Accessories</a></li>
                                                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                        href="#">Laptops,
                                                                                        Desktops & Monitors</a></li>
                                                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                        href="#">Printers &
                                                                                        Ink</a></li>
                                                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                        href="#">Networking &
                                                                                        Internet Devices</a></li>
                                                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                        href="#">Computer
                                                                                        Accessories</a></li>
                                                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                        href="#">Software</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start"
                                                                                        href="#">
                                                                                        <div class="">All
                                                                                            Electronics</div>
                                                                                        <div
                                                                                            class="u-nav-subtext font-size-11 text-gray-30">
                                                                                            Discover more products</div>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                        <div class="col mb-3 mb-sm-0">
                                                                            <span
                                                                                class="u-header__sub-menu-title">Office
                                                                                & Stationery</span>
                                                                            <ul class="u-header__sub-menu-nav-group">
                                                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                        href="#">All Office &
                                                                                        Stationery</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Nav Item - Mega Menu -->
                                                            </li>
                                                            <!-- End Nav Item MegaMenu-->
                                                        </ul>
                                                    </div>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Card -->
                                </div>
                                <!-- End Basics Accordion -->
                            </div>
                        </div>
                        <!-- End Vertical Menu -->
                        <!-- Search bar -->
                        <div class="col align-self-center">
                            <!-- Search-Form -->
                            <form action="{{ route('search_posts') }}" method="GET" class="js-focus-state">
                                <label class="sr-only" for="searchProduct">Search</label>
                                <div class="input-group">
                                    <input type="search" name="q"
                                        value="{{ request('q') ? request('q') : '' }}"
                                        class="form-control py-2 pl-5 font-size-15 border-0 height-40 rounded-left-pill"
                                        name="email" id="searchProduct" placeholder="Search for Products"
                                        aria-label="Search for Products" aria-describedby="searchProduct1" required>
                                    <div class="input-group-append">
                                        <!-- Select -->
                                        <select
                                            class="js-select selectpicker dropdown-select custom-search-categories-select"
                                            data-style="btn height-40 text-gray-60 font-weight-normal border-0 rounded-0 bg-white px-5 py-2">
                                            <option value="one" selected>All Categories</option>
                                            <option value="two">Two</option>
                                            <option value="three">Three</option>
                                            <option value="four">Four</option>
                                        </select>
                                        <!-- End Select -->
                                        <button class="btn btn-dark height-40 py-2 px-3 rounded-right-pill"
                                            type="button" id="searchProduct1">
                                            <span class="ec ec-search font-size-24"></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Search-Form -->
                        </div>
                        <!-- End Search bar -->
                        <!-- Header Icons -->
                        <div class="col-md-auto align-self-center">
                            <div class="d-flex">
                                <ul class="d-flex list-unstyled mb-0">
                                    <li class="col"><a href="../shop/compare.html" class="text-gray-90"
                                            data-toggle="tooltip" data-placement="top" title="Compare"><i
                                                class="font-size-22 ec ec-compare"></i></a></li>
                                    <li class="col"><a href="../shop/wishlist.html" class="text-gray-90"
                                            data-toggle="tooltip" data-placement="top" title="Favorites"><i
                                                class="font-size-22 ec ec-favorites"></i></a></li>
                                    <li class="col pr-0">
                                        <a href="../shop/cart.html" class="text-gray-90 position-relative d-flex "
                                            data-toggle="tooltip" data-placement="top" title="Cart">
                                            <i class="font-size-22 ec ec-shopping-bag"></i>
                                            <span
                                                class="width-22 height-22 bg-dark position-absolute flex-content-center text-white rounded-circle left-12 top-8 font-weight-bold font-size-12">2</span>
                                            <span
                                                class="font-weight-bold font-size-16 text-gray-90 ml-3">$1785.00</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Header Icons -->
                    </div>
                </div>
            </div>
            <!-- End Vertical-and-secondary-menu -->
        </div>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    @yield('content')
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER ========== -->
    <footer>
        <div class="container">
            <!-- Brand Carousel -->
            <div class="mb-6">
                <div class="py-2 border-top border-bottom">
                    <div class="js-slick-carousel u-slick my-1" data-slides-show="5" data-slides-scroll="1"
                        data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y"
                        data-arrow-left-classes="fa fa-angle-left u-slick__arrow-classic-inner--left z-index-9"
                        data-arrow-right-classes="fa fa-angle-right u-slick__arrow-classic-inner--right"
                        data-responsive='[{
                                "breakpoint": 992,
                                "settings": {
                                    "slidesToShow": 2
                                }
                            }, {
                                "breakpoint": 768,
                                "settings": {
                                    "slidesToShow": 1
                                }
                            }, {
                                "breakpoint": 554,
                                "settings": {
                                    "slidesToShow": 1
                                }
                            }]'>
                        <div class="js-slide">
                            <a href="#" class="link-hover__brand">
                                <img class="img-fluid m-auto max-height-50" src="/frontend/assets/img/200X60/img1.png"
                                    alt="Image Description">
                            </a>
                        </div>
                        <div class="js-slide">
                            <a href="#" class="link-hover__brand">
                                <img class="img-fluid m-auto max-height-50" src="/frontend/assets/img/200X60/img2.png"
                                    alt="Image Description">
                            </a>
                        </div>
                        <div class="js-slide">
                            <a href="#" class="link-hover__brand">
                                <img class="img-fluid m-auto max-height-50" src="/frontend/assets/img/200X60/img3.png"
                                    alt="Image Description">
                            </a>
                        </div>
                        <div class="js-slide">
                            <a href="#" class="link-hover__brand">
                                <img class="img-fluid m-auto max-height-50" src="/frontend/assets/img/200X60/img4.png"
                                    alt="Image Description">
                            </a>
                        </div>
                        <div class="js-slide">
                            <a href="#" class="link-hover__brand">
                                <img class="img-fluid m-auto max-height-50" src="/frontend/assets/img/200X60/img5.png"
                                    alt="Image Description">
                            </a>
                        </div>
                        <div class="js-slide">
                            <a href="#" class="link-hover__brand">
                                <img class="img-fluid m-auto max-height-50" src="/frontend/assets/img/200X60/img6.png"
                                    alt="Image Description">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Brand Carousel -->
        </div>
        <!-- Footer-newsletter -->
        <div class="bg-primary py-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-md-3 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col-auto flex-horizontal-center">
                                <i class="ec ec-newsletter font-size-40"></i>
                                <h2 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h2>
                            </div>
                            <div class="col my-4 my-md-0">
                                <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>$20 coupon for first
                                        shopping.</strong></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!-- Subscribe Form -->
                        @livewire('newsletter-form')
                        <!-- End Subscribe Form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer-newsletter -->
        <!-- Footer-bottom-widgets -->
        <div class="pt-8 pb-4 bg-gray-13">
            <div class="container mt-1">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="mb-6">
                            <a href="/" class="d-inline-block">
                                <img src="/images/site/{{ isset(settings()->site_logo) ? settings()->site_logo : '' }}"
                                    alt="{{ isset(settings()->site_title) ? settings()->site_title : '' }}"
                                    version="1.1" x="0px" y="0px" width="156px" height="37px"
                                    viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52" />
                            </a>
                        </div>
                        <div class="mb-4">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <i class="ec ec-support text-primary font-size-56"></i>
                                </div>
                                <div class="col pl-3">
                                    <div class="font-size-13 font-weight-light">Got questions? Call us 24/7!</div>
                                    <a href="tel:{{ isset(settings()->site_phone) ? settings()->site_phone : '' }}"
                                        class="font-size-20 text-gray-90">{{ isset(settings()->site_phone) ? settings()->site_phone : '' }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h6 class="mb-1 font-weight-bold">Contact info</h6>
                            <address class="">
                                17 Princess Road, London, Greater London NW1 8JR, UK
                            </address>
                        </div>
                        <div class="my-4 my-md-4">
                            <ul class="list-inline mb-0 opacity-7">
                                <li class="list-inline-item mr-0">
                                    <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle"
                                        href="#">
                                        <span class="fab fa-facebook-f btn-icon__inner"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item mr-0">
                                    <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle"
                                        href="#">
                                        <span class="fab fa-google btn-icon__inner"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item mr-0">
                                    <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle"
                                        href="#">
                                        <span class="fab fa-twitter btn-icon__inner"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item mr-0">
                                    <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle"
                                        href="#">
                                        <span class="fab fa-github btn-icon__inner"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-12 col-md mb-4 mb-md-0">
                                <h6 class="mb-3 font-weight-bold">Find it Fast</h6>
                                <!-- List Group -->
                                <ul
                                    class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">Laptops &
                                            Computers</a></li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">Cameras &
                                            Photography</a></li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">Smart Phones &
                                            Tablets</a></li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">Video Games &
                                            Consoles</a></li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">TV & Audio</a>
                                    </li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">Gadgets</a></li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">Car Electronic &
                                            GPS</a></li>
                                </ul>
                                <!-- End List Group -->
                            </div>

                            <div class="col-12 col-md mb-4 mb-md-0">
                                <!-- List Group -->
                                <ul
                                    class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent mt-md-6">
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">Printers & Ink</a>
                                    </li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">Software</a></li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">Office
                                            Supplies</a></li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">Computer
                                            Components</a></li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">Accesories</a>
                                    </li>
                                </ul>
                                <!-- End List Group -->
                            </div>

                            <div class="col-12 col-md mb-4 mb-md-0">
                                <h6 class="mb-3 font-weight-bold">Customer Care</h6>
                                <!-- List Group -->
                                <ul
                                    class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/my-account.html">My Account</a></li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/track-your-order.html">Order Tracking</a></li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/wishlist.html">Wish List</a></li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="terms-and-conditions.html">Customer Service</a></li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="terms-and-conditions.html">Returns / Exchange</a></li>
                                    <li><a class="list-group-item list-group-item-action" href="faq.html">FAQs</a>
                                    </li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="terms-and-conditions.html">Product Support</a></li>
                                </ul>
                                <!-- End List Group -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer-bottom-widgets -->
        <!-- Footer-copy-right -->
        <div class="bg-gray-14 py-2">
            <div class="container">
                <div class="flex-center-between d-block d-md-flex">
                    <div class="mb-3 mb-md-0">© <a href="#" class="font-weight-bold text-gray-90">Electro</a> -
                        All rights Reserved</div>
                    <div class="text-md-right">
                        <span class="d-inline-block bg-white border rounded p-1">
                            <img class="max-width-5" src="/frontend/assets/img/100X60/img1.jpg"
                                alt="Image Description">
                        </span>
                        <span class="d-inline-block bg-white border rounded p-1">
                            <img class="max-width-5" src="/frontend/assets/img/100X60/img2.jpg"
                                alt="Image Description">
                        </span>
                        <span class="d-inline-block bg-white border rounded p-1">
                            <img class="max-width-5" src="/frontend/assets/img/100X60/img3.jpg"
                                alt="Image Description">
                        </span>
                        <span class="d-inline-block bg-white border rounded p-1">
                            <img class="max-width-5" src="/frontend/assets/img/100X60/img4.jpg"
                                alt="Image Description">
                        </span>
                        <span class="d-inline-block bg-white border rounded p-1">
                            <img class="max-width-5" src="/frontend/assets/img/100X60/img5.jpg"
                                alt="Image Description">
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer-copy-right -->
    </footer>
    <!-- ========== END FOOTER ========== -->

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Account Sidebar Navigation -->
    <aside id="sidebarContent" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler">
        <div class="u-sidebar__scroller">
            <div class="u-sidebar__container">
                <div class="js-scrollbar u-header-sidebar__footer-offset pb-3">
                    <!-- Toggle Button -->
                    <div class="d-flex align-items-center pt-4 px-7">
                        <button type="button" class="close ml-auto" aria-controls="sidebarContent"
                            aria-haspopup="true" aria-expanded="false" data-unfold-event="click"
                            data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent"
                            data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight"
                            data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                            <i class="ec ec-close-remove"></i>
                        </button>
                    </div>
                    <!-- End Toggle Button -->

                    <!-- Content -->
                    <div class="js-scrollbar u-sidebar__body">
                        <div class="u-sidebar__content u-header-sidebar__content">
                            {{-- <form class="js-validate">
                                <!-- Login -->
                                <div id="login" data-target-group="idForm">
                                    <!-- Title -->
                                    <header class="text-center mb-7">
                                        <h2 class="h4 mb-0">Welcome Back!</h2>
                                        <p>Login to manage your account.</p>
                                    </header>
                                    <!-- End Title -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <div class="js-form-message js-focus-state">
                                            <label class="sr-only" for="signinEmail">Email</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signinEmailLabel">
                                                        <span class="fas fa-user"></span>
                                                    </span>
                                                </div>
                                                <input type="email" class="form-control" name="email"
                                                    id="signinEmail" placeholder="Email" aria-label="Email"
                                                    aria-describedby="signinEmailLabel" required
                                                    data-msg="Please enter a valid email address."
                                                    data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <div class="js-form-message js-focus-state">
                                            <label class="sr-only" for="signinPassword">Password</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signinPasswordLabel">
                                                        <span class="fas fa-lock"></span>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" name="password"
                                                    id="signinPassword" placeholder="Password" aria-label="Password"
                                                    aria-describedby="signinPasswordLabel" required
                                                    data-msg="Your password is invalid. Please try again."
                                                    data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <div class="d-flex justify-content-end mb-4">
                                        <a class="js-animation-link small link-muted" href="javascript:;"
                                            data-target="#forgotPassword" data-link-group="idForm"
                                            data-animation-in="slideInUp">Forgot Password?</a>
                                    </div>

                                    <div class="mb-2">
                                        <button type="submit"
                                            class="btn btn-block btn-sm btn-primary transition-3d-hover">Login</button>
                                    </div>

                                    <div class="text-center mb-4">
                                        <span class="small text-muted">Do not have an account?</span>
                                        <a class="js-animation-link small text-dark" href="javascript:;"
                                            data-target="#signup" data-link-group="idForm"
                                            data-animation-in="slideInUp">Signup
                                        </a>
                                    </div>

                                    <div class="text-center">
                                        <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                                    </div>

                                    <!-- Login Buttons -->
                                    <div class="d-flex">
                                        <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1"
                                            href="#">
                                            <span class="fab fa-facebook-square mr-1"></span>
                                            Facebook
                                        </a>
                                        <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0"
                                            href="#">
                                            <span class="fab fa-google mr-1"></span>
                                            Google
                                        </a>
                                    </div>
                                    <!-- End Login Buttons -->
                                </div>

                                <!-- Signup -->
                                <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
                                    <!-- Title -->
                                    <header class="text-center mb-7">
                                        <h2 class="h4 mb-0">Welcome to Electro.</h2>
                                        <p>Fill out the form to get started.</p>
                                    </header>
                                    <!-- End Title -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <div class="js-form-message js-focus-state">
                                            <label class="sr-only" for="signupEmail">Email</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signupEmailLabel">
                                                        <span class="fas fa-user"></span>
                                                    </span>
                                                </div>
                                                <input type="email" class="form-control" name="email"
                                                    id="signupEmail" placeholder="Email" aria-label="Email"
                                                    aria-describedby="signupEmailLabel" required
                                                    data-msg="Please enter a valid email address."
                                                    data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <div class="js-form-message js-focus-state">
                                            <label class="sr-only" for="signupPassword">Password</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signupPasswordLabel">
                                                        <span class="fas fa-lock"></span>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" name="password"
                                                    id="signupPassword" placeholder="Password" aria-label="Password"
                                                    aria-describedby="signupPasswordLabel" required
                                                    data-msg="Your password is invalid. Please try again."
                                                    data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <div class="js-form-message js-focus-state">
                                            <label class="sr-only" for="signupConfirmPassword">Confirm
                                                Password</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signupConfirmPasswordLabel">
                                                        <span class="fas fa-key"></span>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" name="confirmPassword"
                                                    id="signupConfirmPassword" placeholder="Confirm Password"
                                                    aria-label="Confirm Password"
                                                    aria-describedby="signupConfirmPasswordLabel" required
                                                    data-msg="Password does not match the confirm password."
                                                    data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <div class="mb-2">
                                        <button type="submit"
                                            class="btn btn-block btn-sm btn-primary transition-3d-hover">Get
                                            Started</button>
                                    </div>

                                    <div class="text-center mb-4">
                                        <span class="small text-muted">Already have an account?</span>
                                        <a class="js-animation-link small text-dark" href="javascript:;"
                                            data-target="#login" data-link-group="idForm"
                                            data-animation-in="slideInUp">Login
                                        </a>
                                    </div>

                                    <div class="text-center">
                                        <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                                    </div>

                                    <!-- Login Buttons -->
                                    <div class="d-flex">
                                        <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1"
                                            href="#">
                                            <span class="fab fa-facebook-square mr-1"></span>
                                            Facebook
                                        </a>
                                        <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0"
                                            href="#">
                                            <span class="fab fa-google mr-1"></span>
                                            Google
                                        </a>
                                    </div>
                                    <!-- End Login Buttons -->
                                </div>
                                <!-- End Signup -->

                                <!-- Forgot Password -->
                                <div id="forgotPassword" style="display: none; opacity: 0;"
                                    data-target-group="idForm">
                                    <!-- Title -->
                                    <header class="text-center mb-7">
                                        <h2 class="h4 mb-0">Recover Password.</h2>
                                        <p>Enter your email address and an email with instructions will be sent to you.
                                        </p>
                                    </header>
                                    <!-- End Title -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <div class="js-form-message js-focus-state">
                                            <label class="sr-only" for="recoverEmail">Your email</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="recoverEmailLabel">
                                                        <span class="fas fa-user"></span>
                                                    </span>
                                                </div>
                                                <input type="email" class="form-control" name="email"
                                                    id="recoverEmail" placeholder="Your email"
                                                    aria-label="Your email" aria-describedby="recoverEmailLabel"
                                                    required data-msg="Please enter a valid email address."
                                                    data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <div class="mb-2">
                                        <button type="submit"
                                            class="btn btn-block btn-sm btn-primary transition-3d-hover">Recover
                                            Password</button>
                                    </div>

                                    <div class="text-center mb-4">
                                        <span class="small text-muted">Remember your password?</span>
                                        <a class="js-animation-link small" href="javascript:;" data-target="#login"
                                            data-link-group="idForm" data-animation-in="slideInUp">Login
                                        </a>
                                    </div>
                                </div>
                                <!-- End Forgot Password -->
                            </form> --}}
                        </div>
                    </div>
                    <!-- End Content -->
                </div>
            </div>
        </div>
    </aside>
    <!-- End Account Sidebar Navigation -->
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- Go to Top -->
    <a class="js-go-to u-go-to" href="#" data-position='{"bottom": 15, "right": 15 }' data-type="fixed"
        data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp"
        data-hide-effect="slideOutDown">
        <span class="fas fa-arrow-up u-go-to__inner"></span>
    </a>
    <!-- End Go to Top -->

    <!-- JS Global Compulsory -->
    <script src="/frontend/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/frontend/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="/frontend/assets/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="/frontend/assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="/frontend/assets/vendor/appear.js"></script>
    <script src="/frontend/assets/vendor/jquery.countdown.min.js"></script>
    <script src="/frontend/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="/frontend/assets/vendor/svg-injector/dist/svg-injector.min.js"></script>
    <script src="/frontend/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/frontend/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/frontend/assets/vendor/fancybox/jquery.fancybox.min.js"></script>
    <script src="/frontend/assets/vendor/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="/frontend/assets/vendor/typed.js/lib/typed.min.js"></script>
    <script src="/frontend/assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="/frontend/assets/vendor/appear.js"></script>
    <script src="/frontend/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

    <!-- JS Electro -->
    <script src="/frontend/assets/js/hs.core.js"></script>
    <script src="/frontend/assets/js/components/hs.countdown.js"></script>
    <script src="/frontend/assets/js/components/hs.header.js"></script>
    <script src="/frontend/assets/js/components/hs.hamburgers.js"></script>
    <script src="/frontend/assets/js/components/hs.unfold.js"></script>
    <script src="/frontend/assets/js/components/hs.focus-state.js"></script>
    <script src="/frontend/assets/js/components/hs.malihu-scrollbar.js"></script>
    <script src="/frontend/assets/js/components/hs.validation.js"></script>
    <script src="/frontend/assets/js/components/hs.fancybox.js"></script>
    <script src="/frontend/assets/js/components/hs.onscroll-animation.js"></script>
    <script src="/frontend/assets/js/components/hs.slick-carousel.js"></script>
    <script src="/frontend/assets/js/components/hs.quantity-counter.js"></script>
    <script src="/frontend/assets/js/components/hs.range-slider.js"></script>
    <script src="/frontend/assets/js/components/hs.show-animation.js"></script>
    <script src="/frontend/assets/js/components/hs.svg-injector.js"></script>
    <script src="/frontend/assets/js/components/hs.scroll-nav.js"></script>
    <script src="/frontend/assets/js/components/hs.go-to.js"></script>
    <script src="/frontend/assets/js/components/hs.selectpicker.js"></script>

    <script src="/extra-assets/jquery-ui-1.14.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('scripts')
    <!-- JS Plugins Init. -->
    <script>
        document.addEventListener("livewire:initialized", () => {
            Livewire.on("showToasts", (data) => {
                console.log("Toastr event data:", data); // debug

                // Nếu Livewire gửi dạng mảng, lấy phần tử đầu tiên
                if (Array.isArray(data)) {
                    data = data[0];
                }

                const type = data?.type || 'info';
                const message = data?.message || 'No message provided.';

                if (typeof toastr[type] === 'function') {
                    toastr[type](message);
                } else {
                    toastr.info(message);
                }
            });
        });
    </script>
    <script>
        $(window).on('load', function() {
            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                direction: 'horizontal',
                pageContainer: $('.container'),
                breakpoint: 767.98,
                hideTimeOut: 0
            });
        });

        $(document).on('ready', function() {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#header'));

            // initialization of animation
            $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                afterOpen: function() {
                    $(this).find('input[type="search"]').focus();
                }
            });

            // initialization of HSScrollNav component
            $.HSCore.components.HSScrollNav.init($('.js-scroll-nav'), {
                duration: 700
            });

            // initialization of quantity counter
            $.HSCore.components.HSQantityCounter.init('.js-quantity');

            // initialization of popups
            $.HSCore.components.HSFancyBox.init('.js-fancybox');

            // initialization of countdowns
            var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
                yearsElSelector: '.js-cd-years',
                monthsElSelector: '.js-cd-months',
                daysElSelector: '.js-cd-days',
                hoursElSelector: '.js-cd-hours',
                minutesElSelector: '.js-cd-minutes',
                secondsElSelector: '.js-cd-seconds'
            });

            // initialization of malihu scrollbar
            $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

            // initialization of forms
            $.HSCore.components.HSFocusState.init();

            // initialization of form validation
            $.HSCore.components.HSValidation.init('.js-validate', {
                rules: {
                    confirmPassword: {
                        equalTo: '#signupPassword'
                    }
                }
            });

            // initialization of forms
            $.HSCore.components.HSRangeSlider.init('.js-range-slider');

            // initialization of show animations
            $.HSCore.components.HSShowAnimation.init('.js-animation-link');

            // initialization of fancybox
            $.HSCore.components.HSFancyBox.init('.js-fancybox');

            // initialization of slick carousel
            $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');

            // initialization of hamburgers
            $.HSCore.components.HSHamburgers.init('#hamburgerTrigger');

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                beforeClose: function() {
                    $('#hamburgerTrigger').removeClass('is-active');
                },
                afterClose: function() {
                    $('#headerSidebarList .collapse.show').collapse('hide');
                }
            });

            $('#headerSidebarList [data-toggle="collapse"]').on('click', function(e) {
                e.preventDefault();

                var target = $(this).data('target');

                if ($(this).attr('aria-expanded') === "true") {
                    $(target).collapse('hide');
                } else {
                    $(target).collapse('show');
                }
            });

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

            // initialization of select picker
            $.HSCore.components.HSSelectPicker.init('.js-select');
        });
    </script>
</body>

</html>
