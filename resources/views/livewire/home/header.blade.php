<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <!-- start offcanvas area  -->
    <div class="tp-offcanvas__area">
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
                            <img src="assets/img/logo/logo_old.jpg" width="150" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="tp-main-menu-mobile d-xl-none">
                    <nav class="tp-main-menu-content">
                        <ul>
                            <li>
                                <a href="{{route('home')}}" class="" wire:navigate>Home</a>
                            </li>
                            <li>
                                <a href="{{route('about')}}" wire:navigate>About</a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}" wire:navigate>Contact</a>
                            </li>
                            <li>
                                <a href="{{route('services')}}" wire:navigate>Our Service</a>
                            </li>
                            <li>
                                <a href="{{route('price')}}" wire:navigate>Our Plans</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tp-mobile-menu-pos"></div>
                <div class="tp-offcanvas__popup">
                    <p>Software development in a powerful way of just not an only professions. We have tendency to believe the
                        idea
                        that smart looking .
                    </p>
                </div>
                <div class="tp-offcanvas__contact">
                    <h4 class="tp-offcanvas__title">Contacts</h4>
                    <div class="tp-offcanvas__contact-content d-flex">
                        <div class="tp-offcanvas__contact-content-icon">
                            {{-- <i class="far fa-location"></i> --}}
                        </div>
                        <div class="tp-offcanvas__contact-content-content">
                            <a
                                href="https://www.google.com/maps/search/86+Road+Broklyn+Street,+600+New+York,+USA/@40.6897806,-74.0278086,12z/data=!3m1!4b1">{{ config('app.app_address')}}</a>
                        </div>
                    </div>
                    <div class="tp-offcanvas__contact-content d-flex">
                        <div class="tp-offcanvas__contact-content-icon">
                            <i class="fas fa-paper-plane"></i>
                        </div>
                        <div class="tp-offcanvas__contact-content-content">
                            <a href="mailto:{{ config('app.app_mail')}}"> {{ config('app.app_mail')}}</a>
                        </div>
                    </div>
                    <div class="tp-offcanvas__contact-content d-flex">
                        <div class="tp-offcanvas__contact-content-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="tp-offcanvas__contact-content-content">
                            <a href="tel:{{ config('app.app_number')}}"> {{ config('app.app_number')}}</a>
                        </div>
                    </div>
                </div>
                <div class="tp-offcanvas__social">
                    <a class="icon facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="icon twitter" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="icon instagram" href="#"><i class="fab fa-instagram"></i></a>
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
                                <img src="assets/img/logo/logo_old.jpg" width="150" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                        <div class="tp-main__menu d-flex justify-content-center">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{route('home')}}" class="" wire:navigate>Home</a>
                                    </li>
                                    <li>
                                        <a href="{{route('about')}}" wire:navigate>About</a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}" wire:navigate>Contact</a>
                                    </li>
                                    <li>
                                        <a href="{{route('services')}}" wire:navigate>Our Service</a>
                                    </li>
                                    <li>
                                        <a href="{{route('price')}}" wire:navigate>Our Plans</a>
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
</div>