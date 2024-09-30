@extends('layouts.home')

@section('content')

<main>
    <!-- tp-hero-area start -->
    <section class="tp-hero__area fix tp-hero__space tp-hero__bg p-relative"
        data-background="{{asset('assets/img/project/project-bg-shape.png')}}">
        <div class="tp-hero__social">
            <div class="tp-hero__social-content">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                            <span>LinkedIn</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://x.com/innovagigs">
                            <i class="fab fa-twitter"></i>
                            <span>Twitter</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tp-hero__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="tp-hero__title-box mb-70 p-relative">
                            <span class="mb-20 tp-hero__subtitle">Creative Agency Make Your Dreams a reality</span>
                            <h3 class="tp-hero__title tp-marketing tp-split__text tp-split__in-right p-relative ">
                                Software Solution,</span><br>Driven by Strategy and Execellence
                            </h3>
                            <div class="tp-hero__title-shape">
                                <span>
                                    <svg width="349" height="83" viewbox="0 0 349 83" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M289.606 6.18644C224.67 -0.493387 79.3469 -4.08379 17.5379 34.9932C-59.7235 83.8393 171.734 85.1324 259.844 77.577C312.563 73.0563 347 61.9956 347 45.9929C347 32.2157 287.201 11.5094 178.975 15.4233"
                                            stroke="currentColor" stroke-width="3" stroke-linecap="round"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="tp-hero__action d-flex align-items-center">
                            <span>
                                <a href="contact.html" class="tp-hero__action-btn">
                                    <span>
                                        <svg width="33" height="33" viewbox="0 0 33 33" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1.99996 26.5469L29.4548 7.97636M6.73828 2L31.2851 6.73832L26.5468 31.2852"
                                                stroke="white" stroke-width="2" stroke-linecap="square"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </span>
                            <a href="contact.html">LEARN MORE</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="tp-hero__content tp-hero-content">
                            <div class="tp-hero__thumb mb-80 p-relative">
                                <img src="assets/img/logo/logo_old.jpg" width="400" alt="logo">
                                <div class="tp-hero__thumb-shape">
                                    <span>
                                        <svg width="72" height="72" viewbox="0 0 72 72" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M67.5 32.0625H50.6948L65.25 23.6588C66.154 23.1366 66.8137 22.2768 67.0839 21.2684C67.3542 20.26 67.2129 19.1855 66.6911 18.2812C66.169 17.3772 65.3092 16.7176 64.3008 16.4473C63.2923 16.1771 62.2179 16.3184 61.3136 16.8401L46.7573 25.2428L55.1599 10.6875C55.6816 9.78324 55.8229 8.70878 55.5527 7.70037C55.2824 6.69197 54.6228 5.83216 53.7188 5.31C52.8145 4.78778 51.7399 4.64612 50.7312 4.91617C49.7226 5.18621 48.8625 5.84585 48.3401 6.75L39.9375 21.3053V4.5C39.9375 3.45571 39.5227 2.45419 38.7842 1.71577C38.0458 0.977343 37.0443 0.5625 36 0.5625C34.9557 0.5625 33.9542 0.977343 33.2158 1.71577C32.4773 2.45419 32.0625 3.45571 32.0625 4.5V21.3053L23.6599 6.75C23.1377 5.84597 22.2779 5.18631 21.2695 4.91606C20.2611 4.64582 19.1866 4.78711 18.2824 5.30888C17.8345 5.56733 17.4419 5.91147 17.127 6.32165C16.8122 6.73183 16.5812 7.20002 16.4473 7.69948C16.3133 8.19893 16.2791 8.71988 16.3465 9.23256C16.4139 9.74525 16.5816 10.2396 16.8401 10.6875L25.2416 25.2416L10.6875 16.8401C9.78324 16.3184 8.70878 16.1771 7.70037 16.4473C6.69197 16.7176 5.83216 17.3772 5.31 18.2812C4.78814 19.1854 4.64668 20.2597 4.91671 21.2681C5.18674 22.2765 5.84616 23.1364 6.75 23.6588L21.3053 32.0625H4.5C3.45571 32.0625 2.45419 32.4773 1.71577 33.2158C0.977343 33.9542 0.5625 34.9557 0.5625 36C0.5625 37.0443 0.977343 38.0458 1.71577 38.7842C2.45419 39.5227 3.45571 39.9375 4.5 39.9375H21.3053L6.75 48.3413C5.84616 48.8636 5.18674 49.7235 4.91671 50.7319C4.64668 51.7403 4.78814 52.8146 5.31 53.7188C5.83216 54.6228 6.69197 55.2824 7.70037 55.5527C8.70878 55.8229 9.78324 55.6816 10.6875 55.1599L25.2416 46.7584L16.8401 61.3125C16.3184 62.2168 16.1771 63.2912 16.4473 64.2996C16.7176 65.308 17.3772 66.1678 18.2812 66.69C19.1855 67.2122 20.2601 67.3539 21.2688 67.0838C22.2774 66.8138 23.1375 66.1541 23.6599 65.25L32.0625 50.6959V67.5C32.0625 68.5443 32.4773 69.5458 33.2158 70.2842C33.9542 71.0227 34.9557 71.4375 36 71.4375C37.0443 71.4375 38.0458 71.0227 38.7842 70.2842C39.5227 69.5458 39.9375 68.5443 39.9375 67.5V50.6959L48.3401 65.25C48.8623 66.154 49.7221 66.8137 50.7305 67.0839C51.7389 67.3542 52.8134 67.2129 53.7176 66.6911C54.6217 66.169 55.2813 65.3092 55.5516 64.3008C55.8218 63.2923 55.6805 62.2179 55.1587 61.3136L46.7573 46.7584L61.3125 55.1599C62.2168 55.6816 63.2912 55.8229 64.2996 55.5527C65.308 55.2824 66.1678 54.6228 66.69 53.7188C67.2119 52.8146 67.3533 51.7403 67.0833 50.7319C66.8133 49.7235 66.1538 48.8636 65.25 48.3413L50.6948 39.9375H67.5C68.5443 39.9375 69.5458 39.5227 70.2842 38.7842C71.0227 38.0458 71.4375 37.0443 71.4375 36C71.4375 34.9557 71.0227 33.9542 70.2842 33.2158C69.5458 32.4773 68.5443 32.0625 67.5 32.0625Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <p>At Innovagigs, we believe that software development is not just a profession but a
                                powerful way to transform ideas into reality. Our team is driven by the conviction that
                                innovative solutions can make a significant impact.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tp-hero-area end -->

    <!-- tp-brand area start  -->
    <div class="pb-20 tp-brand__area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-brand-wrap">
                        <div class="swiper-container tp-brand__active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tp-brand__item">
                                        <div class="tp-brand__logo">
                                            <a href="#">
                                                <svg height="70"
                                                    viewBox=".04909165 -.09850177 201.51181671 207.64128837"
                                                    width="2424" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m201.45 46.94a3.28 3.28 0 0 1 .11.85v44.54a3.25 3.25 0 0 1 -1.63 2.82l-37.38 21.52v42.66a3.26 3.26 0 0 1 -1.62 2.82l-78 44.92a3.49 3.49 0 0 1 -.57.24c-.07 0-.14.07-.22.09a3.27 3.27 0 0 1 -1.66 0c-.09 0-.17-.07-.26-.11a3.38 3.38 0 0 1 -.54-.22l-78-44.92a3.25 3.25 0 0 1 -1.63-2.82v-133.58a3.32 3.32 0 0 1 .11-.85c0-.09.08-.18.11-.27a3.2 3.2 0 0 1 .21-.5 3 3 0 0 1 .22-.29 3.31 3.31 0 0 1 .29-.38 3.17 3.17 0 0 1 .32-.24 2.65 2.65 0 0 1 .36-.28l39-22.46a3.26 3.26 0 0 1 3.25 0l39 22.46a4 4 0 0 1 .36.28 3.84 3.84 0 0 1 .32.24 3.8 3.8 0 0 1 .29.38 3 3 0 0 1 .22.29 3.39 3.39 0 0 1 .21.5c0 .09.09.18.11.28a3.28 3.28 0 0 1 .11.85v83.46l32.51-18.72v-42.75a3.28 3.28 0 0 1 .11-.84c0-.1.08-.18.11-.28a3.66 3.66 0 0 1 .21-.5c.06-.11.15-.19.22-.29a3.34 3.34 0 0 1 .29-.38 3.12 3.12 0 0 1 .32-.24 3.28 3.28 0 0 1 .36-.28l39-22.46a3.25 3.25 0 0 1 3.25 0l39 22.46a3.59 3.59 0 0 1 .37.28c.1.08.22.15.31.24a3.8 3.8 0 0 1 .29.38 2.45 2.45 0 0 1 .22.29 3.22 3.22 0 0 1 .21.5 2.32 2.32 0 0 1 .13.31zm-6.39 43.51v-37l-13.65 7.86-18.86 10.86v37l32.52-18.72zm-39 67v-37.06l-18.55 10.59-53 30.23v37.41zm-149.56-126.12v126.12l71.52 41.17v-37.4l-37.36-21.15a151.92 151.92 0 0 0 -.66-.5 3.09 3.09 0 0 1 -.27-.34 3.47 3.47 0 0 1 -.24-.32 2.59 2.59 0 0 1 -.17-.41 2.4 2.4 0 0 1 -.15-.37 3.11 3.11 0 0 1 -.06-.47 2.82 2.82 0 0 1 0-.37v-87.24l-18.86-10.86-13.65-7.85zm35.76-24.33-32.48 18.75 32.5 18.71 32.5-18.71-32.5-18.71zm16.91 116.75 18.86-10.85v-81.57l-13.65 7.86-18.87 10.86v81.58zm100.13-94.68-32.52 18.68 32.5 18.71 32.5-18.71zm-3.25 43-18.86-10.86-13.65-7.86v37l18.86 10.85 13.66 7.86zm-74.78 83.46 47.67-27.21 23.84-13.57-32.47-18.7-37.39 21.53-34.14 19.65z"
                                                        fill="#ff2d20" />
                                                </svg>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-brand__item">
                                        <div class="tp-brand__logo">
                                            <a href="#">
                                                <svg height="70" viewBox="175.7 78 490.6 436.9" width="2194"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g fill="#61dafb">
                                                        <path
                                                            d="m666.3 296.5c0-32.5-40.7-63.3-103.1-82.4 14.4-63.6 8-114.2-20.2-130.4-6.5-3.8-14.1-5.6-22.4-5.6v22.3c4.6 0 8.3.9 11.4 2.6 13.6 7.8 19.5 37.5 14.9 75.7-1.1 9.4-2.9 19.3-5.1 29.4-19.6-4.8-41-8.5-63.5-10.9-13.5-18.5-27.5-35.3-41.6-50 32.6-30.3 63.2-46.9 84-46.9v-22.3c-27.5 0-63.5 19.6-99.9 53.6-36.4-33.8-72.4-53.2-99.9-53.2v22.3c20.7 0 51.4 16.5 84 46.6-14 14.7-28 31.4-41.3 49.9-22.6 2.4-44 6.1-63.6 11-2.3-10-4-19.7-5.2-29-4.7-38.2 1.1-67.9 14.6-75.8 3-1.8 6.9-2.6 11.5-2.6v-22.3c-8.4 0-16 1.8-22.6 5.6-28.1 16.2-34.4 66.7-19.9 130.1-62.2 19.2-102.7 49.9-102.7 82.3 0 32.5 40.7 63.3 103.1 82.4-14.4 63.6-8 114.2 20.2 130.4 6.5 3.8 14.1 5.6 22.5 5.6 27.5 0 63.5-19.6 99.9-53.6 36.4 33.8 72.4 53.2 99.9 53.2 8.4 0 16-1.8 22.6-5.6 28.1-16.2 34.4-66.7 19.9-130.1 62-19.1 102.5-49.9 102.5-82.3zm-130.2-66.7c-3.7 12.9-8.3 26.2-13.5 39.5-4.1-8-8.4-16-13.1-24-4.6-8-9.5-15.8-14.4-23.4 14.2 2.1 27.9 4.7 41 7.9zm-45.8 106.5c-7.8 13.5-15.8 26.3-24.1 38.2-14.9 1.3-30 2-45.2 2-15.1 0-30.2-.7-45-1.9-8.3-11.9-16.4-24.6-24.2-38-7.6-13.1-14.5-26.4-20.8-39.8 6.2-13.4 13.2-26.8 20.7-39.9 7.8-13.5 15.8-26.3 24.1-38.2 14.9-1.3 30-2 45.2-2 15.1 0 30.2.7 45 1.9 8.3 11.9 16.4 24.6 24.2 38 7.6 13.1 14.5 26.4 20.8 39.8-6.3 13.4-13.2 26.8-20.7 39.9zm32.3-13c5.4 13.4 10 26.8 13.8 39.8-13.1 3.2-26.9 5.9-41.2 8 4.9-7.7 9.8-15.6 14.4-23.7 4.6-8 8.9-16.1 13-24.1zm-101.4 106.7c-9.3-9.6-18.6-20.3-27.8-32 9 .4 18.2.7 27.5.7 9.4 0 18.7-.2 27.8-.7-9 11.7-18.3 22.4-27.5 32zm-74.4-58.9c-14.2-2.1-27.9-4.7-41-7.9 3.7-12.9 8.3-26.2 13.5-39.5 4.1 8 8.4 16 13.1 24s9.5 15.8 14.4 23.4zm73.9-208.1c9.3 9.6 18.6 20.3 27.8 32-9-.4-18.2-.7-27.5-.7-9.4 0-18.7.2-27.8.7 9-11.7 18.3-22.4 27.5-32zm-74 58.9c-4.9 7.7-9.8 15.6-14.4 23.7-4.6 8-8.9 16-13 24-5.4-13.4-10-26.8-13.8-39.8 13.1-3.1 26.9-5.8 41.2-7.9zm-90.5 125.2c-35.4-15.1-58.3-34.9-58.3-50.6s22.9-35.6 58.3-50.6c8.6-3.7 18-7 27.7-10.1 5.7 19.6 13.2 40 22.5 60.9-9.2 20.8-16.6 41.1-22.2 60.6-9.9-3.1-19.3-6.5-28-10.2zm53.8 142.9c-13.6-7.8-19.5-37.5-14.9-75.7 1.1-9.4 2.9-19.3 5.1-29.4 19.6 4.8 41 8.5 63.5 10.9 13.5 18.5 27.5 35.3 41.6 50-32.6 30.3-63.2 46.9-84 46.9-4.5-.1-8.3-1-11.3-2.7zm237.2-76.2c4.7 38.2-1.1 67.9-14.6 75.8-3 1.8-6.9 2.6-11.5 2.6-20.7 0-51.4-16.5-84-46.6 14-14.7 28-31.4 41.3-49.9 22.6-2.4 44-6.1 63.6-11 2.3 10.1 4.1 19.8 5.2 29.1zm38.5-66.7c-8.6 3.7-18 7-27.7 10.1-5.7-19.6-13.2-40-22.5-60.9 9.2-20.8 16.6-41.1 22.2-60.6 9.9 3.1 19.3 6.5 28.1 10.2 35.4 15.1 58.3 34.9 58.3 50.6-.1 15.7-23 35.6-58.4 50.6z" />
                                                        <circle cx="420.9" cy="296.5" r="45.7" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-brand__item">
                                        <div class="tp-brand__logo">
                                            <a href="#">
                                                <svg height="70" viewBox=".15 .13 799.7 479.69" width="2500"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m400 .13c-106.63 0-173.27 53.3-199.93 159.89 39.99-53.3 86.64-73.28 139.95-59.96 30.42 7.6 52.16 29.67 76.23 54.09 39.2 39.78 84.57 85.82 183.68 85.82 106.62 0 173.27-53.3 199.92-159.9-39.98 53.3-86.63 73.29-139.95 59.97-30.41-7.6-52.15-29.67-76.22-54.09-39.2-39.78-84.58-85.82-183.68-85.82zm-199.93 239.84c-106.62 0-173.27 53.3-199.92 159.9 39.98-53.3 86.63-73.29 139.95-59.96 30.41 7.61 52.15 29.67 76.22 54.08 39.2 39.78 84.58 85.83 183.68 85.83 106.63 0 173.27-53.3 199.93-159.9-39.99 53.3-86.64 73.29-139.95 59.96-30.42-7.59-52.16-29.67-76.23-54.08-39.2-39.78-84.57-85.83-183.68-85.83z"
                                                        fill="#06b6d4" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-brand__item">
                                        <div class="tp-brand__logo">
                                            <a href="#">

                                                <svg viewBox="0 0 240 234" xmlns="http://www.w3.org/2000/svg"
                                                    width="2500" height="70">
                                                    <path
                                                        d="M42.5 0h155C221 0 240 19 240 42.5v149c0 23.5-19 42.5-42.5 42.5h-155C19 234 0 215 0 191.5v-149C0 19 19 0 42.5 0z"
                                                        fill="#001e36" />
                                                    <g fill="#31a8ff">
                                                        <path
                                                            d="M54 164.1V61.2c0-.7.3-1.1 1-1.1 1.7 0 3.3 0 5.6-.1 2.4-.1 4.9-.1 7.6-.2s5.6-.1 8.7-.2 6.1-.1 9.1-.1c8.2 0 15 1 20.6 3.1 5 1.7 9.6 4.5 13.4 8.2 3.2 3.2 5.7 7.1 7.3 11.4 1.5 4.2 2.3 8.5 2.3 13 0 8.6-2 15.7-6 21.3s-9.6 9.8-16.1 12.2c-6.8 2.5-14.3 3.4-22.5 3.4-2.4 0-4 0-5-.1s-2.4-.1-4.3-.1V164c.1.7-.4 1.3-1.1 1.4H55.2c-.8 0-1.2-.4-1.2-1.3zm21.8-84.7V113c1.4.1 2.7.2 3.9.2H85c3.9 0 7.8-.6 11.5-1.8 3.2-.9 6-2.8 8.2-5.3 2.1-2.5 3.1-5.9 3.1-10.3.1-3.1-.7-6.2-2.3-8.9-1.7-2.6-4.1-4.6-7-5.7-3.7-1.5-7.7-2.1-11.8-2-2.6 0-4.9 0-6.8.1-2-.1-3.4 0-4.1.1zM192 106.9c-3-1.6-6.2-2.7-9.6-3.4-3.7-.8-7.4-1.3-11.2-1.3-2-.1-4.1.2-6 .7-1.3.3-2.4 1-3.1 2-.5.8-.8 1.8-.8 2.7s.4 1.8 1 2.6c.9 1.1 2.1 2 3.4 2.7 2.3 1.2 4.7 2.3 7.1 3.3 5.4 1.8 10.6 4.3 15.4 7.3 3.3 2.1 6 4.9 7.9 8.3 1.6 3.2 2.4 6.7 2.3 10.3.1 4.7-1.3 9.4-3.9 13.3-2.8 4-6.7 7.1-11.2 8.9-4.9 2.1-10.9 3.2-18.1 3.2-4.6 0-9.1-.4-13.6-1.3-3.5-.6-7-1.7-10.2-3.2-.7-.4-1.2-1.1-1.1-1.9v-17.4c0-.3.1-.7.4-.9s.6-.1.9.1c3.9 2.3 8 3.9 12.4 4.9 3.8 1 7.8 1.5 11.8 1.5 3.8 0 6.5-.5 8.3-1.4 1.6-.7 2.7-2.4 2.7-4.2 0-1.4-.8-2.7-2.4-4s-4.9-2.8-9.8-4.7c-5.1-1.8-9.8-4.2-14.2-7.2-3.1-2.2-5.7-5.1-7.6-8.5-1.6-3.2-2.4-6.7-2.3-10.2 0-4.3 1.2-8.4 3.4-12.1 2.5-4 6.2-7.2 10.5-9.2 4.7-2.4 10.6-3.5 17.7-3.5 4.1 0 8.3.3 12.4.9 3 .4 5.9 1.2 8.6 2.3.4.1.8.5 1 .9.1.4.2.8.2 1.2v16.3c0 .4-.2.8-.5 1-.9.2-1.4.2-1.8 0z" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-brand__item">
                                        <div class="tp-brand__logo">
                                            <a href="#">
                                                <svg width="113" height="70" viewBox="0 0 256 221"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    preserveAspectRatio="xMinYMin meet">
                                                    <path d="M204.8 0H256L128 220.8 0 0h97.92L128 51.2 157.44 0h47.36z"
                                                        fill="#41B883" />
                                                    <path d="M0 0l128 220.8L256 0h-51.2L128 132.48 50.56 0H0z"
                                                        fill="#41B883" />
                                                    <path d="M50.56 0L128 133.12 204.8 0h-47.36L128 51.2 97.92 0H50.56z"
                                                        fill="#35495E" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-brand__item">
                                        <div class="tp-brand__logo">
                                            <a href="#">
                                                <svg viewBox="0.1 0.3 799.91 366.73" xmlns="http://www.w3.org/2000/svg"
                                                    width="2500" height="60">
                                                    <path d="M622.25.3l177.76 176.9-177.76 176.9L444.5 177.2z"
                                                        fill="#77c1d2" />
                                                    <path d="M177.86.3l368.51 366.73H190.86L.1 177.2z" fill="#2d3441" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-brand area end  -->

    <!-- tp-services-area start  -->
    <div class="tp-service__area fix pt-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-services__title-box mb-15">
                        <span class="tp-section-title-pre mb-30">Services</span>
                        <div class="tp-section-title-wrap d-md-flex align-items-center justify-content-between">
                            <h3 class="tp-section-title">
                                Most Popular Services<br><span><i>Providing</i></span>
                            </h3>
                            <a href="about" class="tp-btn-primary">
                                <span>More about us</span>
                                <i class="far fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 gx-0">
                    <div class="tp-service-acordian mb-30">
                        <div class="container">
                            <div class="row counter-row">
                                <div class="col-12">
                                    <div class="tp-accordion">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button p-relative collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        <span class="accordion-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="57"
                                                                height="57" viewBox="83.911 298.53 426.962 243.838">
                                                                <path
                                                                    d="M474.843 516.208V309.886c0-6.418-4.938-11.355-11.354-11.355H131.791c-6.417 0-11.354 4.938-11.354 11.355v206.816H83.911v13.326c4.938 7.896 31.098 12.34 40.969 12.34h345.024c10.366 0 36.526-4.936 40.969-12.34v-13.326h-36.03v-.494zM134.26 313.341h326.762v203.361H134.26V313.341z"
                                                                    fill="white" />
                                                            </svg>

                                                        </span>
                                                        Web Development
                                                        <span class="accordion-num-count"></span>
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>A strong online presence starts with a professionally
                                                            developed website. Our web development services cover
                                                            everything from sleek, responsive designs to advanced
                                                            functionalities, including Web 3 technologies. We specialize
                                                            in creating dynamic websites that are not only visually
                                                            appealing but also optimized for performance and security.
                                                            With a keen understanding of the latest trends in Web 3, we
                                                            can integrate decentralized features and blockchain
                                                            technology to help you stay ahead in the evolving digital
                                                            landscape. Let us build a website that enhances your brand’s
                                                            visibility and provides an exceptional user experience.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button p-relative" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        <span class="accordion-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="57"
                                                                height="57" viewBox="1.008 18.463 180 160.509">
                                                                <title>Slice 1</title>
                                                                <path fill="#F4A93F"
                                                                    d="M80.95 76l19.202 33.45-24.243-.872L80.95 76z" />
                                                                <path fill="#F4A83E"
                                                                    d="M90.16 82.4l14.234 27.05-29.091-.872L90.16 82.4z" />
                                                                <path fill="#E88634"
                                                                    d="M87.489 87.038L99.94 109.45l-24.333-.243 11.882-22.169z" />
                                                                <path fill="#F8CA51"
                                                                    d="M100.546 84.758l3.849 24.692L75 109.152l25.546-24.394z" />
                                                                <path fill="#F8CA51"
                                                                    d="M90.16 117l14.555-7.848L75 108.875 90.16 117z" />
                                                                <path fill="#E88634"
                                                                    d="M1.008 98C1.643 118.712 41.69 135 91 135v-8.002C51.309 126.8 9.675 114.643 9.008 98h-8z" />
                                                                <path fill="#F9CB52"
                                                                    d="M135.523 21.782c-18.254-9.806-52.383 16.733-77.04 59.436l6.93 4.001c20.016-34.275 51.363-64.252 66.109-56.508l4.001-6.929z" />
                                                                <path fill="#E88634"
                                                                    d="M1.008 98C1.643 77.288 41.69 61 91 61v8.002C51.309 69.2 9.675 81.358 9.008 98h-8z" />
                                                                <path fill="#F4A73E"
                                                                    d="M46.043 20c-17.62 10.906-11.702 53.732 12.953 96.436l6.93-4.002C46.251 77.963 35.964 35.827 50.043 26.93l-4-6.93z" />
                                                                <path fill="#F9CB52"
                                                                    d="M46.043 176.436C28.423 165.53 34.34 122.703 58.996 80l6.93 4.001c-19.675 34.472-29.962 76.608-15.883 85.506l-4 6.929z" />
                                                                <path fill="#F4A73E"
                                                                    d="M45 20.5c18.255-9.806 52.384 16.732 77.04 59.436l-6.931 4C95.093 49.662 63.746 19.687 49 27.43l-4-6.93z" />
                                                                <path fill="#E88634"
                                                                    d="M181 98c-.635-20.712-40.684-37-89.992-37v8.002C130.698 69.2 172.333 81.358 173 98h8z" />
                                                                <path fill="#F9CB52"
                                                                    d="M45.241 176.501c.107.065.214.129.322.19 18.143 10.476 52.623-16.146 77.476-59.191l-6.893-4.066c-20.174 34.58-51.899 64.808-66.501 56.377a9.81 9.81 0 0 1-.437-.267l-3.967 6.957z" />
                                                                <path fill="#F4A73E"
                                                                    d="M136.036 175.938C117.779 185.738 83.653 159.2 59 116.5l-.26-.45 6.836-4.159c19.984 34.502 51.585 64.862 66.431 57.133l4.029 6.914z" />
                                                                <path fill="#E88634"
                                                                    d="M181 97c.005.166.008.333.008.5 0 20.95-40.295 37.5-90 37.5v-8.002c40.012-.198 82-12.555 82-29.403a9.8 9.8 0 0 0-.018-.595H181z" />
                                                                <path fill="#F4A73E"
                                                                    d="M135.005 176.43c17.608-10.914 11.688-53.734-12.962-96.43l-.439-.76-7.022 3.835.047.082c19.952 34.558 30.521 77.214 16.45 86.298l3.926 6.975z" />
                                                                <path fill="#F9CB52"
                                                                    d="M135.48 21.282c17.619 10.906 11.701 53.733-12.953 96.436l-6.93-4.001c19.676-34.472 29.961-76.608 15.883-85.506l4-6.929z" />
                                                            </svg>
                                                        </span>
                                                        Mobile App Development
                                                        <span class="accordion-num-count"></span>
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            In today’s fast-paced digital world, a well-designed mobile
                                                            app can set your business apart from the competition. Our
                                                            app development service provides customized solutions
                                                            tailored to meet your unique needs. From concept to launch,
                                                            our experienced team ensures that your app is not only
                                                            functional but also user-friendly and engaging.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button p-relative collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        <span class="accordion-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="57"
                                                                height="57" viewBox="5.17 5.167 289.66 284.665">
                                                                <g transform="matrix(.96553 0 0 .96497 5.17 5.167)">
                                                                    <path fill="#1a1a1a" d="M0 0h300v294.999H0z" />
                                                                    <path
                                                                        d="M0 0v294.999h300V0H0zm107.094 86.656c15.778 0 27.01 3.696 34.562 10.219 7.219 6.164 12.094 16.663 12.094 28.625s-3.691 21.773-10.407 28.656c-8.729 8.881-18.893 14.116-36.25 14.843-4.795.201-9.25.251-9.25.251v38.906H72.5v-121s18.98-.5 34.594-.5zm-2.532 19.188c-3.706-.027-6.718.094-6.718.094v41.781c2.754.268 4.481.143 8.562.094 13.598-.163 22-8.433 22-20.937 0-11.234-6.915-20.46-19.969-20.938-1.3-.048-2.639-.086-3.875-.094zm93.907 8.437c10.406 0 18.713 3.42 24.187 6.188v20.375c-4.019-2.218-15.616-7.156-23.281-7.156-6.758 0-10.563 2.762-10.563 7.375 0 4.248 3.453 6.464 14.407 10.344 16.976 5.908 24.1 14.58 24.28 27.875 0 16.805-12.94 30.187-38.687 29.375-8.835-.277-18.651-3.78-25.407-7.469v-20.125h.032c5.109 3.135 17.157 7.813 25.375 7.813 8.396 0 11.844-2.95 11.844-7.563 0-4.619-2.719-9.461-13.124-12.969-18.44-6.279-25.56-13.792-25.376-24.312 0-16.992 14.222-29.751 36.313-29.751z" />
                                                                    <radialGradient id="a" cx="-1211.987" cy="1560.92"
                                                                        r="91.001"
                                                                        gradientTransform="matrix(3.0597 0 0 -3.0831 3857.238 4812.413)"
                                                                        gradientUnits="userSpaceOnUse">
                                                                        <stop offset=".231" stop-color="#419af2" />
                                                                        <stop offset=".555" stop-color="#096cd0" />
                                                                        <stop offset="1" stop-color="#003e7f" />
                                                                    </radialGradient>
                                                                    <path
                                                                        d="M0 0v294.999h300V0H0zm107.094 82.656c15.778 0 27.01 3.696 34.562 10.219 7.219 6.164 12.094 16.663 12.094 28.625s-3.691 21.773-10.407 28.656c-8.729 8.881-18.893 14.117-36.25 14.844-4.795.201-9.25.25-9.25.25v38.907H72.5V83.156s18.98-.5 34.594-.5zm-2.532 19.188c-3.706-.027-6.718.094-6.718.094v41.781c2.754.268 4.481.143 8.562.094 13.598-.163 22-8.432 22-20.938 0-11.234-6.915-20.459-19.969-20.937-1.3-.048-2.639-.086-3.875-.094zm93.907 8.437c10.406 0 18.713 3.42 24.187 6.188v20.375c-4.019-2.218-15.616-7.156-23.281-7.156-6.758 0-10.563 2.762-10.563 7.375 0 4.248 3.453 6.464 14.407 10.343 16.976 5.908 24.1 14.58 24.28 27.876 0 16.804-12.94 30.185-38.687 29.375-8.835-.278-18.651-3.781-25.407-7.469v-20.125h.032c5.109 3.134 17.157 7.812 25.375 7.812 8.396 0 11.844-2.949 11.844-7.563 0-4.619-2.719-9.46-13.124-12.968-18.44-6.28-25.56-13.793-25.376-24.313 0-16.991 14.222-29.75 36.313-29.75z"
                                                                        fill="url(#a)" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        Graphic Design
                                                        <span class="accordion-num-count"></span>
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>First impressions matter, and great design can make all the
                                                            difference. Our graphic design services encompass a wide
                                                            range of needs, from logo creation and branding to marketing
                                                            materials and digital assets. We combine creativity with
                                                            strategic thinking to deliver designs that capture your
                                                            brand’s essence and communicate your message effectively.
                                                            Our goal is to create visually stunning graphics that
                                                            resonate with your audience and elevate your brand’s
                                                            identity. Whether you need eye-catching visuals for print or
                                                            digital platforms, our design team is here to bring your
                                                            vision to life.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button p-relative collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">
                                                        <span class="accordion-icon">
                                                            <svg width="54" height="54" viewBox="0 0 54 54" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <mask id="mask0_1_1918" style="mask-type:luminance"
                                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="54"
                                                                    height="54">
                                                                    <path d="M0 0H54V54H0V0Z" fill="currentColor">
                                                                    </path>
                                                                </mask>
                                                                <g mask="url(#mask0_1_1918)">
                                                                    <path
                                                                        d="M32.6953 51.8904H12.6562C6.83132 51.8904 2.10938 47.1684 2.10938 41.3435V12.656C2.10938 6.83107 6.83132 2.10913 12.6562 2.10913H41.3438C47.1687 2.10913 51.8906 6.83107 51.8906 12.656V32.8533"
                                                                        stroke="white" stroke-width="3"
                                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M22.043 13.2891H41.3438H22.043Z"
                                                                        fill="currentColor"></path>
                                                                    <path d="M22.043 13.2891H41.3438"
                                                                        stroke="currentColor" stroke-width="3"
                                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M12.6562 21.7266H41.3438H12.6562Z"
                                                                        fill="currentColor"></path>
                                                                    <path d="M12.6562 21.7266H41.3438"
                                                                        stroke="currentColor" stroke-width="3"
                                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M12.6562 30.1641H20.25H12.6562Z"
                                                                        fill="currentColor"></path>
                                                                    <path d="M12.6562 30.1641H20.25"
                                                                        stroke="currentColor" stroke-width="3"
                                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M10.5469 13.0781C10.5469 14.5343 11.7274 15.7148 13.1836 15.7148C14.6398 15.7148 15.8203 14.5343 15.8203 13.0781C15.8203 11.6218 14.6398 10.4414 13.1836 10.4414C11.7274 10.4414 10.5469 11.6218 10.5469 13.0781Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M50.2534 50.2534C52.4364 48.0704 52.4364 44.5312 50.2534 42.3482L42.8591 34.9539C41.0237 33.1183 38.6858 31.8673 36.1403 31.3587L30.1641 30.164L31.3586 36.1404C31.8674 38.6857 33.1185 41.0235 34.9539 42.8591L42.3482 50.2534C44.5312 52.4364 48.0704 52.4364 50.2534 50.2534Z"
                                                                        stroke="white" stroke-width="3"
                                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        Writing
                                                        <span class="accordion-num-count"></span>
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Compelling content is key to engaging your audience and
                                                            driving success. Our writing services cover a broad
                                                            spectrum, including website content, blog posts, marketing
                                                            copy, and more. We take the time to understand your brand
                                                            and your goals to create content that is not only
                                                            informative but also persuasive and aligned with your voice.
                                                            From crafting attention-grabbing headlines to developing
                                                            in-depth articles, we ensure that every piece of content is
                                                            polished, professional, and impactful. Let us help you tell
                                                            your story in a way that captivates and converts.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button p-relative collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                        aria-expanded="false" aria-controls="collapseFive">
                                                        <span class="accordion-icon">
                                                            <svg width="45" height="51" viewbox="0 0 45 51" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M43.9748 20.5868H9.99084L42.6328 11.131C42.8864 11.0574 43.1005 10.8858 43.2281 10.6547C43.3557 10.4232 43.3861 10.1508 43.3125 9.89713L41.6044 4.00033C40.9219 1.64511 38.7289 0 36.2714 0C35.7535 0 35.2375 0.0735397 34.7372 0.218285L4.08976 9.09636C2.67227 9.50686 1.49758 10.4493 0.781248 11.7492C0.0653054 13.0492 -0.102785 14.5461 0.307714 15.9632L1.97656 21.7242V45.4565C1.97656 48.5133 4.46329 51 7.51967 51H19.4891C20.0393 51 20.4852 50.5541 20.4852 50.0039C20.4852 49.4537 20.0393 49.0078 19.4891 49.0078H7.52006C5.56172 49.0078 3.96875 47.4148 3.96875 45.4565V31.9011H9.07178H9.07412H9.07606H16.8767H16.8791H16.8814H24.6821H24.6844H24.6867H32.4874H32.4897H32.4917H42.9787V45.4565C42.9787 47.4148 41.3857 49.0078 39.4274 49.0078H27.4579C26.9081 49.0078 26.4618 49.4537 26.4618 50.0039C26.4618 50.5541 26.9081 51 27.4579 51H39.4274C42.4841 51 44.9709 48.5133 44.9709 45.4565V21.5829C44.9709 21.0328 44.5249 20.5868 43.9748 20.5868ZM26.4104 29.9089L30.6427 22.579H36.1473L31.9154 29.9089H26.4104ZM18.6051 29.9089L22.8373 22.579H28.3419L24.1101 29.9089H18.6051ZM10.8002 29.9089L15.032 22.579H20.537L16.3048 29.9089H10.8002ZM14.5036 17.0137L7.41656 10.2068L12.7266 8.66874C12.7639 8.72321 12.8075 8.77457 12.8573 8.82243L19.9444 15.6293L14.6343 17.1674C14.597 17.113 14.553 17.0612 14.5036 17.0137ZM27.8513 4.47892L34.9383 11.2858L29.6283 12.8239C29.5909 12.7695 29.5473 12.7177 29.4975 12.6702L22.4105 5.86333L27.7205 4.32523C27.7579 4.3797 27.8015 4.43106 27.8513 4.47892ZM20.3541 6.65087L27.4412 13.4574L22.1311 14.9959C22.0938 14.9414 22.0502 14.8897 22.0004 14.8422L14.9133 8.03529L20.2234 6.49718C20.2611 6.55126 20.3047 6.60301 20.3541 6.65087ZM35.2916 2.13187C35.6115 2.03927 35.941 1.99219 36.2714 1.99219C37.8476 1.99219 39.2534 3.04587 39.6908 4.55479L41.1219 9.49441L37.1254 10.652C37.0877 10.5975 37.0441 10.5461 36.9943 10.4983L29.9077 3.69177L35.2916 2.13187ZM2.52636 12.7103C2.98549 11.8765 3.73762 11.2726 4.64422 11.0099L5.22943 10.8403C5.26717 10.8948 5.31075 10.9465 5.36017 10.994L12.4472 17.8009L3.65241 20.3487L2.2213 15.4091C1.95866 14.5029 2.06722 13.5445 2.52636 12.7103ZM3.96875 22.579H12.7317L8.49981 29.9089H3.96875V22.579ZM34.2158 29.9089L38.4476 22.579H42.9787V29.9089H34.2158Z"
                                                                    fill="currentColor"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M30.3616 40.3531C30.3616 39.9971 30.1717 39.6683 29.8635 39.4905L21.1123 34.4381C20.8041 34.2602 20.4244 34.2602 20.1162 34.4381C19.808 34.6159 19.6182 34.9447 19.6182 35.3007V45.4056C19.6182 45.7612 19.808 46.09 20.1162 46.2678C20.2703 46.3569 20.4423 46.4017 20.6143 46.4017C20.7862 46.4017 20.9582 46.3569 21.1123 46.2678L29.8635 41.2158C30.1717 41.038 30.3616 40.7092 30.3616 40.3531ZM21.6104 43.6803V37.0259L27.3733 40.3531L21.6104 43.6803Z"
                                                                    fill="currentColor"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M23.4736 49.0078C22.925 49.0078 22.4775 49.4553 22.4775 50.0039C22.4775 50.5525 22.925 51 23.4736 51C24.0227 51 24.4697 50.5525 24.4697 50.0039C24.4697 49.4553 24.0227 49.0078 23.4736 49.0078Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        Video Production.
                                                        <span class="accordion-num-count"></span>
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Whether it’s crafting a striking brand identity, designing
                                                            immersive digital experiences, or developing strategic
                                                            marketing campaigns, we approach every project with
                                                            creativity, precision, and passion.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="tp-services__thumb ml-30">
                        <img src="assets/img/services/services-1-1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-services-area end  -->

    <!-- tp-fun fact-area start  -->
    <div class="tp-funfact__area fix tp-funfact__1 p-relative pt-75">
        <div class="tp-funfact__shape">
            <img src="assets/img/funfact/funfact-shape-1-1.png" alt="">
        </div>
        <div class="tp-funfact__box tp-funfact__bg pt-55 pb-35" data-background="assets/img/funfact/funfact-bg-1-1.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center tp-funfact__title-box tp-cursor-point-area mb-110 p-relative">
                            <h3 class="tp-section-title tp-funfact-title tp-split__text tp-split__in-right">
                                Let’s Work <span>Together</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="tp-funfact__wrap">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="text-center tp-funfact__item wow tpfadeUp" data-wow-duration=".9s"
                                data-wow-delay=".1s">
                                <h3 class="tp-funfact__number">
                                    <b class="purecounter" data-purecounter-duration="1" data-purecounter-end="5">5</b>+
                                </h3>
                                <div class="tp-funfact__text">
                                    <span>Business Award </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="text-center tp-funfact__item wow tpfadeUp" data-wow-duration=".9s"
                                data-wow-delay=".3s">
                                <h3 class="tp-funfact__number">
                                    <b class="purecounter" data-purecounter-duration="1"
                                        data-purecounter-end="500">86</b>+
                                </h3>
                                <div class="tp-funfact__text">
                                    <span>Created projects</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="text-center tp-funfact__item wow tpfadeUp" data-wow-duration=".9s"
                                data-wow-delay=".5s">
                                <h3 class="tp-funfact__number">
                                    <b class="purecounter" data-purecounter-duration="1"
                                        data-purecounter-end="2">2</b>67+
                                </h3>
                                <div class="tp-funfact__text">
                                    <span>Awesome clients</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="text-center tp-funfact__item wow tpfadeUp" data-wow-duration=".9s"
                                data-wow-delay=".7s">
                                <h3 class="tp-funfact__number">
                                    <b class="purecounter" data-purecounter-duration="1"
                                        data-purecounter-end="10">10</b>+
                                </h3>
                                <div class="tp-funfact__text">
                                    <span>Team members</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-fun fact-area end  -->

    <!-- tp-project-area start  -->
    <div class="tp-project__area tp-project__1 p-relative pt-135 pb-135">
        <div class="tp-project__shape">
            <img src="assets/img/project/project-bg-shape.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-project__title-box">
                        <span class="tp-section-title-pre mb-25">
                            Created Projects
                        </span>
                        <div class="tp-section-title-wrap d-flex align-items-center justify-content-between">
                            <h3 class="mb-0 tp-section-title">
                                Awesome Projects <br><span> From Team </span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-project__wrap">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 g-5">
                        <div class="tp-project__item p-relative wow tpfadeUp" data-wow-duration=".9s"
                            data-wow-delay=".1s">
                            <div class="tp-project__thumb-content">
                                <div class="tp-project__thumb">
                                    <img src="assets/img/project/koo6.jpeg" alt="">
                                    <div class="tp-project__icon">
                                        <a href="#">
                                            <span>
                                                <svg width="189" height="189" viewbox="0 0 189 189" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 183L173.812 15.1875M6 4H185V183" stroke="currentColor"
                                                        stroke-width="8" stroke-linecap="square"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-project__content">
                                <h3 class="tp-project__title">
                                    <a href="#"> Mobile App </a>
                                </h3>
                                <span class="tp-project__categories">P2P </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 g-5">
                        <div class="tp-project__item p-relative wow tpfadeUp" data-wow-duration=".9s"
                            data-wow-delay=".3s">
                            <div class="tp-project__thumb-content">
                                <div class="tp-project__thumb">
                                    <img src="assets/img/project/csadiproject_front.png" class="img-fluid" alt="">
                                    <div class="tp-project__icon">
                                        <a href="#">
                                            <span>
                                                <svg width="189" height="189" viewbox="0 0 189 189" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 183L173.812 15.1875M6 4H185V183" stroke="currentColor"
                                                        stroke-width="8" stroke-linecap="square"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-project__content">
                                <h3 class="tp-project__title">
                                    <a href="#">Crowd Funding</a>
                                </h3>
                                <span class="tp-project__categories">Helping Kids in the rural areas out</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 g-5">
                        <div class="tp-project__item p-relative wow tpfadeUp" data-wow-duration=".9s"
                            data-wow-delay=".5s">
                            <div class="tp-project__thumb-content">
                                <div class="tp-project__thumb">
                                    <img src="assets/img/project/giftie.jpeg" alt="">
                                    <div class="tp-project__icon">
                                        <a href="#">
                                            <span>
                                                <svg width="189" height="189" viewbox="0 0 189 189" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 183L173.812 15.1875M6 4H185V183" stroke="currentColor"
                                                        stroke-width="8" stroke-linecap="square"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-project__content">
                                <h3 class="tp-project__title">
                                    <a href="#">Mobile App . Shopping</a>
                                </h3>
                                <span class="tp-project__categories">Ecommerce </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 g-5">
                        <div class="tp-project__item p-relative wow tpfadeUp" data-wow-duration=".9s"
                            data-wow-delay=".7s">
                            <div class="tp-project__thumb-content">
                                <div class="tp-project__thumb">
                                    <img src="assets/img/project/kobo.jpeg" alt="">
                                    <div class="tp-project__icon">
                                        <a href="#">
                                            <span>
                                                <svg width="189" height="189" viewbox="0 0 189 189" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 183L173.812 15.1875M6 4H185V183" stroke="currentColor"
                                                        stroke-width="8" stroke-linecap="square"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-project__content">
                                <h3 class="tp-project__title">
                                    <a href="#">Finance </a>
                                </h3>
                                <span class="tp-project__categories">Fin Tech app for giftcard and crypto </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 g-5 order-sm-0">
                        <div class="tp-project__action-wrap wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".8s">
                            <div class="tp-project__action tp-btn__bounce">
                                <a href="mailto:{{config('app.app_mail')}}" class="tp-project__more-title">MAIL US
                                    NOW</a>
                                <span class="tp-project__more-shape">
                                    <svg width="613" height="464" viewbox="0 0 613 464" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.2" filter="url(#filter0_f_1_1987)">
                                            <path
                                                d="M287.786 320.717C144.372 403.344 20.8576 426.133 91.0897 332.844C154.316 248.86 314.645 137.199 424.431 91.9876C537.988 45.223 590.839 76.4303 486.141 177.395C425.911 235.478 364.613 276.453 287.786 320.717Z"
                                                fill="#FF3D00"></path>
                                        </g>
                                        <defs>
                                            <filter id="filter0_f_1_1987" x="0.808594" y="0.724915" width="611.758"
                                                height="462.667" filterunits="userSpaceOnUse"
                                                color-interpolation-filters="sRGB">
                                                <feflood flood-opacity="0" result="BackgroundImageFix"></feflood>
                                                <feblend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                    result="shape"></feblend>
                                                <fegaussianblur stddeviation="35"
                                                    result="effect1_foregroundBlur_1_1987"></fegaussianblur>
                                            </filter>
                                        </defs>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 g-5">
                        <div class="tp-project__item p-relative wow tpfadeUp" data-wow-duration=".9s"
                            data-wow-delay=".9s">
                            <div class="tp-project__thumb-content">
                                <div class="tp-project__thumb">
                                    <img src="assets/img/project/gf2.png" alt="">
                                    <div class="tp-project__icon">
                                        <a href="#">
                                            <span>
                                                <svg width="189" height="189" viewbox="0 0 189 189" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 183L173.812 15.1875M6 4H185V183" stroke="currentColor"
                                                        stroke-width="8" stroke-linecap="square"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-project__content">
                                <h3 class="tp-project__title">
                                    <a href="#">Twice Profit Than Before</a>
                                </h3>
                                <span class="tp-project__categories">Marketing Plan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-project-area end  -->

    <!-- text slider area start -->
    <div class="pt-10 pb-20 tp-text__slider-area fix">
        <div class="tp-text__1-box">
            <div class="swiper-container tp-text__1-slider-active">
                <div class="swiper-wrapper slide-transtion">
                    <div class="swiper-slide">
                        <div class="tp-text__2-wrap">
                            <h3 class="tp-text__2-text">
                                DIGITAL MARKETING
                                <span>
                                    <svg width="42" height="46" viewbox="0 0 42 46" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M39.6697 10.1562L23.0583 0.551351C22.4323 0.190459 21.7224 0.000488281 20.9998 0.000488281C20.2772 0.000488281 19.5673 0.190459 18.9413 0.551351L2.32994 10.1562C1.71451 10.5124 1.2032 11.0237 0.846992 11.6391C0.490783 12.2545 0.302117 12.9526 0.299805 13.6637V32.3366C0.302117 33.0477 0.490783 33.7457 0.846992 34.3611C1.2032 34.9766 1.71451 35.4879 2.32994 35.8441L18.9413 45.4489C19.5673 45.8098 20.2772 45.9998 20.9998 45.9998C21.7224 45.9998 22.4323 45.8098 23.0583 45.4489L39.6697 35.8441C40.2851 35.4879 40.7964 34.9766 41.1526 34.3611C41.5088 33.7457 41.6975 33.0477 41.6998 32.3366V13.6637C41.6975 12.9526 41.5088 12.2545 41.1526 11.6391C40.7964 11.0237 40.2851 10.5124 39.6697 10.1562ZM3.09814 11.4833L19.7095 1.87922C20.102 1.6534 20.547 1.53455 20.9998 1.53455C21.4527 1.53455 21.8976 1.6534 22.2901 1.87922L38.9015 11.4833C39.191 11.651 39.4445 11.8743 39.6475 12.1403L29.4462 18.0436L22.2395 13.4367C21.8695 13.2012 21.44 13.0761 21.0013 13.0761C20.5627 13.0761 20.1332 13.2012 19.7632 13.4367L12.5565 18.0436L2.35524 12.1403C2.55732 11.8746 2.80976 11.6514 3.09814 11.4833ZM20.9998 31.5485L13.9848 27.3402L20.5835 23.1174C20.7074 23.0375 20.8517 22.995 20.999 22.995C21.1464 22.995 21.2907 23.0375 21.4146 23.1174L28.0148 27.341L20.9998 31.5485ZM28.6665 25.9365L22.2395 21.8241C21.8683 21.5895 21.4382 21.465 20.999 21.465C20.5599 21.465 20.1298 21.5895 19.7586 21.8241L13.3331 25.9365V19.3684L20.5866 14.7324C20.7099 14.6534 20.8533 14.6115 20.9998 14.6115C21.1463 14.6115 21.2897 14.6534 21.413 14.7324L28.6665 19.3684V25.9365ZM3.09814 34.517C2.71509 34.2958 2.39671 33.9781 2.17475 33.5956C1.95279 33.213 1.835 32.7789 1.83314 32.3366V13.6637C1.83314 13.6468 1.83314 13.6299 1.83314 13.6131L11.7998 19.3822V26.5122C11.801 26.9091 11.9044 27.2989 12.0998 27.6443C12.2953 27.9896 12.5764 28.2788 12.9161 28.4841L20.2331 32.8771V44.338C20.0512 44.2855 19.8755 44.213 19.7095 44.1218L3.09814 34.517ZM40.1665 32.3366C40.1646 32.7789 40.0468 33.213 39.8249 33.5956C39.6029 33.9781 39.2845 34.2958 38.9015 34.517L22.2901 44.121C22.1241 44.2122 21.9485 44.2847 21.7665 44.3372V32.8771L29.0835 28.4872C29.4232 28.2819 29.7043 27.9927 29.8998 27.6473C30.0953 27.302 30.1986 26.9121 30.1998 26.5153V19.3853L40.1665 13.6161C40.1665 13.633 40.1665 13.6499 40.1665 13.6667V32.3366Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-text__2-wrap">
                            <h3 class="tp-text__2-text">
                                WEB DEVELOPMENT
                                <span>
                                    <svg width="42" height="46" viewbox="0 0 42 46" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M39.6697 10.1562L23.0583 0.551351C22.4323 0.190459 21.7224 0.000488281 20.9998 0.000488281C20.2772 0.000488281 19.5673 0.190459 18.9413 0.551351L2.32994 10.1562C1.71451 10.5124 1.2032 11.0237 0.846992 11.6391C0.490783 12.2545 0.302117 12.9526 0.299805 13.6637V32.3366C0.302117 33.0477 0.490783 33.7457 0.846992 34.3611C1.2032 34.9766 1.71451 35.4879 2.32994 35.8441L18.9413 45.4489C19.5673 45.8098 20.2772 45.9998 20.9998 45.9998C21.7224 45.9998 22.4323 45.8098 23.0583 45.4489L39.6697 35.8441C40.2851 35.4879 40.7964 34.9766 41.1526 34.3611C41.5088 33.7457 41.6975 33.0477 41.6998 32.3366V13.6637C41.6975 12.9526 41.5088 12.2545 41.1526 11.6391C40.7964 11.0237 40.2851 10.5124 39.6697 10.1562ZM3.09814 11.4833L19.7095 1.87922C20.102 1.6534 20.547 1.53455 20.9998 1.53455C21.4527 1.53455 21.8976 1.6534 22.2901 1.87922L38.9015 11.4833C39.191 11.651 39.4445 11.8743 39.6475 12.1403L29.4462 18.0436L22.2395 13.4367C21.8695 13.2012 21.44 13.0761 21.0013 13.0761C20.5627 13.0761 20.1332 13.2012 19.7632 13.4367L12.5565 18.0436L2.35524 12.1403C2.55732 11.8746 2.80976 11.6514 3.09814 11.4833ZM20.9998 31.5485L13.9848 27.3402L20.5835 23.1174C20.7074 23.0375 20.8517 22.995 20.999 22.995C21.1464 22.995 21.2907 23.0375 21.4146 23.1174L28.0148 27.341L20.9998 31.5485ZM28.6665 25.9365L22.2395 21.8241C21.8683 21.5895 21.4382 21.465 20.999 21.465C20.5599 21.465 20.1298 21.5895 19.7586 21.8241L13.3331 25.9365V19.3684L20.5866 14.7324C20.7099 14.6534 20.8533 14.6115 20.9998 14.6115C21.1463 14.6115 21.2897 14.6534 21.413 14.7324L28.6665 19.3684V25.9365ZM3.09814 34.517C2.71509 34.2958 2.39671 33.9781 2.17475 33.5956C1.95279 33.213 1.835 32.7789 1.83314 32.3366V13.6637C1.83314 13.6468 1.83314 13.6299 1.83314 13.6131L11.7998 19.3822V26.5122C11.801 26.9091 11.9044 27.2989 12.0998 27.6443C12.2953 27.9896 12.5764 28.2788 12.9161 28.4841L20.2331 32.8771V44.338C20.0512 44.2855 19.8755 44.213 19.7095 44.1218L3.09814 34.517ZM40.1665 32.3366C40.1646 32.7789 40.0468 33.213 39.8249 33.5956C39.6029 33.9781 39.2845 34.2958 38.9015 34.517L22.2901 44.121C22.1241 44.2122 21.9485 44.2847 21.7665 44.3372V32.8771L29.0835 28.4872C29.4232 28.2819 29.7043 27.9927 29.8998 27.6473C30.0953 27.302 30.1986 26.9121 30.1998 26.5153V19.3853L40.1665 13.6161C40.1665 13.633 40.1665 13.6499 40.1665 13.6667V32.3366Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-text__2-wrap">
                            <h3 class="tp-text__2-text">
                                GRAPHICS DESIGN
                                <span>
                                    <svg width="42" height="46" viewbox="0 0 42 46" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M39.6697 10.1562L23.0583 0.551351C22.4323 0.190459 21.7224 0.000488281 20.9998 0.000488281C20.2772 0.000488281 19.5673 0.190459 18.9413 0.551351L2.32994 10.1562C1.71451 10.5124 1.2032 11.0237 0.846992 11.6391C0.490783 12.2545 0.302117 12.9526 0.299805 13.6637V32.3366C0.302117 33.0477 0.490783 33.7457 0.846992 34.3611C1.2032 34.9766 1.71451 35.4879 2.32994 35.8441L18.9413 45.4489C19.5673 45.8098 20.2772 45.9998 20.9998 45.9998C21.7224 45.9998 22.4323 45.8098 23.0583 45.4489L39.6697 35.8441C40.2851 35.4879 40.7964 34.9766 41.1526 34.3611C41.5088 33.7457 41.6975 33.0477 41.6998 32.3366V13.6637C41.6975 12.9526 41.5088 12.2545 41.1526 11.6391C40.7964 11.0237 40.2851 10.5124 39.6697 10.1562ZM3.09814 11.4833L19.7095 1.87922C20.102 1.6534 20.547 1.53455 20.9998 1.53455C21.4527 1.53455 21.8976 1.6534 22.2901 1.87922L38.9015 11.4833C39.191 11.651 39.4445 11.8743 39.6475 12.1403L29.4462 18.0436L22.2395 13.4367C21.8695 13.2012 21.44 13.0761 21.0013 13.0761C20.5627 13.0761 20.1332 13.2012 19.7632 13.4367L12.5565 18.0436L2.35524 12.1403C2.55732 11.8746 2.80976 11.6514 3.09814 11.4833ZM20.9998 31.5485L13.9848 27.3402L20.5835 23.1174C20.7074 23.0375 20.8517 22.995 20.999 22.995C21.1464 22.995 21.2907 23.0375 21.4146 23.1174L28.0148 27.341L20.9998 31.5485ZM28.6665 25.9365L22.2395 21.8241C21.8683 21.5895 21.4382 21.465 20.999 21.465C20.5599 21.465 20.1298 21.5895 19.7586 21.8241L13.3331 25.9365V19.3684L20.5866 14.7324C20.7099 14.6534 20.8533 14.6115 20.9998 14.6115C21.1463 14.6115 21.2897 14.6534 21.413 14.7324L28.6665 19.3684V25.9365ZM3.09814 34.517C2.71509 34.2958 2.39671 33.9781 2.17475 33.5956C1.95279 33.213 1.835 32.7789 1.83314 32.3366V13.6637C1.83314 13.6468 1.83314 13.6299 1.83314 13.6131L11.7998 19.3822V26.5122C11.801 26.9091 11.9044 27.2989 12.0998 27.6443C12.2953 27.9896 12.5764 28.2788 12.9161 28.4841L20.2331 32.8771V44.338C20.0512 44.2855 19.8755 44.213 19.7095 44.1218L3.09814 34.517ZM40.1665 32.3366C40.1646 32.7789 40.0468 33.213 39.8249 33.5956C39.6029 33.9781 39.2845 34.2958 38.9015 34.517L22.2901 44.121C22.1241 44.2122 21.9485 44.2847 21.7665 44.3372V32.8771L29.0835 28.4872C29.4232 28.2819 29.7043 27.9927 29.8998 27.6473C30.0953 27.302 30.1986 26.9121 30.1998 26.5153V19.3853L40.1665 13.6161C40.1665 13.633 40.1665 13.6499 40.1665 13.6667V32.3366Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-text__2-wrap">
                            <h3 class="tp-text__2-text">
                                APP DEVELOPMENT
                                <span>
                                    <svg width="42" height="46" viewbox="0 0 42 46" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M39.6697 10.1562L23.0583 0.551351C22.4323 0.190459 21.7224 0.000488281 20.9998 0.000488281C20.2772 0.000488281 19.5673 0.190459 18.9413 0.551351L2.32994 10.1562C1.71451 10.5124 1.2032 11.0237 0.846992 11.6391C0.490783 12.2545 0.302117 12.9526 0.299805 13.6637V32.3366C0.302117 33.0477 0.490783 33.7457 0.846992 34.3611C1.2032 34.9766 1.71451 35.4879 2.32994 35.8441L18.9413 45.4489C19.5673 45.8098 20.2772 45.9998 20.9998 45.9998C21.7224 45.9998 22.4323 45.8098 23.0583 45.4489L39.6697 35.8441C40.2851 35.4879 40.7964 34.9766 41.1526 34.3611C41.5088 33.7457 41.6975 33.0477 41.6998 32.3366V13.6637C41.6975 12.9526 41.5088 12.2545 41.1526 11.6391C40.7964 11.0237 40.2851 10.5124 39.6697 10.1562ZM3.09814 11.4833L19.7095 1.87922C20.102 1.6534 20.547 1.53455 20.9998 1.53455C21.4527 1.53455 21.8976 1.6534 22.2901 1.87922L38.9015 11.4833C39.191 11.651 39.4445 11.8743 39.6475 12.1403L29.4462 18.0436L22.2395 13.4367C21.8695 13.2012 21.44 13.0761 21.0013 13.0761C20.5627 13.0761 20.1332 13.2012 19.7632 13.4367L12.5565 18.0436L2.35524 12.1403C2.55732 11.8746 2.80976 11.6514 3.09814 11.4833ZM20.9998 31.5485L13.9848 27.3402L20.5835 23.1174C20.7074 23.0375 20.8517 22.995 20.999 22.995C21.1464 22.995 21.2907 23.0375 21.4146 23.1174L28.0148 27.341L20.9998 31.5485ZM28.6665 25.9365L22.2395 21.8241C21.8683 21.5895 21.4382 21.465 20.999 21.465C20.5599 21.465 20.1298 21.5895 19.7586 21.8241L13.3331 25.9365V19.3684L20.5866 14.7324C20.7099 14.6534 20.8533 14.6115 20.9998 14.6115C21.1463 14.6115 21.2897 14.6534 21.413 14.7324L28.6665 19.3684V25.9365ZM3.09814 34.517C2.71509 34.2958 2.39671 33.9781 2.17475 33.5956C1.95279 33.213 1.835 32.7789 1.83314 32.3366V13.6637C1.83314 13.6468 1.83314 13.6299 1.83314 13.6131L11.7998 19.3822V26.5122C11.801 26.9091 11.9044 27.2989 12.0998 27.6443C12.2953 27.9896 12.5764 28.2788 12.9161 28.4841L20.2331 32.8771V44.338C20.0512 44.2855 19.8755 44.213 19.7095 44.1218L3.09814 34.517ZM40.1665 32.3366C40.1646 32.7789 40.0468 33.213 39.8249 33.5956C39.6029 33.9781 39.2845 34.2958 38.9015 34.517L22.2901 44.121C22.1241 44.2122 21.9485 44.2847 21.7665 44.3372V32.8771L29.0835 28.4872C29.4232 28.2819 29.7043 27.9927 29.8998 27.6473C30.0953 27.302 30.1986 26.9121 30.1998 26.5153V19.3853L40.1665 13.6161C40.1665 13.633 40.1665 13.6499 40.1665 13.6667V32.3366Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-text__2-wrap">
                            <h3 class="tp-text__2-text">
                                VIDEO PRODUCTION
                                <span>
                                    <svg width="42" height="46" viewbox="0 0 42 46" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M39.6697 10.1562L23.0583 0.551351C22.4323 0.190459 21.7224 0.000488281 20.9998 0.000488281C20.2772 0.000488281 19.5673 0.190459 18.9413 0.551351L2.32994 10.1562C1.71451 10.5124 1.2032 11.0237 0.846992 11.6391C0.490783 12.2545 0.302117 12.9526 0.299805 13.6637V32.3366C0.302117 33.0477 0.490783 33.7457 0.846992 34.3611C1.2032 34.9766 1.71451 35.4879 2.32994 35.8441L18.9413 45.4489C19.5673 45.8098 20.2772 45.9998 20.9998 45.9998C21.7224 45.9998 22.4323 45.8098 23.0583 45.4489L39.6697 35.8441C40.2851 35.4879 40.7964 34.9766 41.1526 34.3611C41.5088 33.7457 41.6975 33.0477 41.6998 32.3366V13.6637C41.6975 12.9526 41.5088 12.2545 41.1526 11.6391C40.7964 11.0237 40.2851 10.5124 39.6697 10.1562ZM3.09814 11.4833L19.7095 1.87922C20.102 1.6534 20.547 1.53455 20.9998 1.53455C21.4527 1.53455 21.8976 1.6534 22.2901 1.87922L38.9015 11.4833C39.191 11.651 39.4445 11.8743 39.6475 12.1403L29.4462 18.0436L22.2395 13.4367C21.8695 13.2012 21.44 13.0761 21.0013 13.0761C20.5627 13.0761 20.1332 13.2012 19.7632 13.4367L12.5565 18.0436L2.35524 12.1403C2.55732 11.8746 2.80976 11.6514 3.09814 11.4833ZM20.9998 31.5485L13.9848 27.3402L20.5835 23.1174C20.7074 23.0375 20.8517 22.995 20.999 22.995C21.1464 22.995 21.2907 23.0375 21.4146 23.1174L28.0148 27.341L20.9998 31.5485ZM28.6665 25.9365L22.2395 21.8241C21.8683 21.5895 21.4382 21.465 20.999 21.465C20.5599 21.465 20.1298 21.5895 19.7586 21.8241L13.3331 25.9365V19.3684L20.5866 14.7324C20.7099 14.6534 20.8533 14.6115 20.9998 14.6115C21.1463 14.6115 21.2897 14.6534 21.413 14.7324L28.6665 19.3684V25.9365ZM3.09814 34.517C2.71509 34.2958 2.39671 33.9781 2.17475 33.5956C1.95279 33.213 1.835 32.7789 1.83314 32.3366V13.6637C1.83314 13.6468 1.83314 13.6299 1.83314 13.6131L11.7998 19.3822V26.5122C11.801 26.9091 11.9044 27.2989 12.0998 27.6443C12.2953 27.9896 12.5764 28.2788 12.9161 28.4841L20.2331 32.8771V44.338C20.0512 44.2855 19.8755 44.213 19.7095 44.1218L3.09814 34.517ZM40.1665 32.3366C40.1646 32.7789 40.0468 33.213 39.8249 33.5956C39.6029 33.9781 39.2845 34.2958 38.9015 34.517L22.2901 44.121C22.1241 44.2122 21.9485 44.2847 21.7665 44.3372V32.8771L29.0835 28.4872C29.4232 28.2819 29.7043 27.9927 29.8998 27.6473C30.0953 27.302 30.1986 26.9121 30.1998 26.5153V19.3853L40.1665 13.6161C40.1665 13.633 40.1665 13.6499 40.1665 13.6667V32.3366Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-text__2-wrap">
                            <h3 class="tp-text__2-text">
                                WRITING
                                <span>
                                    <svg width="42" height="46" viewbox="0 0 42 46" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M39.6697 10.1562L23.0583 0.551351C22.4323 0.190459 21.7224 0.000488281 20.9998 0.000488281C20.2772 0.000488281 19.5673 0.190459 18.9413 0.551351L2.32994 10.1562C1.71451 10.5124 1.2032 11.0237 0.846992 11.6391C0.490783 12.2545 0.302117 12.9526 0.299805 13.6637V32.3366C0.302117 33.0477 0.490783 33.7457 0.846992 34.3611C1.2032 34.9766 1.71451 35.4879 2.32994 35.8441L18.9413 45.4489C19.5673 45.8098 20.2772 45.9998 20.9998 45.9998C21.7224 45.9998 22.4323 45.8098 23.0583 45.4489L39.6697 35.8441C40.2851 35.4879 40.7964 34.9766 41.1526 34.3611C41.5088 33.7457 41.6975 33.0477 41.6998 32.3366V13.6637C41.6975 12.9526 41.5088 12.2545 41.1526 11.6391C40.7964 11.0237 40.2851 10.5124 39.6697 10.1562ZM3.09814 11.4833L19.7095 1.87922C20.102 1.6534 20.547 1.53455 20.9998 1.53455C21.4527 1.53455 21.8976 1.6534 22.2901 1.87922L38.9015 11.4833C39.191 11.651 39.4445 11.8743 39.6475 12.1403L29.4462 18.0436L22.2395 13.4367C21.8695 13.2012 21.44 13.0761 21.0013 13.0761C20.5627 13.0761 20.1332 13.2012 19.7632 13.4367L12.5565 18.0436L2.35524 12.1403C2.55732 11.8746 2.80976 11.6514 3.09814 11.4833ZM20.9998 31.5485L13.9848 27.3402L20.5835 23.1174C20.7074 23.0375 20.8517 22.995 20.999 22.995C21.1464 22.995 21.2907 23.0375 21.4146 23.1174L28.0148 27.341L20.9998 31.5485ZM28.6665 25.9365L22.2395 21.8241C21.8683 21.5895 21.4382 21.465 20.999 21.465C20.5599 21.465 20.1298 21.5895 19.7586 21.8241L13.3331 25.9365V19.3684L20.5866 14.7324C20.7099 14.6534 20.8533 14.6115 20.9998 14.6115C21.1463 14.6115 21.2897 14.6534 21.413 14.7324L28.6665 19.3684V25.9365ZM3.09814 34.517C2.71509 34.2958 2.39671 33.9781 2.17475 33.5956C1.95279 33.213 1.835 32.7789 1.83314 32.3366V13.6637C1.83314 13.6468 1.83314 13.6299 1.83314 13.6131L11.7998 19.3822V26.5122C11.801 26.9091 11.9044 27.2989 12.0998 27.6443C12.2953 27.9896 12.5764 28.2788 12.9161 28.4841L20.2331 32.8771V44.338C20.0512 44.2855 19.8755 44.213 19.7095 44.1218L3.09814 34.517ZM40.1665 32.3366C40.1646 32.7789 40.0468 33.213 39.8249 33.5956C39.6029 33.9781 39.2845 34.2958 38.9015 34.517L22.2901 44.121C22.1241 44.2122 21.9485 44.2847 21.7665 44.3372V32.8771L29.0835 28.4872C29.4232 28.2819 29.7043 27.9927 29.8998 27.6473C30.0953 27.302 30.1986 26.9121 30.1998 26.5153V19.3853L40.1665 13.6161C40.1665 13.633 40.1665 13.6499 40.1665 13.6667V32.3366Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-text__2-wrap">
                            <h3 class="tp-text__2-text">
                                GRAPHICS DESIGN
                                <span>
                                    <svg width="42" height="46" viewbox="0 0 42 46" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M39.6697 10.1562L23.0583 0.551351C22.4323 0.190459 21.7224 0.000488281 20.9998 0.000488281C20.2772 0.000488281 19.5673 0.190459 18.9413 0.551351L2.32994 10.1562C1.71451 10.5124 1.2032 11.0237 0.846992 11.6391C0.490783 12.2545 0.302117 12.9526 0.299805 13.6637V32.3366C0.302117 33.0477 0.490783 33.7457 0.846992 34.3611C1.2032 34.9766 1.71451 35.4879 2.32994 35.8441L18.9413 45.4489C19.5673 45.8098 20.2772 45.9998 20.9998 45.9998C21.7224 45.9998 22.4323 45.8098 23.0583 45.4489L39.6697 35.8441C40.2851 35.4879 40.7964 34.9766 41.1526 34.3611C41.5088 33.7457 41.6975 33.0477 41.6998 32.3366V13.6637C41.6975 12.9526 41.5088 12.2545 41.1526 11.6391C40.7964 11.0237 40.2851 10.5124 39.6697 10.1562ZM3.09814 11.4833L19.7095 1.87922C20.102 1.6534 20.547 1.53455 20.9998 1.53455C21.4527 1.53455 21.8976 1.6534 22.2901 1.87922L38.9015 11.4833C39.191 11.651 39.4445 11.8743 39.6475 12.1403L29.4462 18.0436L22.2395 13.4367C21.8695 13.2012 21.44 13.0761 21.0013 13.0761C20.5627 13.0761 20.1332 13.2012 19.7632 13.4367L12.5565 18.0436L2.35524 12.1403C2.55732 11.8746 2.80976 11.6514 3.09814 11.4833ZM20.9998 31.5485L13.9848 27.3402L20.5835 23.1174C20.7074 23.0375 20.8517 22.995 20.999 22.995C21.1464 22.995 21.2907 23.0375 21.4146 23.1174L28.0148 27.341L20.9998 31.5485ZM28.6665 25.9365L22.2395 21.8241C21.8683 21.5895 21.4382 21.465 20.999 21.465C20.5599 21.465 20.1298 21.5895 19.7586 21.8241L13.3331 25.9365V19.3684L20.5866 14.7324C20.7099 14.6534 20.8533 14.6115 20.9998 14.6115C21.1463 14.6115 21.2897 14.6534 21.413 14.7324L28.6665 19.3684V25.9365ZM3.09814 34.517C2.71509 34.2958 2.39671 33.9781 2.17475 33.5956C1.95279 33.213 1.835 32.7789 1.83314 32.3366V13.6637C1.83314 13.6468 1.83314 13.6299 1.83314 13.6131L11.7998 19.3822V26.5122C11.801 26.9091 11.9044 27.2989 12.0998 27.6443C12.2953 27.9896 12.5764 28.2788 12.9161 28.4841L20.2331 32.8771V44.338C20.0512 44.2855 19.8755 44.213 19.7095 44.1218L3.09814 34.517ZM40.1665 32.3366C40.1646 32.7789 40.0468 33.213 39.8249 33.5956C39.6029 33.9781 39.2845 34.2958 38.9015 34.517L22.2901 44.121C22.1241 44.2122 21.9485 44.2847 21.7665 44.3372V32.8771L29.0835 28.4872C29.4232 28.2819 29.7043 27.9927 29.8998 27.6473C30.0953 27.302 30.1986 26.9121 30.1998 26.5153V19.3853L40.1665 13.6161C40.1665 13.633 40.1665 13.6499 40.1665 13.6667V32.3366Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- text slider area end -->

    <!-- tp-Awards-area start  -->
    {{-- <section class="tp-award__area tp-awards__1 pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-awards__title-box mb-15">
                        <span class="mb-20 tp-section-title-pre">Achievement
                            Awards</span>
                        <div class="tp-section-title-wrap d-flex align-items-center justify-content-between">
                            <h3 class="tp-section-title">
                                Awards & Company<br><span><i>Recognitions</i></span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="text-center tp-awards__thumb text-lg-start">
                        <img src="assets/img/awards/awards-1-1.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="tp-awards__item">
                        <div class="tp-awards__content d-flex align-items-center justify-content-between">
                            <div class="tp-awards__left">
                                <div class="mb-5 tp-awards__top d-flex align-items-center">
                                    <h3 class="tp-awards__size">x <span>2</span></h3>
                                    <span class="tp-awards__sm-text">FOR DISPLAY 2022</span>
                                </div>
                                <div class="tp-awards__name d-flex align-items-center">
                                    <h3 class="tp-awards__title">
                                        <a href="about.html">Brand of the week.</a>
                                    </h3>
                                    <span class="tp-awards__title-sm">/ 2012</span>
                                </div>
                            </div>
                            <div class="tp-awards__right">
                                <div class="tp-awards__icon">
                                    <a href="about.html">
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-awards__item">
                        <div class="tp-awards__content d-flex align-items-center justify-content-between">
                            <div class="tp-awards__left">
                                <div class="mb-5 tp-awards__top d-flex align-items-center">
                                    <h3 class="tp-awards__size">x <span>2</span></h3>
                                    <span class="tp-awards__sm-text">FOR DISPLAY 2023</span>
                                </div>
                                <div class="tp-awards__name d-flex align-items-center">
                                    <h3 class="tp-awards__title">
                                        <a href="about.html">Elite marketing partner.</a>
                                    </h3>
                                    <span class="tp-awards__title-sm">/ 2014</span>
                                </div>
                            </div>
                            <div class="tp-awards__right">
                                <div class="tp-awards__icon">
                                    <a href="about.html">
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-awards__item">
                        <div class="tp-awards__content d-flex align-items-center justify-content-between">
                            <div class="tp-awards__left">
                                <div class="mb-5 tp-awards__top d-flex align-items-center">
                                    <h3 class="tp-awards__size">x <span>2</span></h3>
                                    <span class="tp-awards__sm-text">FOR DISPLAY 2024</span>
                                </div>
                                <div class="tp-awards__name d-flex align-items-center">
                                    <h3 class="tp-awards__title">
                                        <a href="about.html">High five awards.</a>
                                    </h3>
                                    <span class="tp-awards__title-sm">/ 2016</span>
                                </div>
                            </div>
                            <div class="tp-awards__right">
                                <div class="tp-awards__icon">
                                    <a href="about.html">
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-awards__item">
                        <div class="tp-awards__content d-flex align-items-center justify-content-between">
                            <div class="tp-awards__left">
                                <div class="mb-5 tp-awards__top d-flex align-items-center">
                                    <h3 class="tp-awards__size">x <span>2</span></h3>
                                    <span class="tp-awards__sm-text">FOR DISPLAY 2022</span>
                                </div>
                                <div class="tp-awards__name d-flex align-items-center">
                                    <h3 class="tp-awards__title">
                                        <a href="about.html">Top performer lifetime.</a>
                                    </h3>
                                    <span class="tp-awards__title-sm">/ 2024</span>
                                </div>
                            </div>
                            <div class="tp-awards__right">
                                <div class="tp-awards__icon">
                                    <a href="about.html">
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- tp-Awards-area end  -->

    <!-- tp choose us area start -->
    <section class="tp-chooseus__area fix tp-chooseus__1 p-relative section-bg">
        <div class="tp-chooseus__bg-thumb d-none d-xl-block wow avtrix_clip_right"
            data-background="assets/img/chooseus/chooseus-thumb-1-1.jpg" data-wow-delay=".3s" data-wow-duration="2.5s">
            <div class="tp-chooseus__icon">
                <a href="contact.html">
                    <span>
                        <svg width="229" height="229" viewbox="0 0 229 229" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 224L211.25 17.75M5 4H225V224" stroke="currentColor" stroke-width="6.5"
                                stroke-linecap="square" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7 offset-xl-5">
                    <div class="tp-chooseus__wrap pt-100 pb-105">
                        <div class="tp-chooseus__title-box mb-45">
                            <span class="tp-section-title-2-pre tp-split__text tp-split__in-right mb-15">Why choose
                                us</span>
                            <h3 class="mb-40 tp-section-title-2 tp-split__text tp-split__in-right">
                                + 8 Years Of Experience <br>In <span>Software</span> Fields
                                <span class="tp-section-title-2-shape">
                                    <svg width="285" height="62" viewbox="0 0 285 62" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M236.253 5.07359C183.363 0.169412 64.9985 -2.46658 14.6555 26.2229C-48.2733 62.0846 140.247 63.034 212.012 57.4869C254.951 54.1679 283 46.0474 283 34.2986C283 24.1837 234.294 8.98158 146.145 11.8551"
                                            stroke="currentColor" stroke-width="3" stroke-linecap="round"></path>
                                    </svg>
                                </span>
                            </h3>
                            <p>If you ask our clients what it’s like working with us, they’ll tell you about our
                                unwavering dedication, creativity, and the real success we deliver. We love building
                                brands—whether it’s crafting visually stunning identities, designing immersive digital
                                experiences, or driving strategic marketing campaigns, we bring passion and precision to
                                every project.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tp choose us area end -->


    <!-- tp pricing area start  -->
    <section class="tp-pricing__area black-bg pt-120 pb-160">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-price__title-box">
                        <span class="mb-20 tp-section-title-pre">Update Pricing
                            For courses</span>
                        <div class="tp-section-title-wrap d-md-flex align-items-center justify-content-between">
                            <h3 class="tp-section-title">
                                Our <span>Courses Pricing Plans</span>
                            </h3>
                            <a href="courses" class="tp-btn-primary">
                                <span>view all Courses</span>
                                <i class="far fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-price__box-wrap mt-55">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-price__item wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                            <div class="tp-price__head mb-55">
                                <p>Web Development</p>
                                <h3 class="tp-price__value">$32<span>/ month</span></h3>
                                <div class="tp-price__plan">
                                    <span>4 Months Per Section</span>
                                </div>
                            </div>
                            <div class="tp-price__list mb-55">
                                <ul>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <span>
                                            HTML
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <span>
                                            CSS3
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <span>
                                            Javascript
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <span>
                                            PHP
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tp-price__action">
                                <a href="contact" class="tp-price-btn tp-icon-style">
                                    GET STARTED FOR FREE
                                    <span>
                                        <svg width="18" height="9" viewbox="0 0 18 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.9308 4.5H0.783485C0.351 4.5 0 4.248 0 3.9375C0 3.627 0.351 3.375 0.783485 3.375H15.9308C16.3633 3.375 16.7143 3.627 16.7143 3.9375C16.7143 4.248 16.3633 4.5 15.9308 4.5Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M13.5585 9C13.3789 9 13.1995 8.93097 13.0629 8.7917C12.7889 8.5142 12.7889 8.06431 13.0629 7.78663L16.3073 4.5L13.0629 1.21319C12.7889 0.935693 12.7889 0.485624 13.0629 0.208125C13.337 -0.0693749 13.781 -0.0693749 14.055 0.208125L17.7948 3.99703C18.0688 4.27453 18.0688 4.72443 17.7948 5.00193L14.055 8.79066C13.9175 8.93097 13.7381 9 13.5585 9Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-price__item tp-price-active wow tpfadeUp" data-wow-duration=".9s"
                            data-wow-delay=".5s">
                            <div class="tp-price__head mb-55">
                                <p>Mobile App Development </p>
                                <h3 class="tp-price__value">$33<span>/month</span>
                                </h3>
                                <div class="tp-price__plan">
                                    <span>6 Months Per Section</span>
                                </div>
                            </div>
                            <div class="tp-price__list mb-55">
                                <ul>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <span>Intro to Web</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <span> React </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <span>React Native</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <span>Fire Base</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tp-price__action">
                                <a href="contact" class="tp-price-btn">
                                    GET STARTED FOR FREE
                                    <span>
                                        <svg width="18" height="9" viewbox="0 0 18 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.9308 4.5H0.783485C0.351 4.5 0 4.248 0 3.9375C0 3.627 0.351 3.375 0.783485 3.375H15.9308C16.3633 3.375 16.7143 3.627 16.7143 3.9375C16.7143 4.248 16.3633 4.5 15.9308 4.5Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M13.5585 9C13.3789 9 13.1995 8.93097 13.0629 8.7917C12.7889 8.5142 12.7889 8.06431 13.0629 7.78663L16.3073 4.5L13.0629 1.21319C12.7889 0.935693 12.7889 0.485624 13.0629 0.208125C13.337 -0.0693749 13.781 -0.0693749 14.055 0.208125L17.7948 3.99703C18.0688 4.27453 18.0688 4.72443 17.7948 5.00193L14.055 8.79066C13.9175 8.93097 13.7381 9 13.5585 9Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-price__item wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="p-0 tp-price__head mb-55">
                                <p>Advance Video Editing</p>
                                <h3 class="tp-price__value">$30<span>/month</span></h3>
                                <div class="tp-price__plan">
                                    <span>3 Months Per Section</span>
                                </div>
                            </div>
                            <div class="tp-price__list mb-55">
                                <ul>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <span>Movie Editing</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <span>TV shows Editing</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <span>Music Videos Editing</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <span>Commercials</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tp-price__action">
                                <a href="contact" class="tp-price-btn">
                                    GET STARTED FOR FREE
                                    <span>
                                        <svg width="18" height="9" viewbox="0 0 18 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.9308 4.5H0.783485C0.351 4.5 0 4.248 0 3.9375C0 3.627 0.351 3.375 0.783485 3.375H15.9308C16.3633 3.375 16.7143 3.627 16.7143 3.9375C16.7143 4.248 16.3633 4.5 15.9308 4.5Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M13.5585 9C13.3789 9 13.1995 8.93097 13.0629 8.7917C12.7889 8.5142 12.7889 8.06431 13.0629 7.78663L16.3073 4.5L13.0629 1.21319C12.7889 0.935693 12.7889 0.485624 13.0629 0.208125C13.337 -0.0693749 13.781 -0.0693749 14.055 0.208125L17.7948 3.99703C18.0688 4.27453 18.0688 4.72443 17.7948 5.00193L14.055 8.79066C13.9175 8.93097 13.7381 9 13.5585 9Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tp pricing area end  -->


    <!-- tp pricing area start  -->
    <section class="tp-pricing__area black-bg pt-120 pb-160">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-price__title-box">
                        <span class="mb-20 tp-section-title-pre">Update Pricing
                            Plan</span>
                        <div class="tp-section-title-wrap d-md-flex align-items-center justify-content-between">
                            <h3 class="tp-section-title">
                                Our <span>Pricing Plans</span>
                            </h3>
                            <a href="plans" class="tp-btn-primary">
                                <span>All Plans</span>
                                <i class="far fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-price__box-wrap mt-55">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-price__item wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                            <div class="tp-price__head mb-55">
                                <p>STARTS FROM </p>
                                <h3 class="tp-price__value">$89.99<span>/USD</span></h3>
                                <div class="tp-price__plan">
                                    <span>Basic Plan</span>
                                </div>
                            </div>
                            <div class="tp-price__list mb-55">
                                <ul>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <span>
                                            02 pages website
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <span>
                                            Responsive on all devices
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle text-success"></i>
                                        <span>
                                            SEO Optimizations
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <span>
                                            Livechat integration
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tp-price__action">
                                <a href="contact" class="tp-price-btn tp-icon-style">
                                    GET STARTED FOR FREE
                                    <span>
                                        <svg width="18" height="9" viewbox="0 0 18 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.9308 4.5H0.783485C0.351 4.5 0 4.248 0 3.9375C0 3.627 0.351 3.375 0.783485 3.375H15.9308C16.3633 3.375 16.7143 3.627 16.7143 3.9375C16.7143 4.248 16.3633 4.5 15.9308 4.5Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M13.5585 9C13.3789 9 13.1995 8.93097 13.0629 8.7917C12.7889 8.5142 12.7889 8.06431 13.0629 7.78663L16.3073 4.5L13.0629 1.21319C12.7889 0.935693 12.7889 0.485624 13.0629 0.208125C13.337 -0.0693749 13.781 -0.0693749 14.055 0.208125L17.7948 3.99703C18.0688 4.27453 18.0688 4.72443 17.7948 5.00193L14.055 8.79066C13.9175 8.93097 13.7381 9 13.5585 9Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-price__item tp-price-active wow tpfadeUp" data-wow-duration=".9s"
                            data-wow-delay=".5s">
                            <div class="tp-price__head mb-55">
                                <p>STARTS FROM </p>
                                <h3 class="tp-price__value">$299.99<span>/USD</span>
                                    <span><em class="text-danger"><s>$599.99</s></em></span>
                                </h3>
                                <div class="tp-price__plan">
                                    <span>Business Plan </span>
                                </div>
                            </div>
                            <div class="tp-price__list mb-55">
                                <ul>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <span>10 pages website</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <span>LiveChat and WhatsApp API integration </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <span>SEO Optimizations</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <span>Customer's Dashboard</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle text-success"></i>
                                        <span>Free logo and one Flyer design</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tp-price__action">
                                <a href="contact" class="tp-price-btn">
                                    GET STARTED FOR FREE
                                    <span>
                                        <svg width="18" height="9" viewbox="0 0 18 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.9308 4.5H0.783485C0.351 4.5 0 4.248 0 3.9375C0 3.627 0.351 3.375 0.783485 3.375H15.9308C16.3633 3.375 16.7143 3.627 16.7143 3.9375C16.7143 4.248 16.3633 4.5 15.9308 4.5Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M13.5585 9C13.3789 9 13.1995 8.93097 13.0629 8.7917C12.7889 8.5142 12.7889 8.06431 13.0629 7.78663L16.3073 4.5L13.0629 1.21319C12.7889 0.935693 12.7889 0.485624 13.0629 0.208125C13.337 -0.0693749 13.781 -0.0693749 14.055 0.208125L17.7948 3.99703C18.0688 4.27453 18.0688 4.72443 17.7948 5.00193L14.055 8.79066C13.9175 8.93097 13.7381 9 13.5585 9Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-price__item wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="p-0 tp-price__head mb-55">
                                <p>STARTS FROM </p>
                                <h3 class="tp-price__value">$1,100.00<span>/USD</span></h3>
                                <div class="tp-price__plan">
                                    <span>Premium Plan</span>
                                </div>
                            </div>
                            <div class="tp-price__list mb-55">
                                <ul>
                                    <li>
                                        <i class="fas fa-check-circle text-success"></i>
                                        <span>Unlimited Website Pages</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle text-success"></i>
                                        <span>Graphics Design</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle text-success"></i>
                                        <span>Mobile App development</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle text-success"></i>
                                        <span>SEO Optimizations</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle text-success"></i>
                                        <span>IT Consultancy Manage </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tp-price__action">
                                <a href="contact" class="tp-price-btn">
                                    GET STARTED FOR FREE
                                    <span>
                                        <svg width="18" height="9" viewbox="0 0 18 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.9308 4.5H0.783485C0.351 4.5 0 4.248 0 3.9375C0 3.627 0.351 3.375 0.783485 3.375H15.9308C16.3633 3.375 16.7143 3.627 16.7143 3.9375C16.7143 4.248 16.3633 4.5 15.9308 4.5Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M13.5585 9C13.3789 9 13.1995 8.93097 13.0629 8.7917C12.7889 8.5142 12.7889 8.06431 13.0629 7.78663L16.3073 4.5L13.0629 1.21319C12.7889 0.935693 12.7889 0.485624 13.0629 0.208125C13.337 -0.0693749 13.781 -0.0693749 14.055 0.208125L17.7948 3.99703C18.0688 4.27453 18.0688 4.72443 17.7948 5.00193L14.055 8.79066C13.9175 8.93097 13.7381 9 13.5585 9Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tp pricing area end  -->
</main>
@endsection