<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Innovagigs the agency driven by profitable results">

    <title>{{env('APP_NAME')}} - {{$title ?? " "}}</title>

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/custom-animation.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- Styles -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <wireui:scripts />

</head>

<body>

    <!-- mouse cursor drag start -->
    <div class="mouseCursor cursor-outer d-none"></div>
    <div class="mouseCursor cursor-inner">
        <span class="inner-text-1">let’s talk today<br>
            <span>
                <svg width="28" height="27" viewbox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 25.37L24.8469 2.52313M2 1H26.37V25.37" stroke="currentColor" stroke-width="2"
                        stroke-linecap="square" stroke-linejoin="round"></path>
                </svg>
            </span>
        </span>
        <span class="inner-text-2">
            <span>
                <svg width="63" height="63" viewbox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.132374 56.2074L6.68723 62.776C6.98521 63.0747 8.773 63.0747 9.07084 62.776L47.2086 25.4537C47.8044 24.8564 48.4004 24.5578 49.2942 24.5578C49.5922 24.5578 50.1881 24.5578 50.486 24.8564C51.6778 25.155 52.2736 26.3494 52.2736 27.5437V46.3542V46.6529H61.8082C62.404 46.6529 62.7022 46.6529 63 46.6529V0.970426C63 0.970426 63 0.970427 62.4042 0.373196C61.8083 -0.224035 62.1063 0.0747274 61.5102 0.0747274H16.8176C16.8176 0.373196 16.8176 0.671811 16.8176 1.56766V10.8234C16.8176 11.4205 16.8176 12.0177 16.8176 12.0177H35.8865C37.0783 12.0177 38.2701 12.6148 38.5679 13.8091C39.1638 15.0034 38.8659 16.1978 37.9721 17.0936L0.728355 54.1174C0.430367 54.416 0.132374 54.7146 0.132374 55.3117C-0.16547 55.9088 0.132374 55.9088 0.132374 56.2074Z"
                        fill="currentColor"></path>
                </svg>
            </span>
        </span>
    </div>
    <!-- mouse cursor drag end -->

    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="tp-preloader-content">
                    <div class="tp-preloader-logo">
                        <div class="tp-preloader-circle">
                            <svg width="190" height="190" viewbox="0 0 380 380" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle stroke="#D9D9D9" cx="190" cy="190" r="180" stroke-width="6"
                                    stroke-linecap="round">
                                </circle>
                                <circle stroke="red" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round">
                                </circle>
                            </svg>
                        </div>
                        <img src="assets/img/logo/favicon.png" alt="">
                    </div>
                    <p class="tp-preloader-subtitle">Innovagigs...</p>
                </div>
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- start offcanvas area  -->
    <div class="tp-offcanvas__area">
        <div class="tp-offcanvas__circle-1">
            <span></span>
        </div>
        <div class="tp-offcanvas__circle-2">
            <span></span>
        </div>
        <div class="tp-offcanvas__wrapper">
            <div class="tp-offcanvas__close">
                <button class="tp-offcanvas__close-btn tp-offcanvas-close-btn">
                    <svg width="12" height="12" viewbox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
            <div class="tp-offcanvas__content">
                <div class="tp-offcanvas__top mb-50 d-flex justify-content-between align-items-center">
                    <div class="tp-offcanvas__logo">
                        <a href="home-main.html">
                            <img src="assets/img/logo/logo-1.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="tp-main-menu-mobile d-xl-none">
                    <nav class="tp-main-menu-content">
                        <ul>
                            <li class="has-dropdown dropdown-opened">
                                <a href="index.html" class="">Home</a>
                                <div class="tp-submenu submenu has-homemenu has-homemenu-2" style="display: none;">
                                    <div class="row gx-6 row-cols-1 row-cols-md-2 row-cols-xl-4">
                                        <div class="col homemenu">
                                            <div class="mb-10 homemenu-thumb">
                                                <img src="assets/img/menu/home-1.jpg" alt="">
                                                <div class="homemenu-btn">
                                                    <a class="tp-menu-btn" href="index.html">Multi page</a>
                                                </div>
                                            </div>
                                            <div class="text-center homemenu-content">
                                                <h4 class="homemenu-title">
                                                    <a href="index.html">Digital Marketing</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="col homemenu">
                                            <div class="mb-10 homemenu-thumb">
                                                <img src="assets/img/menu/home-2.jpg" alt="">
                                                <div class="homemenu-btn">
                                                    <a class="tp-menu-btn" href="index-2.html">Multi page</a>
                                                </div>
                                            </div>
                                            <div class="text-center homemenu-content">
                                                <h4 class="homemenu-title">
                                                    <a href="index-2.html">Branding</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="col homemenu">
                                            <div class="mb-10 homemenu-thumb">
                                                <img src="assets/img/menu/home-3.jpg" alt="">
                                                <div class="homemenu-btn">
                                                    <a class="tp-menu-btn" href="index-3.html">Multi page</a>
                                                </div>
                                            </div>
                                            <div class="text-center homemenu-content">
                                                <h4 class="homemenu-title">
                                                    <a href="index-3.html">Design Studio</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="col homemenu">
                                            <div class="mb-10 homemenu-thumb">
                                                <img src="assets/img/menu/home-4.jpg" alt="">
                                                <div class="homemenu-btn">
                                                    <a class="tp-menu-btn" href="index-4.html">Multi page</a>
                                                </div>
                                            </div>
                                            <div class="text-center homemenu-content">
                                                <h4 class="homemenu-title">
                                                    <a href="index-4.html">Freelancer</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="col homemenu">
                                            <div class="mb-10 homemenu-thumb">
                                                <img src="assets/img/menu/home-5.jpg" alt="">
                                                <div class="homemenu-btn">
                                                    <a class="tp-menu-btn" href="index-5.html">Multi page</a>
                                                </div>
                                            </div>
                                            <div class="text-center homemenu-content">
                                                <h4 class="homemenu-title">
                                                    <a href="index-5.html">Creative Agency</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="col homemenu">
                                            <div class="mb-10 homemenu-thumb">
                                                <img src="assets/img/menu/home-6.jpg" alt="">
                                                <div class="homemenu-btn">
                                                    <a class="tp-menu-btn" href="index-6.html">Multi page</a>
                                                </div>
                                            </div>
                                            <div class="text-center homemenu-content">
                                                <h4 class="homemenu-title">
                                                    <a href="index-6.html">Portfolio Showcase</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="has-dropdown">
                                <a href="#">Pages</a>
                                <ul class="submenu tp-submenu">
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="team-details.html">Team details</a></li>
                                    <li><a href="price.html">Price</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="service.html">Service</a>
                                <ul class="submenu tp-submenu">
                                    <li><a href="service.html">Service</a></li>
                                    <li><a href="service-details.html">Service details</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="project.html">Project</a>
                                <ul class="submenu tp-submenu">
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li><a href="portfolio-2.html">Portfolio 2</a></li>
                                    <li><a href="portfolio-3.html">Portfolio 3</a></li>
                                    <li><a href="portfolio-details.html">project details</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="blog.html">Blog</a>
                                <ul class="submenu tp-submenu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-details.html">Blog details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tp-mobile-menu-pos"></div>
                <div class="tp-offcanvas__popup">
                    <p>Web designing in a powerful way of just not an only professions. We have tendency to believe the
                        idea
                        that smart looking .</p>
                    <div class="tp-offcanvas__popup-gallery">
                        <h4 class="tp-offcanvas__title">Gallery</h4>
                        <a class="popup-image" href="assets/img/portfolio/off-p-1.jpg">
                            <img src="assets/img/portfolio/off-p-1.jpg" alt="">
                        </a>
                        <a class="popup-image" href="assets/img/portfolio/off-p-2.jpg">
                            <img src="assets/img/portfolio/off-p-2.jpg" alt="">
                        </a>
                        <a class="popup-image" href="assets/img/portfolio/off-p-3.jpg">
                            <img src="assets/img/portfolio/off-p-3.jpg" alt="">
                        </a>
                        <a class="popup-image" href="assets/img/portfolio/off-p-4.jpg">
                            <img src="assets/img/portfolio/off-p-4.jpg" alt="">
                        </a>
                        <a class="popup-image" href="assets/img/portfolio/off-p-5.jpg">
                            <img src="assets/img/portfolio/off-p-5.jpg" alt="">
                        </a>
                        <a class="popup-image" href="assets/img/portfolio/off-p-6.jpg">
                            <img src="assets/img/portfolio/off-p-6.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="tp-offcanvas__contact">
                    <h4 class="tp-offcanvas__title">Contacts</h4>
                    <div class="tp-offcanvas__contact-content d-flex">
                        <div class="tp-offcanvas__contact-content-icon">
                            <i class="far fa-location"></i>
                        </div>
                        <div class="tp-offcanvas__contact-content-content">
                            <a
                                href="https://www.google.com/maps/search/86+Road+Broklyn+Street,+600+New+York,+USA/@40.6897806,-74.0278086,12z/data=!3m1!4b1">86
                                Road Broklyn Street, 600 </a>
                        </div>
                    </div>
                    <div class="tp-offcanvas__contact-content d-flex">
                        <div class="tp-offcanvas__contact-content-icon">
                            <i class="fas fa-paper-plane"></i>
                        </div>
                        <div class="tp-offcanvas__contact-content-content">
                            <a href="mailto:needhelp@company.com"> Needhelp@company.com </a>
                        </div>
                    </div>
                    <div class="tp-offcanvas__contact-content d-flex">
                        <div class="tp-offcanvas__contact-content-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="tp-offcanvas__contact-content-content">
                            <a href="tel:01310-069824"> +92 666 888 0000</a>
                        </div>
                    </div>
                </div>
                <div class="tp-offcanvas__social">
                    <a class="icon facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="icon twitter" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="icon youtube" href="#"><i class="fab fa-youtube"></i></a>
                    <a class="icon linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- start offcanvas end  -->

    <!-- back to top start -->
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewbox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round"></path>
            </svg>
        </button>
    </div>
    <!-- back to top end -->

    <!-- header-top-area-start -->
    <header>
        <div id="header-sticky"
            class="tp-header-top-area tp-header__style-1 tp-header__transparent tp-header__border pr-160 pl-160 black-bg">
            <div class="contianer-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
                        <div class="tp-main__logo">
                            <a href="index.html">
                                <img src="assets/img/logo/logo-1.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                        <div class="tp-main__menu d-flex justify-content-center">
                            <nav>
                                <ul>
                                    <li class="has-dropdown"><a href="index.html">Home</a>
                                        <div class="tp-submenu submenu has-homemenu">
                                            <div class="row gx-6 row-cols-1 row-cols-md-2 row-cols-lg-5 row-cols-xl-6">
                                                <div class="col homemenu">
                                                    <div class="homemenu-thumb mb-15">
                                                        <img src="assets/img/menu/home-1.jpg" alt="">
                                                        <div class="homemenu-btn">
                                                            <a class="tp-menu-btn" href="index.html">Multi page</a>
                                                        </div>
                                                    </div>
                                                    <div class="text-center homemenu-content">
                                                        <h4 class="homemenu-title">
                                                            <a href="index.html"> Digital Marketing </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col homemenu">
                                                    <div class="homemenu-thumb mb-15">
                                                        <img src="assets/img/menu/home-2.jpg" alt="">
                                                        <div class="homemenu-btn">
                                                            <a class="tp-menu-btn" href="index-2.html">Multi page</a>
                                                        </div>
                                                    </div>
                                                    <div class="text-center homemenu-content">
                                                        <h4 class="homemenu-title">
                                                            <a href="index-2.html"> Branding </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col homemenu">
                                                    <div class="homemenu-thumb mb-15">
                                                        <img src="assets/img/menu/home-3.jpg" alt="">
                                                        <div class="homemenu-btn">
                                                            <a class="tp-menu-btn" href="index-3.html">Multi page</a>
                                                        </div>
                                                    </div>
                                                    <div class="text-center homemenu-content">
                                                        <h4 class="homemenu-title">
                                                            <a href="index-3.html"> Design Studio </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col homemenu">
                                                    <div class="homemenu-thumb mb-15">
                                                        <img src="assets/img/menu/home-4.jpg" alt="">
                                                        <div class="homemenu-btn">
                                                            <a class="tp-menu-btn" href="index-4.html">Multi page</a>
                                                        </div>
                                                    </div>
                                                    <div class="text-center homemenu-content">
                                                        <h4 class="homemenu-title">
                                                            <a href="index-4.html"> Freelancer </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col homemenu">
                                                    <div class="homemenu-thumb mb-15">
                                                        <img src="assets/img/menu/home-5.jpg" alt="">
                                                        <div class="homemenu-btn">
                                                            <a class="tp-menu-btn" href="index-5.html">Multi page</a>
                                                        </div>
                                                    </div>
                                                    <div class="text-center homemenu-content">
                                                        <h4 class="homemenu-title">
                                                            <a href="index-5.html"> Creative Agency </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col homemenu">
                                                    <div class="homemenu-thumb mb-15">
                                                        <img src="assets/img/menu/home-6.jpg" alt="">
                                                        <div class="homemenu-btn">
                                                            <a class="tp-menu-btn" href="index-6.html">Multi page</a>
                                                        </div>
                                                    </div>
                                                    <div class="text-center homemenu-content">
                                                        <h4 class="homemenu-title">
                                                            <a href="index-6.html"> Portfolio Showcase </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li class="has-dropdown"><a href="service.html">Services</a>
                                        <ul class="tp-submenu">
                                            <li class="has-dropdown">
                                                <a href="service.html">Service</a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="service-details.html">Service Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="portfolio.html">Projects</a>
                                        <ul class="tp-submenu">
                                            <li class="has-dropdown">
                                                <a href="portfolio.html">Portfolio</a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="portfolio-2.html">portfolio 2</a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="portfolio-3.html">portfolio 3</a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="portfolio-details.html">Portfolio Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="blog.html">Blog</a>
                                        <ul class="tp-submenu">
                                            <li class="has-dropdown">
                                                <a href="blog.html">Blog</a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="blog-details.html">Blog Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="#">Pages</a>
                                        <ul class="tp-submenu">
                                            <li class="has-dropdown">
                                                <a href="team.html">Team</a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="team-details.html">Team Details</a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="price.html">price</a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="404.html">Error 404</a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="contact.html">Contact</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
                        <div class="tp-header__right d-flex justify-content-end">
                            <div class="tp-header__action">
                                <ul>
                                    <li>
                                        <button class="tp-header__search-btn tp-search-open-btn">
                                            <span>
                                                <svg width="18" height="18" viewbox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M12.4833 13.3769L16.6212 17.5149C16.8678 17.7615 17.2685 17.7615 17.515 17.5149C17.7617 17.2684 17.7617 16.8676 17.515 16.6211L13.3771 12.4832C14.4966 11.1613 15.1718 9.45191 15.1718 7.58592C15.1718 3.39921 11.7727 0 7.58592 0C3.39914 0 0 3.39914 0 7.58592C0 11.7727 3.39914 15.1718 7.58592 15.1718C9.45205 15.1718 11.1614 14.4967 12.4832 13.3771L12.4833 13.3769ZM7.58606 1.26403C11.0749 1.26403 13.9077 4.09676 13.9077 7.58563C13.9077 11.0745 11.0749 13.9072 7.58606 13.9072C4.09719 13.9072 1.26446 11.0745 1.26446 7.58563C1.26446 4.09676 4.09719 1.26403 7.58606 1.26403Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="tp-header__burs-btn tp-offcanvas-open-btn">
                                            <span>
                                                <svg width="28" height="26" viewbox="0 0 28 26" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="2.39023" cy="2.39022" rx="2.39023" ry="2.39022"
                                                        fill="#FF521C"></ellipse>
                                                    <ellipse cx="13.9137" cy="2.39022" rx="2.39023" ry="2.39022"
                                                        fill="white" fill-opacity="0.7"></ellipse>
                                                    <ellipse cx="25.441" cy="2.39022" rx="2.39023" ry="2.39022"
                                                        fill="white" fill-opacity="0.7"></ellipse>
                                                    <ellipse cx="2.39023" cy="12.6339" rx="2.39023" ry="2.39022"
                                                        fill="white" fill-opacity="0.7"></ellipse>
                                                    <ellipse cx="13.9137" cy="12.6349" rx="2.39023" ry="2.39022"
                                                        fill="white"></ellipse>
                                                    <ellipse cx="25.441" cy="12.6349" rx="2.39023" ry="2.39022"
                                                        fill="white" fill-opacity="0.7"></ellipse>
                                                    <ellipse cx="2.39023" cy="23.0484" rx="2.39023" ry="2.39022"
                                                        fill="white" fill-opacity="0.7"></ellipse>
                                                    <ellipse cx="13.9996" cy="23.0484" rx="2.39023" ry="2.39022"
                                                        fill="white" fill-opacity="0.7"></ellipse>
                                                    <ellipse cx="25.609" cy="23.0484" rx="2.39023" ry="2.39022"
                                                        fill="#FF521C"></ellipse>
                                                </svg>
                                            </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-top-area-end -->

    @yield('content')

    <!-- tp footer area start  -->
    <footer>
        <!-- tp footer area start  -->
        <section class="tp-footer-area fix tp-footer__1 tp-footer__plr black-bg-2 z-index-11 p-relative pb-65">
            <div class="tp-footer__shape">
                <img src="assets/img/footer/footer-shape-1-1.png" alt="">
            </div>
            <div class="tp-footer__wrap">
                <div class="tp-cta-area pt-75 pb-95">
                    <div class="container">
                        <div class="tp-cta__box">
                            <div class="row justify-content-center">
                                <div class="col-xl-7">
                                    <div class="text-center tp-cta__item">
                                        <h3
                                            class="tp-cta__title tp-split__text tp-split__in-right tp-cursor-point-area">
                                            <a href="contact.html">Get in <span>touch</span></a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tp cta area end  -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="mb-40 tp-footer__widget footer-col-1">
                                <div class="tp-footer__logo">
                                    <a href="index.html">
                                        <img src="assets/img/logo/logo-1.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="mb-40 tp-footer__widget footer-col-2">
                                <h3 class="tp-footer__widget-title">Our Location</h3>
                                <div class="tp-footer__list">
                                    <a href="#">London</a>
                                    <a href="#">America</a>
                                    <a href="#">Constarica</a>
                                    <a href="#">Germany</a>
                                    <a href="#">India</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="mb-40 tp-footer__widget footer-col-3">
                                <h3 class="tp-footer__widget-title">Contact info</h3>
                                <div class="tp-footer__contact-info">
                                    <div class="tp-footer__list">
                                        <a href="#">Ta-134/A, Gulshan Badda Link</a>
                                        <a href="tel:15569569365">(+880)155 69569 365</a>
                                        <a href="mailto:support@rstheme.com">support@rstheme.com</a>
                                        <a href="#">Office Hours: 8AM - 11PM</a>
                                        <a href="#">Sunday - Wekend Day</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="tp-footer__widget footer-col-4">
                                <h3 class="tp-footer__widget-title">Newslatter</h3>
                                <div class="tp-footer__form">
                                    <form action="main.php" method="post">
                                        <input type="email" placeholder="Enter mail">
                                        <div class="tp-footer__action mt-45">
                                            <button type="submit">subscribe <span><i
                                                        class="fas fa-paper-plane"></i></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tp copyright area start -->
                <div class="pb-5 tp-copyright-area pt-80">
                    <div class="container">
                        <div class="pt-20 tp-copyright__wrap">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-7">
                                    <div class="tp-copyright__text">
                                        <p><span>©2024</span> Oclata by design. All Rights Reserved</p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5">
                                    <div class="tp-copyright__social text-lg-end">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tp copyright area end -->
            </div>
        </section>
    </footer>
    <!-- tp footer area end  -->


    <!-- JS here -->
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/gsap.js"></script>
    <script src="assets/js/gsap-scroll-smoother.js"></script>
    <script src="assets/js/gsap-scroll-trigger.js"></script>
    <script src="assets/js/gsap-scroll-to-plugin.js"></script>
    <script src="assets/js/gsap-split-text.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script src="assets/js/purecounter.js"></script>
    <script src="assets/js/knob.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/countdown.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/imagesloaded-pkgd.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>