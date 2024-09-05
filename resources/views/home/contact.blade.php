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
                            <div class="tp-team__details-contact-form">
                                <form action="main.php" method="POST">
                                    <div class="postbox__2-comment-form mb-30">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="postbox__2-comment-input d-flex align-items-center mb-35">
                                                    <span>
                                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.68775 9.15239C10.8737 9.15239 11.9005 8.70142 12.7397 7.81167C13.5787 6.92206 14.0042 5.83356 14.0042 4.57605C14.0042 3.31897 13.5788 2.23033 12.7396 1.34043C11.9004 0.450966 10.8736 0 9.68775 0C8.50166 0 7.47499 0.450966 6.63591 1.34058C5.79683 2.23019 5.37134 3.31882 5.37134 4.57605C5.37134 5.83356 5.79683 6.9222 6.63591 7.81181C7.47526 8.70128 8.50207 9.15239 9.68775 9.15239ZM7.3786 2.12785C8.02244 1.44524 8.77771 1.11343 9.68775 1.11343C10.5977 1.11343 11.3531 1.44524 11.997 2.12785C12.6409 2.8106 12.954 3.6115 12.954 4.57605C12.954 5.54089 12.6409 6.34164 11.997 7.0244C11.3531 7.70715 10.5977 8.03896 9.68775 8.03896C8.77798 8.03896 8.02271 7.70701 7.3786 7.0244C6.73462 6.34179 6.42152 5.54089 6.42152 4.57605C6.42152 3.6115 6.73462 2.8106 7.3786 2.12785Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M17.2397 14.6101C17.2155 14.2398 17.1665 13.836 17.0945 13.4095C17.0217 12.9799 16.9281 12.5737 16.816 12.2024C16.7 11.8187 16.5426 11.4398 16.3478 11.0767C16.1459 10.6998 15.9085 10.3716 15.6422 10.1016C15.3637 9.81903 15.0227 9.59188 14.6284 9.42619C14.2354 9.26138 13.7999 9.17788 13.3341 9.17788C13.1512 9.17788 12.9743 9.25746 12.6326 9.49331C12.4223 9.6387 12.1763 9.80685 11.9018 9.99284C11.667 10.1514 11.349 10.3 10.9562 10.4345C10.5729 10.566 10.1838 10.6327 9.79963 10.6327C9.41571 10.6327 9.02659 10.566 8.64307 10.4345C8.25067 10.3001 7.93251 10.1516 7.69817 9.99298C7.42622 9.80874 7.18012 9.64059 6.96669 9.49316C6.62529 9.25732 6.44836 9.17773 6.26543 9.17773C5.79947 9.17773 5.36413 9.26138 4.97132 9.42634C4.57728 9.59174 4.23615 9.81889 3.95737 10.1017C3.69103 10.3719 3.45368 10.6999 3.25187 11.0767C3.05731 11.4398 2.8998 11.8186 2.78386 12.2026C2.67188 12.5738 2.57822 12.9799 2.50549 13.4095C2.4333 13.8354 2.38449 14.2394 2.36028 14.6105C2.33649 14.9733 2.32446 15.3509 2.32446 15.7325C2.32446 16.7243 2.62184 17.5272 3.20825 18.1194C3.78742 18.7037 4.55363 19 5.48568 19H14.1147C15.0465 19 15.8127 18.7037 16.392 18.1194C16.9785 17.5276 17.2759 16.7244 17.2759 15.7323C17.2758 15.3495 17.2636 14.9719 17.2397 14.6101ZM15.6679 17.3127C15.2852 17.6988 14.7771 17.8866 14.1145 17.8866H5.48568C4.82298 17.8866 4.31491 17.6988 3.93235 17.3128C3.55704 16.934 3.37465 16.417 3.37465 15.7325C3.37465 15.3764 3.38572 15.0249 3.40787 14.6875C3.42947 14.3564 3.47364 13.9927 3.53913 13.6062C3.6038 13.2245 3.68611 12.8663 3.784 12.5421C3.87793 12.2311 4.00604 11.9232 4.16492 11.6267C4.31655 11.344 4.49101 11.1015 4.68352 10.9061C4.86358 10.7233 5.09055 10.5737 5.35798 10.4615C5.60532 10.3577 5.88328 10.3009 6.18503 10.2923C6.22181 10.313 6.2873 10.3526 6.3934 10.426C6.60929 10.5751 6.85813 10.7453 7.13322 10.9316C7.44331 11.1412 7.84282 11.3305 8.32013 11.4939C8.8081 11.6612 9.30578 11.7461 9.79977 11.7461C10.2938 11.7461 10.7916 11.6612 11.2793 11.494C11.757 11.3304 12.1564 11.1412 12.4669 10.9313C12.7484 10.7405 12.9902 10.5753 13.2061 10.426C13.3122 10.3528 13.3777 10.313 13.4145 10.2923C13.7164 10.3009 13.9944 10.3577 14.2418 10.4615C14.5091 10.5737 14.7361 10.7234 14.9162 10.9061C15.1087 11.1013 15.2831 11.3438 15.4348 11.6268C15.5938 11.9232 15.722 12.2313 15.8158 12.5419C15.9138 12.8666 15.9963 13.2247 16.0608 13.6061C16.1262 13.9933 16.1705 14.3571 16.1921 14.6876V14.6879C16.2144 15.0241 16.2256 15.3754 16.2257 15.7325C16.2256 16.4171 16.0432 16.934 15.6679 17.3127Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <input name="name" type="text" class="inputText"
                                                        placeholder="Your Name *" required="">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="postbox__2-comment-input d-flex align-items-center mb-35">
                                                    <span>
                                                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M18.0322 0.5H2.31225C1.44524 0.5 0.740234 1.24746 0.740234 2.16668V13.8334C0.740234 14.7525 1.44524 15.5 2.31225 15.5H18.0323C18.8993 15.5 19.6043 14.7525 19.6043 13.8333V2.16668C19.6043 1.24746 18.8993 0.5 18.0322 0.5ZM2.31225 1.33332H18.0323C18.0902 1.33332 18.1412 1.3557 18.1956 1.36836C16.8346 2.68895 12.3218 7.06598 10.7426 8.57453C10.619 8.69254 10.4198 8.83332 10.1723 8.83332C9.92473 8.83332 9.72555 8.69254 9.60157 8.57414C8.02249 7.06582 3.50945 2.68855 2.1487 1.36844C2.20315 1.35578 2.25429 1.33332 2.31225 1.33332ZM1.52622 13.8333V2.16668C1.52622 2.08504 1.54943 2.01098 1.57021 1.93637C2.61186 2.94715 5.76068 6.00121 7.80242 7.96969C5.76731 9.82309 2.61768 12.989 1.56775 14.0505C1.54921 13.9796 1.52622 13.9104 1.52622 13.8333ZM18.0322 14.6667H2.31225C2.24947 14.6667 2.19365 14.6435 2.13503 14.6286C3.21997 13.5321 6.38964 10.3479 8.38897 8.53453C8.6496 8.7852 8.88769 9.01375 9.07537 9.19305C9.3993 9.50312 9.77846 9.66668 10.1722 9.66668C10.566 9.66668 10.9452 9.50309 11.2687 9.19344C11.4565 9.01406 11.6947 8.78531 11.9555 8.53453C13.955 10.3477 17.1242 13.5316 18.2095 14.6286C18.1508 14.6435 18.0951 14.6667 18.0322 14.6667ZM18.8183 13.8333C18.8183 13.9103 18.7953 13.9796 18.7768 14.0505C17.7264 12.9885 14.5772 9.82289 12.5421 7.96973C14.5839 6.00125 17.7323 2.94746 18.7743 1.93629C18.7951 2.0109 18.8183 2.085 18.8183 2.16664V13.8333Z"
                                                                fill="#DF5225" />
                                                        </svg>
                                                    </span>
                                                    <input name="email" type="email" class="inputText"
                                                        placeholder="Email Address *" required="">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="postbox__2-comment-input d-flex align-items-center mb-35">
                                                    <span>
                                                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_56_1955)">
                                                                <path
                                                                    d="M17.1265 11.3074C16.8763 11.3074 16.6736 11.5081 16.6736 11.7557V15.736C16.6727 16.4785 16.0649 17.0802 15.3148 17.0809H2.60639C1.85624 17.0802 1.24852 16.4785 1.24763 15.736V4.05397C1.24852 3.31166 1.85624 2.70996 2.60639 2.70909H6.6278C6.87797 2.70909 7.08072 2.50841 7.08072 2.26079C7.08072 2.01336 6.87797 1.8125 6.6278 1.8125H2.60639C1.35626 1.8139 0.343212 2.81661 0.341797 4.05397V15.7362C0.343212 16.9736 1.35626 17.9763 2.60639 17.9777H15.3148C16.5649 17.9763 17.578 16.9736 17.5794 15.7362V11.7557C17.5794 11.5081 17.3766 11.3074 17.1265 11.3074Z"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M17.4022 0.65924C16.6063 -0.128601 15.3158 -0.128601 14.5198 0.65924L6.43949 8.65707C6.38412 8.71188 6.34413 8.77983 6.32326 8.85443L5.26067 12.6514C5.21697 12.8071 5.26138 12.9738 5.37673 13.0882C5.49226 13.2023 5.66069 13.2463 5.81797 13.2032L9.65415 12.1513C9.72952 12.1306 9.79816 12.0911 9.85354 12.0363L17.9337 4.03825C18.7284 3.24988 18.7284 1.97365 17.9337 1.18528L17.4022 0.65924ZM7.42636 8.94846L14.0395 2.40268L16.1723 4.51369L9.55896 11.0595L7.42636 8.94846ZM7.00033 9.79462L8.70426 11.4813L6.34732 12.1277L7.00033 9.79462ZM17.2932 3.40434L16.8129 3.87977L14.6799 1.76859L15.1605 1.29315C15.6026 0.855543 16.3195 0.855543 16.7616 1.29315L17.2932 1.8192C17.7347 2.25734 17.7347 2.96637 17.2932 3.40434Z"
                                                                    fill="currentColor" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_56_1955">
                                                                    <rect width="18.1857" height="18"
                                                                        fill="currentColor"
                                                                        transform="translate(0.341797)" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                    <textarea name="message" placeholder="Your Message Here *"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-contact__action">
                                        <button type="submit" class="tp-btn-secondary">
                                            Send Us Messages
                                        </button>
                                    </div>
                                </form>
                            </div>
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