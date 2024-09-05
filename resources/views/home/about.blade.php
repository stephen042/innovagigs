@extends('layouts.home')

@section('content')
<!-- tp-ab-hero-area start -->
<section class="tp-ab__area tp-ab__plr" data-background="{{asset('assets/img/project/project-bg-shape.png')}}" style="background-size: contain">
    <div class="container" >
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="tp-ab__title-box">
                    <span class="tp-hero__subtitle mb-25 tp-split__text tp-split__in-right">
                        Creative Agency Make Your Dreams a reality
                    </span>
                    <h3 class="tp-ab__title tp-split__text tp-split__in-right">
                        ABOUT OUR
                        <span><img src="{{asset('assets/img/logo/favicon.png')}}" alt="" width="80"></span>
                        AGENCY & SERVICES
                    </h3>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="text-center tp-ab__btn-wrap text-lg-end">
                    <div class="tp-hover__btn-wrap tp-btn__bounce">
                        <a href="mailto:{{config('app.app_mail')}}" class="tp-hover__btn tp-hover__btn-item">
                            <span class="tp-btn__circle-text">
                                LET'S TALK TODAY
                            </span>
                            <span class="tp-btn__circle-arrow">
                                <svg width="26" height="27" viewBox="0 0 26 27" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 25.37L23.8469 2.52313M1 1H25.37V25.37" stroke="white"
                                        stroke-linecap="square" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center tp-ab__thumb pt-100 pl-75 pr-75">
        <img src="assets/img/about/about-inner/ab-in-image.jpg" alt="">
    </div>
</section>
<!-- tp-ab-hero-area end -->

<!-- tp categories area start  -->
<section class="tp-cate__area fix pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="tp-cate__title-box">
                    <h3 class="mb-40 tp-cate__title tp-split__text tp-split__in-right">
                        STRATEGIES FOR BUILDING GROWING, AND MANAGING YOUR BRAND'S IDENTITY
                    </h3>
                    <div class="tp-hero__action d-flex align-items-center">
                        <span>
                            <a href="#" class="tp-hero__action-btn">
                                <span>
                                    <svg width="33" height="33" viewBox="0 0 33 33" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.99996 26.5469L29.4548 7.97636M6.73828 2L31.2851 6.73832L26.5468 31.2852"
                                            stroke="white" stroke-width="2" stroke-linecap="square"
                                            stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                        </span>
                        <a href="service.html">LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="tp-cate__dsc-wrap ml-95">
                    <div class="mb-20 tp-cate__dsc">
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                            was born and I will give you a complete account of the system, and expound the actual
                            teachings of the great explorer of the truth, the master-builder of human happiness. No
                            one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because
                            those who do not know how to pursue pleasure rationally encounter</p>
                    </div>
                    <div class="tp-cate__list-box">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="tp-cate__list">
                                    <a href="#">
                                        <i class="far fa-check"></i>
                                        <span>Efficient Sprint Planning</span>
                                    </a>
                                    <a href="#">
                                        <i class="far fa-check"></i>
                                        <span>Standups and Demos</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="tp-cate__list">
                                    <a href="#">
                                        <i class="far fa-check"></i>
                                        <span>Efficient Sprint Planning</span>
                                    </a>
                                    <a href="#">
                                        <i class="far fa-check"></i>
                                        <span>Standups and Demos</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- tp categories area end  -->

<!-- tp-awards area start  -->
<section class="tp-awards__5-area fix tp-awards__5 pt-35 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="tp-awards__5-thumb-box p-relative">
                    <div class="tp-awards__5-thumb">
                        <img src="assets/img/awards/awards-inner/awards-in-1.png" alt="">
                    </div>
                    <div class="tp-services__4-shape-box d-sm-block">
                        <div class="tp-services__4-shape p-relative">
                            <span>
                                <svg width="266" height="266" viewBox="0 0 266 266" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M238.43 52.3903L190.791 100.645L256.868 85.4299L197.561 118.307L265.254 122.335L199.092 137.168L262.907 160.099L195.238 155.691L250.01 195.667L186.326 172.382L227.61 226.166L173.067 185.881L197.531 249.125L156.551 195.098L162.199 262.669L138.1 199.294L124.488 265.716L119.217 198.117L87.438 258.021L101.428 191.671L54.0656 240.192L86.1804 180.466L27.0601 213.677L74.703 165.43L8.62184 180.638L67.9286 147.76L0.239258 143.74L66.4017 128.907L2.58722 105.976L70.2549 110.383L15.4903 70.4039L79.1676 93.6934L37.8799 39.9016L92.4267 80.1941L67.9623 16.9499L108.943 70.9769L103.291 3.39825L127.394 66.7802L141.013 0.354248L146.278 67.9576L178.056 8.05379L164.065 74.4038L211.428 25.883L179.31 85.6025L238.43 52.3903Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <div class="tp-services__4-funfact">
                                <h3 class="text-white tp-services__4-funfact-text">
                                    <b class="purecounter" data-purecounter-duration="1"
                                        data-purecounter-end="25">25</b>+
                                </h3>
                                <p class="text-white">Services</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="tp-awards__5-content ml-60">
                    <div class="tp-awards__5-title-box mb-70">
                        <h3 class="tp-section-title tp-split__text tp-split__in-right">
                            WE'RE AWARD-WINING <span>DEVELOPMENT</span> <i>AGENCY</i>
                        </h3>
                        <p>It's the perfect dining experience where every dish is crafted with fresh, high
                            Experience quick and efficient service that ensures your food is servead fresh
                            dining experience where every dish is crafted with fresh, high-quality ing</p>
                    </div>
                    <div
                        class="tp-awards__5-funfact-box mb-80 p-relative d-sm-flex align-items-center justify-content-between">
                        <div class="text-center tp-awards__5-funfact-item">
                            <p class="text-white">Satsified Clients</p>
                            <h3 class="tp-awards__5-funfact-text">
                                <b class="purecounter" data-purecounter-duration="1" data-purecounter-end="25">25</b>+
                            </h3>
                        </div>
                        <div class="text-center tp-awards__5-funfact-item">
                            <p class="text-white">Service catagories</p>
                            <h3 class="tp-awards__5-funfact-text">
                                <b class="purecounter" data-purecounter-duration="1" data-purecounter-end="153">153</b>+
                            </h3>
                        </div>
                        <div class="text-center tp-awards__5-funfact-item">
                            <p class="text-white">Awward win</p>
                            <h3 class="tp-awards__5-funfact-text">
                                <b class="purecounter" data-purecounter-duration="1" data-purecounter-end="25">25</b>+
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- tp-awards area end  -->

<!-- text slider-8 area start -->
<section class="pt-20 pb-10 tp-text-slider__8-area fix tp-text__inner-1">
    <div class="tp-text__slider-4-wrap p-relative">
        <div class="swiper-container tp-text__4-slider-active">
            <div class="swiper-wrapper slide-transtion">
                <div class="swiper-slide">
                    <div class="tp-text__4-wrap">
                        <h3 class="tp-text__8-text">
                            <span>MARKETING</span> _ <span class="tp-theme-text">IOS DEVELOPMENT</span> _
                            <span>WEB APP</span> SEO
                        </h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tp-text__4-wrap">
                        <h3 class="tp-text__8-text">
                            <span>DESIGNS</span> _ <span class="tp-theme-text">APK DEVELOPMENT</span> _
                            <span>WEB APP,</span> SEO
                        </h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tp-text__4-wrap">
                        <h3 class="tp-text__8-text">
                            <span>GRAPHICS</span> _ <span class="tp-theme-text">IOS DEVELOPMENT</span> _
                            <span>WEB APP,</span> SEO
                        </h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tp-text__4-wrap">
                        <h3 class="tp-text__8-text">
                            <span>MARKETING</span> _ <span class="tp-theme-text">BRANDING</span> _
                            <span>CREATIVE</span> AGENCYET _ CHEMICATION
                        </h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tp-text__4-wrap">
                        <h3 class="tp-text__8-text">
                            <span>MARKETING</span> _ <span class="tp-theme-text">BRANDING</span> _
                            <span>CREATIVE</span> AGENCYET _ CHEMICATION
                        </h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tp-text__4-wrap">
                        <h3 class="tp-text__8-text">
                            <span>MARKETING</span> _ <span class="tp-theme-text">BRANDING</span> _
                            <span>CREATIVE</span> AGENCYET _ CHEMICATION
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- text slider-8 area end -->

<!-- text slider-9 area start -->
<section class="pb-20 tp-text-slider__9-area fix tp-text__inner-1">
    <div class="tp-text__slider-4-wrap p-relative">
        <div class="swiper-container tp-text__4-slider-active" dir="rtl">
            <div class="swiper-wrapper slide-transtion">
                <div class="swiper-slide">
                    <div class="tp-text__4-wrap">
                        <h3 class="tp-text__9-text">
                            SEO _ GRAPHICS DESIGNS _ WEB DEVELOPMENT _ APP DEVELOPMENT
                        </h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tp-text__4-wrap">
                        <h3 class="tp-text__9-text">
                            SEO _ GRAPHICS DESIGNS _ WEB DEVELOPMENT _ APP DEVELOPMENT
                        </h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tp-text__4-wrap">
                        <h3 class="tp-text__9-text">
                            SEO _ GRAPHICS DESIGNS _ WEB DEVELOPMENT _ APP DEVELOPMENT
                        </h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tp-text__4-wrap">
                        <h3 class="tp-text__9-text">
                             SEO _ GRAPHICS DESIGNS _ WEB DEVELOPMENT _ APP DEVELOPMENT
                        </h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tp-text__4-wrap">
                        <h3 class="tp-text__9-text">
                             SEO _ GRAPHICS DESIGNS _ WEB DEVELOPMENT _ APP DEVELOPMENT
                        </h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tp-text__4-wrap">
                        <h3 class="tp-text__9-text">
                             SEO _ GRAPHICS DESIGNS _ WEB DEVELOPMENT _ APP DEVELOPMENT
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- text slider-9 area end -->

<!-- tp-fun fact-area start  -->
<div class="tp-funfact-area fix tp-funfact__inner-1 p-relative pt-120">
    <div class="tp-funfact__shape">
        <img src="assets/img/funfact/funfact-shape-1-1.png" alt="">
    </div>
    <div class="tp-funfact__box tp-funfact__bg pt-135 pb-35" data-background="assets/img/funfact/funfact-bg-1-1.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center tp-funfact__title-box tp-cursor-point-area mb-110 p-relative">
                        <h3 class="tp-section-title tp-split__text tp-split__in-right">
                            Let’s Work <i> Together </i>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="tp-funfact__wrap">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="text-center tp-funfact__item">
                            <h3 class="tp-funfact__number">
                                <b class="purecounter" data-purecounter-duration="1" data-purecounter-end="5">5</b>k+
                            </h3>
                            <div class="tp-funfact__text">
                                <span>Awesome clients</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="text-center tp-funfact__item">
                            <h3 class="tp-funfact__number">
                                <b class="purecounter" data-purecounter-duration="1" data-purecounter-end="500">500</b>+
                            </h3>
                            <div class="tp-funfact__text">
                                <span>Created projects</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="text-center tp-funfact__item">
                            <h3 class="tp-funfact__number">
                                <b class="purecounter" data-purecounter-duration="1" data-purecounter-end="2">2</b>B+
                            </h3>
                            <div class="tp-funfact__text">
                                <span>Awesome client</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="text-center tp-funfact__item">
                            <h3 class="tp-funfact__number">
                                <b class="purecounter" data-purecounter-duration="1" data-purecounter-end="10">10</b>k+
                            </h3>
                            <div class="tp-funfact__text">
                                <span>Created projects</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tp-fun fact-area end  -->

<!-- Chooseus-2 start -->
<section class="tp-chooseus__2-area fix tp-chooseus__inner-1 p-relative pt-120 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tp-choosus__2-title-box mb-90">
                    <span class="text-white tp-section-title-pre pruple tp-split__text tp-split__in-right">
                        Why choose us
                    </span>
                </div>
            </div>
        </div>
        <div class="tp-chooseus__2-wrap">
            <div class="row">
                <div class="col-xl-7">
                    <div class="tp-chooseus__2-content mb-55">
                        <h3 class="tp-section-title mb-25 tp-split__text tp-split__in-right">
                            We’re <span>Award</span>-Winning Development <span>Agencies</span>
                        </h3>
                        <p>Whether it's crafting a visually stunning brand identity Whether it's ns
                            designing immersive digital experiences, or developi crafting a visually
                            strategic marketing campaigns, we approach stunning brand identity</p>
                    </div>
                    <div class="tp-chooseus__2-progress">
                        <div class="tp-progress__bar p-relative mb-50">
                            <span>85%</span>
                            <h5 class="tp-progress__bar-title">creative development</h5>
                            <div class="progress">
                                <div class="progress-bar"
                                    style="width: 85%; visibility: visible; animation-duration: 0.9s; animation-delay: 0.9s; animation-name: slideInLeft;">
                                </div>
                            </div>
                        </div>
                        <div class="tp-progress__bar p-relative mb-50">
                            <span>75%</span>
                            <h5 class="tp-progress__bar-title">Ui/Ux Design</h5>
                            <div class="progress">
                                <div class="progress-bar"
                                    style="width: 95%; visibility: visible; animation-duration: 0.9s; animation-delay: 0.9s; animation-name: slideInLeft;">
                                </div>
                            </div>
                        </div>
                        <div class="tp-progress__bar p-relative mb-50">
                            <span>95%</span>
                            <h5 class="tp-progress__bar-title">Web Development</h5>
                            <div class="progress">
                                <div class="progress-bar"
                                    style="width: 95%; visibility: visible; animation-duration: 0.9s; animation-delay: 0.9s; animation-name: slideInLeft;">
                                </div>
                            </div>
                        </div>
                        <div class="tp-progress__bar p-relative mb-50">
                            <span>92%</span>
                            <h5 class="tp-progress__bar-title">Mobile App Development</h5>
                            <div class="progress">
                                <div class="progress-bar"
                                    style="width: 95%; visibility: visible; animation-duration: 0.9s; animation-delay: 0.9s; animation-name: slideInLeft;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="tp-chooseus__2-thumb-box p-relative">
                        <div class="tp-chooseus__2-thumb">
                            <img src="assets/img/chooseus/chooseus-thumb-2-1.png" alt="">
                        </div>
                        <div class="tp-chooseus__2-thumb-shape d-none d-sm-block">
                            <img src="assets/img/chooseus/chooseus-thumb-2-shape-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Chooseus-2 end -->

<!-- question-area start  -->
<section class="tp-question__area pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="text-center tp-question__title-box">
                    <h3 class="tp-ab__title tp-ab__title-2 tp-split__text tp-split__in-right">
                        <span><img src="assets/img/about/about-inner/ab-in-shape-1.png" alt=""></span>
                        Do You <br>
                        Need Our
                        <span><img src="assets/img/about/about-inner/ab-in-shape-1.png" alt=""></span>
                        <br>
                        <span><img src="assets/img/about/about-inner/ab-in-shape-1.png" alt=""></span>
                        Services
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- question-area end  -->

<!-- tp cta area start  -->
<section class="tp-cta-2-area fix black-bg pt-65">
    <div class="container">
        <div class="tp-cta__3-box">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-8 col-md-8">
                    <div class="tp-cta__3-text">
                        <h3 class="tp-cta__3-title tp-split__text tp-split__in-right">
                            <a href="contact.html">LET<span>’</span>S <span><i>TALK</i></span></a>
                        </h3>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-4">
                    <div class="tp-cta__3-action d-none d-md-block text-md-end">
                        <a href="contact.html">
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