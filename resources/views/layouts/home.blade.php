<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Innovagigs the agency driven by profitable results">

    <title>{{env('APP_NAME')}} - {{$title ?? " "}}</title>

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/logo/favicon.png')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/custom-animation.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- Styles -->
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


    <livewire:home.header />

    @yield('content')

    <!-- tp footer area start  -->
    <footer>
        <!-- tp footer area start  -->
        <section class="tp-footer-area fix tp-footer__1 tp-footer__plr black-bg-2 z-index-11 p-relative pb-65">
            <div class="tp-footer__shape">
                <img src="assets/img/logo/logo_old.jpg" width="400" alt="">
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
                                            <a href="contact">Get in <span>touch</span></a>
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
                                    <a href="/">
                                        {{-- <img src="assets/img/logo/logo-1.png" alt=""> --}}
                                        <img src="assets/img/logo/logo_old.jpg" width="150" alt="logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="mb-40 tp-footer__widget footer-col-3">
                                <h3 class="tp-footer__widget-title">Contact info</h3>
                                <div class="tp-footer__contact-info">
                                    <div class="tp-footer__list">
                                        {{-- <a href="#">{{ config('app.app_address')}}</a> --}}
                                        <a href="tel:{{ config('app.app_number')}}">{{ config('app.app_number')}}</a>
                                        <a href="mailto:{{ config('app.app_mail')}}">{{ config('app.app_mail')}}</a>
                                        <a href="#">Office Hours: 8AM - 5PM</a>
                                        <a href="#">Week Days</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <livewire:home.get-updates />
                    </div>
                </div>
                <!-- tp copyright area start -->
                <div class="pb-5 tp-copyright-area pt-80">
                    <div class="container">
                        <div class="pt-20 tp-copyright__wrap">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-7">
                                    <div class="tp-copyright__text">
                                        <p>2024 -<span> {{date('Y')}}</span> From Innovagigs. All Rights Reserved</p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5">
                                    <div class="tp-copyright__social text-lg-end">
                                        <a href="https://x.com/innovagigs"><i class="fab fa-twitter text-info"></i></a>
                                        <a href="https://www.linkedin.com/company/innovagigs/"><i class="fab fa-linkedin-in text-info"></i></a>
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

    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '5950e65dc5cf49b877b72b01bb633fdc4df38ff0';
        window.smartsupp||(function(d) {
          var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
          s=d.getElementsByTagName('script')[0];c=d.createElement('script');
          c.type='text/javascript';c.charset='utf-8';c.async=true;
          c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
        })(document);
    </script>
    <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>


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