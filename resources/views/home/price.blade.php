@extends('layouts.home')

@section('content')
<!-- breadcrumb area start -->
<section class="breadcrumb__area fix p-relative breadcrumb__plr breadcrumb__overlay breadcrumb__bg"
data-background="{{asset('assets/img/project/project-bg-shape.png')}}">
    <div class="breadcrumb__shape">
        <img src="assets/img/breadcrumb/breadcrumb-shape.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="text-center breadcrumb__content p-relative z-index-2">
                    <div class="breadcrumb__list">
                        <span><a href="#">Pricing Plan</a></span>
                    </div>
                    <h3 class="breadcrumb__title tp-split__text tp-split__in-right">PRICING PLAN</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- pricing-2 start  -->
<section class="tp-price__2-area tp-price__2 tp-price__inner-1 black-bg pt-160 pb-140">
    <div class="container">
        <div class="tp-price__2-wrap">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tp-price__2-item">
                        <div class="tp-price__2-head mb-35">
                            <h3 class="tp-price__2-title">Basic Package</h3>
                            <hr>
                            <p>STARTS FROM </p>
                            <div class="tp-price__2-head-text d-flex align-items-end">
                                <h3 class="tp-price__2-value">
                                    <span class="tp-price__2-currencey">$</span>89.99
                                </h3>
                                <div class="tp-price__2-plan">
                                    <span>/ USD</span>
                                </div>
                            </div>
                        </div>
                        <div class="tp-price__list mb-50">
                            <ul>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        02 pages website
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        Responsive on all devices
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        SEO Optimizations
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        Livechat integration
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="tp-price__action">
                            <a href="mailto:{{config('app.app_mail')}}" class="tp-price-btn">
                                Choose Pricing Plan
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tp-price__2-item tp-price__2-active">
                        <div class="tp-price__2-head mb-35">
                            <div class="tp-price__2-meta">
                                <span class="tp-price__2-meta-text">RECOMMEND</span>
                            </div>
                            <h3 class="tp-price__2-title"> Business Plan </h3>
                            <hr>
                            <p>STARTS FROM </p>
                            <div class="tp-price__2-head-text d-flex align-items-end">
                                <h3 class="tp-price__2-value">
                                    <span class="tp-price__2-currencey">$</span>399.99
                                </h3>
                                <div class="tp-price__2-plan">
                                    <span>/ USD</span>
                                </div>
                            </div>
                        </div>
                        <div class="tp-price__list mb-50">
                            <ul>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        10 pages website
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        LiveChat and WhatsApp API integration
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        SEO Optimizations
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        Customer's Dashboard
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        Free logo and one Flyer design
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="tp-price__action">
                            <a href="mailto:{{config('app.app_mail')}}" class="tp-price-btn">
                                Choose Pricing Plan
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tp-price__2-item">
                        <div class="tp-price__2-head mb-35">
                            <h3 class="tp-price__2-title"> Premium Package </h3>
                            <hr>
                            <p>STARTS FROM </p>
                            <div class="tp-price__2-head-text d-flex align-items-end">
                                <h3 class="tp-price__2-value">
                                    <span class="tp-price__2-currencey">$</span>499
                                </h3>
                                <div class="tp-price__2-plan">
                                    <span>/ Standard pack</span>
                                </div>
                            </div>
                        </div>
                        <div class="tp-price__list mb-50">
                            <ul>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        Unlimited Website Pages
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        Graphics Design
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        SEO Optimizations
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        Mobile App development
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        IT Consultancy Manage
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="tp-price__action">
                            <a href="mailto:{{config('app.app_mail')}}" class="tp-price-btn">
                                Choose Pricing Plan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pricing-2 end  -->

<!-- tp cta area start  -->
<section class="tp-cta__2-area fix black-bg pt-65">
    <div class="container">
        <div class="tp-cta__3-box">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-8 col-md-8">
                    <div class="tp-cta__3-text">
                        <h3 class="tp-cta__3-title tp-split__text tp-split__in-right">
                            <a href="mailto:{{config('app.app_mail')}}">LET<span>’</span>S <span><i>TALK</i></span></a>
                        </h3>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-4">
                    <div class="tp-cta__3-action d-none d-md-block text-md-end">
                        <a href="mailto:{{config('app.app_mail')}}">
                            <span>
                                <svg width="122" height="122" viewBox="0 0 122 122" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 118.23L112.028 10.2019M4 3H119.23V118.23" stroke="#FF521C"
                                        stroke-width="4.5" stroke-linecap="square" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- tp cta area end  -->
@endsection