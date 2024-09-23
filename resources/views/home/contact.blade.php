@extends('layouts.home')

@section('content')
<!-- breadcrumb area start -->
<section class="breadcrumb__area fix p-relative breadcrumb__plr breadcrumb__overlay breadcrumb__bg"
data-background="{{asset('assets/img/project/project-bg-shape.png')}}" style="background-size:cover;">
    <div class="breadcrumb__shape">
        <img src="{{asset('assets/img/breadcrumb/breadcrumb-shape.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="text-center breadcrumb__content p-relative z-index-2">
                    <div class="breadcrumb__list">
                        <span><a href="#">Contact Us</a></span>
                    </div>
                    <h3 class="breadcrumb__title tp-split__text tp-split__in-right">CONTACT US</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- tp-Team-details-area start  -->
<section class="tp-contact__area tp-contact__inner-1 tp-team__details-style pt-145 pb-150">
    <div class="container">
        <div class="tp-team__2-wrap">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="tp-contact__left">
                        <div class="tp-contact__title-box mb-75">
                            <h3 class="tp-section-title mb-35 tp-split__text tp-split__in-right">
                                GET IN TOUCH
                            </h3>
                            <p>Get in touch with us for innovative software solutions tailored to your needs. Whether it's mobile app development, website design, or graphic services, our expert team is here to help bring your ideas to life. Let's work together to build something great!</p>
                        </div>
                        <div class="tp-contact__content d-sm-flex align-items-center">
                            <div class="tp-contact__text">
                                <h3 class="tp-contact__title">Contact</h3>
                                <a href="tel:{{config('app.app_number')}}" class="tp-contact__title-sm">{{config('app.app_number')}}</a>
                            </div>
                            <div class="tp-contact__email">
                                <h3 class="tp-contact__title">Email</h3>
                                <a href="mailto:{{config('app.app_mail')}}" class="tp-contact__title-sm">{{config('app.app_mail')}}</a>
                            </div>
                        </div>
                        <div class="tp-contact__content d-sm-flex align-items-center">
                            {{-- <div class=" tp-contact__adress">
                                <h3 class="tp-contact__title">Address</h3>
                                <a href="https://maps.app.goo.gl/2vSg9QCLCUH3L59PA"
                                    class="tp-contact__title-sm">{{config('app.app_address')}}</a>
                            </div> --}}
                            <div class="tp-contact__social">
                                <h3 class="tp-contact__title">Follow</h3>
                                <div class="tp-contact__social-link">
                                    <a href="#"><i class="fab fa-facebook-f text-primary"></i></a>
                                    <a href="#"><i class="fab fa-twitter text-info"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in text-info"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="tp-team__details-contact-box">
                        <div class="tp-team__details-contact-item">
                            <div class="tp-team__details-contact-title-box">
                                <h3 class="tp-team__details-contact-title tp-split__text tp-split__in-right">
                                    Get in Touch
                                </h3>
                                <p>Your email address will not be published. Required fields
                                    are marked *</p>
                            </div>
                           <livewire:home.get-in-touch />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- tp-Team-details-area end  -->

<!-- tp cta area start  -->
<section class="tp-cta__2-area black-bg pt-65">
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