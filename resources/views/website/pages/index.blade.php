@extends('website.layout.master')

@section('content')
    <div class="stricky-header stricked-menu main-menu main-header-two">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->
    <!--Main Slider Start-->
    <section class="main-slider">
        <div class="main-slider__one eduact-owl__carousel owl-carousel"
            data-owl-options='{
"loop": true,
"animateOut": "slideOutDown",
"animateIn": "fadeIn",
"items": 1,
"smartSpeed": 1000, 
"autoplay": true, 
"autoplayTimeout": 400000, 
"autoplayHoverPause": true,
"nav": false,
"dots": true,
"margin": 0
}'>
            <div class="item"><!-- slider-item-start -->
                <div class="main-slider__item">
                    <div class="main-slider__bg"
                        style="background-image: url({{ asset('website/assets/images/shapes/slider-bg-1.jpg') }});"></div>
                    <!-- slider-image-->
                    <div class="main-slider__shape-one"><img
                            src="{{ asset('website/assets/images/shapes/slider-shape-1.png') }}" alt="eduact" /></div>
                    <!-- slider-shape-1 -->
                    <div class="main-slider__shape-two"><img
                            src="{{ asset('website/assets/images/shapes/slider-shape-2.png') }}" alt="eduact" /></div>
                    <!-- slider-shape-2 -->
                    {{-- <div class="hero-banner-two__shape2 wow fadeInUp" data-wow-delay="250ms"><img src="{{ asset('website/assets/images/shapes/banner-2-shape-2.png')}}" alt="eduact"></div> --}}
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title">AIR 1167 <br> <span>Congratulations !</span></h2>
                                    <!-- slider-title -->
                                    <!-- slider-text -->
                                    {{-- <div class="main-slider__btn">
                                    <a href="course.html" class="eduact-btn eduact-btn-second"><span class="eduact-btn__curve"></span>Find the Course<i class="icon-arrow"></i></a><!-- /.btn -->
                                </div> --}}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-slider__layer">
                                    <div class="main-slider__layer-thumb eduact-tilt"
                                        data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                                        <img src="{{ asset('website/assets/images/resources/banner1.png') }}"
                                            alt="eduact"
                                            style="padding-right: 60px"
                                            >
                                        {{-- <h3 class="">(IIT POWAI SELECTION)</h3> --}}
                                    </div>

                                    <svg viewBox="0 0 884 578" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M77.978 55.4516C245.177 -111.529 296.923 154.357 535.599 128.113C909.567 87.0169 938.305 347.546 826.648 525.777C714.974 704.007 550.407 814.987 320.862 731.954C54.1102 635.466 -103.473 236.656 77.978 55.4516Z" />
                                        <path
                                            d="M77.978 55.4516C245.177 -111.529 296.923 154.357 535.599 128.113C909.567 87.0169 938.305 347.546 826.648 525.777C714.974 704.007 550.407 814.987 320.862 731.954C54.1102 635.466 -103.473 236.656 77.978 55.4516Z" />
                                    </svg>
                                </div>
                                <div class="main-slider__shape-three">
                                    <svg viewBox="0 0 152 152" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="76" cy="76" r="63.7419" stroke="#F57005"
                                            stroke-width="24" />
                                    </svg>
                                </div><!-- slider-shape-3 -->
                                <div class="main-slider__shape-four">
                                    <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="16" cy="16" r="15" stroke="#F1F2FD" stroke-width="2" />
                                    </svg>
                                </div><!-- slider-shape-4 -->
                                <div class="main-slider__shape-five">
                                    <svg viewBox="0 0 124 101" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M118.712 10.0661C118.712 10.0661 48.8261 -23.0444 10.0927 36.3064C3.19101 46.8818 -5.89196 76.3137 5.86651 93.2798C17.625 110.246 31.9191 95.0447 39.4615 82.9168C47.0161 70.7815 63.3887 39.7207 103.51 21.3862C112.963 17.063 132.273 16.0369 118.712 10.0661Z" />
                                    </svg>
                                </div><!-- slider-shape-5 -->
                                <div class="main-slider__shape-six">
                                    <img src="{{ asset('website/assets/images/shapes/slider-shape-6.png') }}"
                                        alt="eduact" />
                                </div><!-- slider-shape-6 -->
                                <div class="main-slider__shape-seven">
                                    <img src="{{ asset('website/assets/images/shapes/slider-shape-7.png') }}"
                                        alt="eduact" />
                                </div><!-- slider-shape-6 -->
                                <div class="main-slider__shape-eight">
                                    <span class="icon-business"></span>
                                </div><!-- slider-shape-6 -->
                                <div class="main-slider__shape-nine">
                                    <img src="{{ asset('website/assets/images/shapes/slider-shape-9.png') }}"
                                        alt="eduact" />
                                </div><!-- slider-shape-6 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- slider-item-end -->
            <div class="item"><!-- slider-item-start -->
                <div class="main-slider__item">
                    <div class="main-slider__bg"
                        style="background-image: url({{ asset('website/assets/images/shapes/slider-bg-1.jpg') }});"></div>
                    <!-- slider-image-->
                    <div class="main-slider__shape-one"><img
                            src="{{ asset('website/assets/images/shapes/slider-shape-1.png') }}" alt="eduact" /></div>
                    <!-- slider-shape-1 -->
                    <div class="main-slider__shape-two"><img
                            src="{{ asset('website/assets/images/shapes/slider-shape-2.png') }}" alt="eduact" /></div>
                    <!-- slider-shape-2 -->
                    {{-- <div class="hero-banner-two__shape2 wow fadeInUp" data-wow-delay="250ms"><img src="{{ asset('website/assets/images/shapes/banner-2-shape-2.png')}}" alt="eduact"></div> --}}
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title">AIR 1684 <br> <span>Congratulations !</span></h2>
                                    <!-- slider-title -->
                                    <!-- slider-text -->
                                    {{-- <div class="main-slider__btn">
                                    <a href="course.html" class="eduact-btn eduact-btn-second"><span class="eduact-btn__curve"></span>Find the Course<i class="icon-arrow"></i></a><!-- /.btn -->
                                </div> --}}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-slider__layer">
                                    <div class="main-slider__layer-thumb eduact-tilt"
                                        data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                                        <img src="{{ asset('website/assets/images/resources/banner2.png') }}"
                                            alt="eduact"
                                            style="padding-right: 60px"
                                            >
                                    </div>
                                    <svg viewBox="0 0 884 578" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M77.978 55.4516C245.177 -111.529 296.923 154.357 535.599 128.113C909.567 87.0169 938.305 347.546 826.648 525.777C714.974 704.007 550.407 814.987 320.862 731.954C54.1102 635.466 -103.473 236.656 77.978 55.4516Z" />
                                        <path
                                            d="M77.978 55.4516C245.177 -111.529 296.923 154.357 535.599 128.113C909.567 87.0169 938.305 347.546 826.648 525.777C714.974 704.007 550.407 814.987 320.862 731.954C54.1102 635.466 -103.473 236.656 77.978 55.4516Z" />
                                    </svg>
                                </div>
                                <div class="main-slider__shape-three">
                                    <svg viewBox="0 0 152 152" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="76" cy="76" r="63.7419" stroke="#F57005"
                                            stroke-width="24" />
                                    </svg>
                                </div><!-- slider-shape-3 -->
                                <div class="main-slider__shape-four">
                                    <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="16" cy="16" r="15" stroke="#F1F2FD" stroke-width="2" />
                                    </svg>
                                </div><!-- slider-shape-4 -->
                                <div class="main-slider__shape-five">
                                    <svg viewBox="0 0 124 101" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M118.712 10.0661C118.712 10.0661 48.8261 -23.0444 10.0927 36.3064C3.19101 46.8818 -5.89196 76.3137 5.86651 93.2798C17.625 110.246 31.9191 95.0447 39.4615 82.9168C47.0161 70.7815 63.3887 39.7207 103.51 21.3862C112.963 17.063 132.273 16.0369 118.712 10.0661Z" />
                                    </svg>
                                </div><!-- slider-shape-5 -->
                                <div class="main-slider__shape-six">
                                    <img src="{{ asset('website/assets/images/shapes/slider-shape-6.png') }}"
                                        alt="eduact" />
                                </div><!-- slider-shape-6 -->
                                <div class="main-slider__shape-seven">
                                    <img src="{{ asset('website/assets/images/shapes/slider-shape-7.png') }}"
                                        alt="eduact" />
                                </div><!-- slider-shape-6 -->
                                <div class="main-slider__shape-eight">
                                    <span class="icon-business"></span>
                                </div><!-- slider-shape-6 -->
                                <div class="main-slider__shape-nine">
                                    <img src="{{ asset('website/assets/images/shapes/slider-shape-9.png') }}"
                                        alt="eduact" />
                                </div><!-- slider-shape-6 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- slider-item-end -->
            <div class="item"><!-- slider-item-start -->
                <div class="main-slider__item">
                    <div class="main-slider__bg"
                        style="background-image: url({{ asset('website/assets/images/shapes/slider-bg-1.jpg') }});"></div>
                    <!-- slider-image-->
                    <div class="main-slider__shape-one"><img
                            src="{{ asset('website/assets/images/shapes/slider-shape-1.png') }}" alt="eduact" /></div>
                    <!-- slider-shape-1 -->
                    <div class="main-slider__shape-two"><img
                            src="{{ asset('website/assets/images/shapes/slider-shape-2.png') }}" alt="eduact" /></div>
                    <!-- slider-shape-2 -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title">AIR 1326 <br> <span>Congratulations !</span></h2>
                                    <!-- slider-title -->
                                    <!-- slider-text -->
                                    {{-- <div class="main-slider__btn">
                                    <a href="course.html" class="eduact-btn eduact-btn-second"><span class="eduact-btn__curve"></span>Find the Course<i class="icon-arrow"></i></a><!-- /.btn -->
                                </div> --}}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-slider__layer">
                                    <div class="main-slider__layer-thumb eduact-tilt"
                                        data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                                        <img src="{{ asset('website/assets/images/resources/banner3.png') }}"
                                            alt="eduact"
                                            style="padding-right: 60px"
                                            >
                                    </div>
                                    <svg viewBox="0 0 884 578" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M77.978 55.4516C245.177 -111.529 296.923 154.357 535.599 128.113C909.567 87.0169 938.305 347.546 826.648 525.777C714.974 704.007 550.407 814.987 320.862 731.954C54.1102 635.466 -103.473 236.656 77.978 55.4516Z" />
                                        <path
                                            d="M77.978 55.4516C245.177 -111.529 296.923 154.357 535.599 128.113C909.567 87.0169 938.305 347.546 826.648 525.777C714.974 704.007 550.407 814.987 320.862 731.954C54.1102 635.466 -103.473 236.656 77.978 55.4516Z" />
                                    </svg>
                                </div>
                                <div class="main-slider__shape-three">
                                    <svg viewBox="0 0 152 152" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="76" cy="76" r="63.7419" stroke="#F57005"
                                            stroke-width="24" />
                                    </svg>
                                </div><!-- slider-shape-3 -->
                                <div class="main-slider__shape-four">
                                    <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="16" cy="16" r="15" stroke="#F1F2FD"
                                            stroke-width="2" />
                                    </svg>
                                </div><!-- slider-shape-4 -->
                                <div class="main-slider__shape-five">
                                    <svg viewBox="0 0 124 101" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M118.712 10.0661C118.712 10.0661 48.8261 -23.0444 10.0927 36.3064C3.19101 46.8818 -5.89196 76.3137 5.86651 93.2798C17.625 110.246 31.9191 95.0447 39.4615 82.9168C47.0161 70.7815 63.3887 39.7207 103.51 21.3862C112.963 17.063 132.273 16.0369 118.712 10.0661Z" />
                                    </svg>
                                </div><!-- slider-shape-5 -->
                                <div class="main-slider__shape-six">
                                    <img src="{{ asset('website/assets/images/shapes/slider-shape-6.png') }}"
                                        alt="eduact" />
                                </div><!-- slider-shape-6 -->
                                <div class="main-slider__shape-seven">
                                    <img src="{{ asset('website/assets/images/shapes/slider-shape-7.png') }}"
                                        alt="eduact" />
                                </div><!-- slider-shape-6 -->
                                <div class="main-slider__shape-eight">
                                    <span class="icon-business"></span>
                                </div><!-- slider-shape-6 -->
                                <div class="main-slider__shape-nine">
                                    <img src="{{ asset('website/assets/images/shapes/slider-shape-9.png') }}"
                                        alt="eduact" />
                                </div><!-- slider-shape-6 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- slider-item-end -->
        </div>
    </section>
    <!--Main Slider End-->
    <!-- About Start -->
    {{-- <section class="about-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-one__thumb wow fadeInLeft" data-wow-delay="100ms"><!-- about thumb start -->
                    <div class="about-one__thumb__one eduact-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                        <img src="{{ asset('website/assets/images/resources/about-1-1.png')}}" alt="eduact">
                    </div>
                    <div class="about-one__thumb__shape1 wow zoomIn" data-wow-delay="300ms">
                        <img src="{{ asset('website/assets/images/shapes/about-shape-1-1.png')}}" alt="eduact">
                    </div>
                    <div class="about-one__thumb__shape2 wow zoomIn" data-wow-delay="400ms">
                        <img src="{{ asset('website/assets/images/shapes/about-shape-1-2.png')}}" alt="eduact">
                    </div>
                    <div class="about-one__thumb__box wow fadeInLeft" data-wow-delay="600ms">
                        <div class="about-one__thumb__box__icon"><span class="icon-Headphone-Women"></span></div>
                        <h4 class="about-one__thumb__box__title">Need to Know More Details?</h4>
                        <p class="about-one__thumb__box__text"><a href="tel:6845550102">+(684) 555-0102</a></p>
                    </div>
                </div><!-- about thumb end -->
            </div>
            <div class="col-xl-6">
                <div class="about-one__content"><!-- about content start-->
                    <div class="section-title">
                        <h5 class="section-title__tagline">
                            About Us <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 13">
                                <g clip-path="url(#clip0_324_36194)">
                                    <path d="M10.5406 6.49995L0.700562 12.1799V8.56995L4.29056 6.49995L0.700562 4.42995V0.819946L10.5406 6.49995Z" />
                                    <path d="M25.1706 6.49995L15.3306 12.1799V8.56995L18.9206 6.49995L15.3306 4.42995V0.819946L25.1706 6.49995Z" />
                                    <path d="M39.7906 6.49995L29.9506 12.1799V8.56995L33.5406 6.49995L29.9506 4.42995V0.819946L39.7906 6.49995Z" />
                                    <path d="M54.4206 6.49995L44.5806 12.1799V8.56995L48.1706 6.49995L44.5806 4.42995V0.819946L54.4206 6.49995Z" />
                                </g>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 133 13" fill="none">
                                <path d="M9.76794 0.395L0.391789 9.72833C-0.130596 10.2483 -0.130596 11.095 0.391789 11.615C0.914174 12.135 1.76472 12.135 2.28711 11.615L11.6633 2.28167C12.1856 1.76167 12.1856 0.915 11.6633 0.395C11.1342 -0.131667 10.2903 -0.131667 9.76794 0.395Z" fill="#F1F2FD" />
                                <path d="M23.1625 0.395L13.7863 9.72833C13.2639 10.2483 13.2639 11.095 13.7863 11.615C14.3087 12.135 15.1593 12.135 15.6816 11.615L25.0578 2.28167C25.5802 1.76167 25.5802 0.915 25.0578 0.395C24.5287 -0.131667 23.6849 -0.131667 23.1625 0.395Z" fill="#F1F2FD" />
                                <path d="M36.5569 0.395L27.1807 9.72833C26.6583 10.2483 26.6583 11.095 27.1807 11.615C27.7031 12.135 28.5537 12.135 29.076 11.615L38.4522 2.28167C38.9746 1.76167 38.9746 0.915 38.4522 0.395C37.9231 -0.131667 37.0793 -0.131667 36.5569 0.395Z" fill="#F1F2FD" />
                                <path d="M49.9514 0.395L40.5753 9.72833C40.0529 10.2483 40.0529 11.095 40.5753 11.615C41.0976 12.135 41.9482 12.135 42.4706 11.615L51.8467 2.28167C52.3691 1.76167 52.3691 0.915 51.8467 0.395C51.3176 -0.131667 50.4738 -0.131667 49.9514 0.395Z" fill="#F1F2FD" />
                                <path d="M63.3459 0.395L53.9698 9.72833C53.4474 10.2483 53.4474 11.095 53.9698 11.615C54.4922 12.135 55.3427 12.135 55.8651 11.615L65.2413 2.28167C65.7636 1.76167 65.7636 0.915 65.2413 0.395C64.7122 -0.131667 63.8683 -0.131667 63.3459 0.395Z" fill="#F1F2FD" />
                                <path d="M76.7405 0.395L67.3643 9.72833C66.8419 10.2483 66.8419 11.095 67.3643 11.615C67.8867 12.135 68.7373 12.135 69.2596 11.615L78.6358 2.28167C79.1582 1.76167 79.1582 0.915 78.6358 0.395C78.1067 -0.131667 77.2629 -0.131667 76.7405 0.395Z" fill="#F1F2FD" />
                                <path d="M90.1349 0.395L80.7587 9.72833C80.2363 10.2483 80.2363 11.095 80.7587 11.615C81.2811 12.135 82.1317 12.135 82.6541 11.615L92.0302 2.28167C92.5526 1.76167 92.5526 0.915 92.0302 0.395C91.5011 -0.131667 90.6573 -0.131667 90.1349 0.395Z" fill="#F1F2FD" />
                                <path d="M103.529 0.395L94.1533 9.72833C93.6309 10.2483 93.6309 11.095 94.1533 11.615C94.6756 12.135 95.5262 12.135 96.0486 11.615L105.425 2.28167C105.947 1.76167 105.947 0.915 105.425 0.395C104.896 -0.131667 104.052 -0.131667 103.529 0.395Z" fill="#F1F2FD" />
                                <path d="M116.924 0.395L107.548 9.72833C107.025 10.2483 107.025 11.095 107.548 11.615C108.07 12.135 108.921 12.135 109.443 11.615L118.819 2.28167C119.342 1.76167 119.342 0.915 118.819 0.395C118.29 -0.131667 117.446 -0.131667 116.924 0.395Z" fill="#F1F2FD" />
                                <path d="M130.318 0.395L120.942 9.72833C120.42 10.2483 120.42 11.095 120.942 11.615C121.465 12.135 122.315 12.135 122.838 11.615L132.214 2.28167C132.736 1.76167 132.736 0.915 132.214 0.395C131.685 -0.131667 130.841 -0.131667 130.318 0.395Z" fill="#F1F2FD" />
                            </svg>
                        </h5>
                        <h2 class="section-title__title">ABOUT UPADHYE CLASSES</h2>
                    </div><!-- section-title -->
                    <p class="about-one__content__text">
                        UPADHYE CLASSES stand at top in educational institutes especially for engineering and medical entrance examinations. It is coaching unit for students of XI and XII who aim to pursue career in respective fields. The Coaching class is serving students for last 35 years. It acts as perfect guidance center for students aspiring medical, paramedical and engineering careers. Excellent coaching and career counseling are its strong points, it helps student to go into future will absolute confidence.
                    </p>
                    <div class="about-one__box">
                        <div class="about-one__box__wrapper">
                            <div class="about-one__box__icon"><span class="icon-Presentation"></span></div>
                            <h4 class="about-one__box__title">Our Mission</h4>
                            <p class="about-one__box__text">The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                        </div>
                    </div><!-- /.icon-box -->
                    <div class="about-one__box">
                        <div class="about-one__box__wrapper">
                            <div class="about-one__box__icon"><span class="icon-Online-learning"></span></div>
                            <h4 class="about-one__box__title">Our Vision</h4>
                            <p class="about-one__box__text">The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                        </div>
                    </div><!-- /.icon-box -->
                    <a href="about.html" class="eduact-btn"><span class="eduact-btn__curve"></span>Learn More<i class="icon-arrow"></i></a><!-- /.btn -->
                </div><!-- about content end-->
            </div>
        </div>
    </div>
</section> --}}
    <!-- About End -->
    <!-- About Start -->
    {{-- <section class="about-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-two__thumb wow fadeInLeft" data-wow-delay="100ms"><!-- about thumb start -->
                    <div class="about-two__thumb__one eduact-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                        <img src="{{ asset('website/assets/images/resources/about-2-2.jpg')}}" alt="eduact">
                    </div><!-- /.about-thumb-one -->
                    <div class="about-two__thumb__two">
                        <img src="{{ asset('website/assets/images/resources/about-2-1.jpg')}}" alt="eduact">
                        <div class="about-two__thumb__two-icon"><span class="icon-business"></span></div>
                    </div><!-- /.about-thumb-two -->
                    <div class="about-two__fact">
                        <div class="about-two__fact__icon"><span class="icon-trophy"></span></div>
                        <div class="about-two__fact__content">
                            <div class="about-two__fact__count">
                                +<span class="count-box">
                                    <span class="count-text" data-stop="230" data-speed="1500"></span>
                                </span>
                            </div><!-- /.fact-one__count -->
                            <h3 class="about-two__fact__title">Awesome Awards</h3><!-- /.fact-one__title -->
                        </div>
                    </div><!-- /.fact-item -->
                    <div class="about-two__thumb__shape1 wow zoomIn" data-wow-delay="300ms">
                        <img src="{{ asset('website/assets/images/shapes/about-2-shape-1.png')}}" alt="eduact">
                    </div><!-- /.about-shape-one -->
                    <div class="about-two__thumb__shape2 wow zoomIn" data-wow-delay="400ms">
                        <img src="{{ asset('website/assets/images/shapes/about-2-shape-2.png')}}" alt="eduact">
                    </div><!-- /.about-shape-two -->
                    <div class="about-two__thumb__shape3 wow zoomIn" data-wow-delay="400ms">
                        <img src="{{ asset('website/assets/images/shapes/about-2-shape-3.png')}}" alt="eduact">
                    </div><!-- /.about-shape-two -->
                    <div class="about-two__thumb__shape4 wow zoomIn" data-wow-delay="400ms">
                        <img src="{{ asset('website/assets/images/shapes/about-2-shape-4.png')}}" alt="eduact">
                    </div><!-- /.about-shape-two -->
                </div><!-- about thumb end -->
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="100ms">
                <div class="about-two__content"><!-- about content start-->
                    <div class="section-title">
                        <h5 class="section-title__tagline">
                            About Us
                            <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 13">
                                <g clip-path="url(#clip0_324_36194)">
                                    <path d="M10.5406 6.49995L0.700562 12.1799V8.56995L4.29056 6.49995L0.700562 4.42995V0.819946L10.5406 6.49995Z" />
                                    <path d="M25.1706 6.49995L15.3306 12.1799V8.56995L18.9206 6.49995L15.3306 4.42995V0.819946L25.1706 6.49995Z" />
                                    <path d="M39.7906 6.49995L29.9506 12.1799V8.56995L33.5406 6.49995L29.9506 4.42995V0.819946L39.7906 6.49995Z" />
                                    <path d="M54.4206 6.49995L44.5806 12.1799V8.56995L48.1706 6.49995L44.5806 4.42995V0.819946L54.4206 6.49995Z" />
                                </g>
                            </svg>
                        </h5>
                        <h2 class="section-title__title">Establishing a Community that Encourages Lifelong Learning</h2>
                    </div><!-- section-title -->
                    <p class="about-two__content__text">
                        It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks
                    </p>
                    <div class="about-two__box">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 295 125">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M86 0.0805664H58C25.9675 0.0805664 0 26.048 0 58.0806V79.5806C0 104.157 19.9233 124.081 44.5 124.081H46.5C69.9721 124.081 89 105.053 89 81.5806C89 58.1085 108.028 39.0806 131.5 39.0806H268C282.912 39.0806 295 26.9923 295 12.0806C295 5.45315 289.627 0.0805664 283 0.0805664H89H86Z" />
                        </svg>
                        <div class="about-two__box__icon"><span class="icon-Presentation"></span></div>
                        <h4 class="about-two__box__title">Flexible Classes</h4>
                        <p class="about-two__box__text">
                            The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                        </p>
                    </div><!-- /.icon-box -->
                    <ul class="about-two__lists clearfix">
                        <li><span class="icon-check"></span>Free Incoming method</li>
                        <li><span class="icon-check"></span>Provide Best Support</li>
                        <li><span class="icon-check"></span>Expert Many Teacher</li>
                        <li><span class="icon-check"></span>Lifetime access</li>
                    </ul>
                    <a href="about.html" class="eduact-btn"><span class="eduact-btn__curve"></span>Discover More<i class="icon-arrow"></i></a><!-- /.btn -->
                </div><!-- about content end -->
            </div>
        </div>
    </div>
</section> --}}
    <!-- About End -->
    <!-- Service Start -->
    <section class="service-two"
        style="background-image: url({{ asset('website/assets/images/shapes/service-bg-2.jpg') }});">
        <div class="container">
            <div class="section-title text-center wow fadeInUp" data-wow-delay="100ms">
                <h5 class="section-title__tagline">
                    Our Service
                    <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 13">
                        <g clip-path="url(#clip0_324_36194)">
                            <path
                                d="M10.5406 6.49995L0.700562 12.1799V8.56995L4.29056 6.49995L0.700562 4.42995V0.819946L10.5406 6.49995Z" />
                            <path
                                d="M25.1706 6.49995L15.3306 12.1799V8.56995L18.9206 6.49995L15.3306 4.42995V0.819946L25.1706 6.49995Z" />
                            <path
                                d="M39.7906 6.49995L29.9506 12.1799V8.56995L33.5406 6.49995L29.9506 4.42995V0.819946L39.7906 6.49995Z" />
                            <path
                                d="M54.4206 6.49995L44.5806 12.1799V8.56995L48.1706 6.49995L44.5806 4.42995V0.819946L54.4206 6.49995Z" />
                        </g>
                    </svg>
                </h5>
                <h2 class="wow fadeInRight section-title__title ">COURSES OFFERED</h2>
            </div><!-- section-title -->
            <div class="row">
                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="service-two__item text-center">
                        <div class="service-two__wrapper">
                            <svg viewBox="0 0 303 117" fill="#F6F6F6" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="151" cy="-129" r="246" />
                            </svg>
                            <div class="service-two__icon">
                                <span class="icon-education"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-two__title pricing-one_ellipse">
                                <a href="team.html">IIT JEE (Mains + Advanced)</a>
                            </h3><!-- /.service-title -->
                            <p class="service-two__text">The Joint Entrance Examination, JEE (Main) comprises two papers.
                                Paper 1 is conducted for</p><!-- /.service-content -->
                            <a class="service-two__rm" href="{{ route('jeemain')}}">Read More<span
                                    class="icon-caret-right"></span></a>
                        </div>
                    </div><!-- /.service-card-one -->
                </div>
                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="service-two__item text-center">
                        <div class="service-two__wrapper">
                            <svg viewBox="0 0 303 117" fill="#F6F6F6" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="151" cy="-129" r="246" />
                            </svg>
                            <div class="service-two__icon">
                                <span class="icon-business"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-two__title pricing-one_ellipse">
                                <a href="team-become.html">NEET (Medical)</a>
                            </h3><!-- /.service-title -->
                            <p class="service-two__text">NATIONAL ELIGIBILITY CUM ENTRANCE TEST [ NEET (UG)] will be
                                conducted</p><!-- /.service-content -->
                            <a class="service-two__rm" href="team-become.html">Read More<span
                                    class="icon-caret-right"></span></a>
                        </div>
                    </div><!-- /.service-card-one -->
                </div>
                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="service-two__item text-center">
                        <div class="service-two__wrapper">
                            <svg viewBox="0 0 303 117" fill="#F6F6F6" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="151" cy="-129" r="246" />
                            </svg>
                            <div class="service-two__icon">
                                <span class="icon-webinar"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-two__title pricing-one_ellipse">
                                <a href="course.html">MHT CET</a>
                            </h3><!-- /.service-title -->
                            <p class="service-two__text">NATIONAL ELIGIBILITY CUM ENTRANCE TEST [ NEET (UG)] will be
                                conducted</p><!-- /.service-content -->
                            <a class="service-two__rm" href="course.html">Read More<span
                                    class="icon-caret-right"></span></a>
                        </div>
                    </div><!-- /.service-card-one -->
                </div>
                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="service-two__item text-center">
                        <div class="service-two__wrapper">
                            <svg viewBox="0 0 303 117" fill="#F6F6F6" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="151" cy="-129" r="246" />
                            </svg>
                            <div class="service-two__icon">
                                <span class="icon-neural"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-two__title pricing-one_ellipse">
                                <a href="about.html">Junior Division</a>
                            </h3><!-- /.service-title -->
                            <p class="service-two__text">NATIONAL ELIGIBILITY CUM ENTRANCE TEST [ NEET (UG)] will be
                                conducted by National</p><!-- /.service-content -->
                            <a class="service-two__rm" href="about.html">Read More<span
                                    class="icon-caret-right"></span></a>
                        </div>
                    </div><!-- /.service-card-one -->
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->
    <!-- Testimonial Start -->
    <section class="testimonial-three">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="testimonial-three__wrapper">
                        {{-- <div class="testimonial-three__carousel__thumb eduact-owl__carousel owl-theme owl-carousel" data-owl-options='{
                "items": 3,
                "margin": 36,
                "smartSpeed": 700,
                "loop":true,
                "autoplay": true,
                "URLhashListener":true,
                "center": true,
                "dots":false
                }'>
                        <a href="#item1" class="item" data-hash="item1"><img src="{{ asset('website/assets/images/resources/testimonial-3-1.jpg')}}" alt="eduact"></a><!-- Testimonial Item -->
                        <a href="#item2" class="item" data-hash="item2"><img src="{{ asset('website/assets/images/resources/testimonial-3-2.jpg')}}" alt="eduact"></a><!-- Testimonial Item -->
                        <a href="#item3" class="item" data-hash="item3"><img src="{{ asset('website/assets/images/resources/testimonial-3-3.jpg')}}" alt="eduact"></a><!-- Testimonial Item -->
                    </div> --}}
                        <div class="testimonial-three__carousel eduact-owl__carousel owl-theme owl-carousel"
                            data-owl-options='{
        "items": 1,
        "margin": 0,
        "smartSpeed": 700,
        "loop":true,
        "autoplay": true,
        "nav":true,
        "URLhashListener":true,
        "dots":false,
        "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow\"></span>"]
        }'>
                            <!-- Testimonial Item -->
                            <div class="item" data-hash="item1">
                                <div class="testimonial-three__item">
                                    <div class="testimonial-three__author">
                                        <img src="{{ asset('website/assets/images/resources/testimonial-3-1.jpg') }}"
                                            alt="eduact">
                                    </div><!-- testimonial-author -->

                                </div>
                            </div>
                            <!-- Testimonial Item -->
                            <!-- Testimonial Item -->
                            <div class="item" data-hash="item2">
                                <div class="testimonial-three__item">
                                    <div class="testimonial-three__author">
                                        <img src="{{ asset('website/assets/images/resources/testimonial-3-2.jpg') }}"
                                            alt="eduact">
                                    </div><!-- testimonial-author -->

                                </div>
                            </div>
                            <!-- Testimonial Item -->
                            <!-- Testimonial Item -->
                            <div class="item" data-hash="item3">
                                <div class="testimonial-three__item">
                                    <div class="testimonial-three__author">
                                        <img src="{{ asset('website/assets/images/resources/testimonial-3-3.jpg') }}"
                                            alt="eduact">
                                    </div><!-- testimonial-author -->

                                </div>
                            </div>
                            <!-- Testimonial Item -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <!-- course-details-start -->
                    <section class="course-details">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">

                                    <div class="course-details__tabs tabs-box">
                                        <ul class="course-details__tabs__lists tab-buttons list-unstyled">
                                            <li data-tab="#overview" class="tab-btn"><span>Notification</span></li>
                                            <li data-tab="#curriculum" class="tab-btn active-btn"><span>Crash
                                                    Course</span></li>
                                        </ul><!-- tab-title -->
                                        <div class="tabs-content"  style="background-image: url({{ asset('website/assets/images/shapes/category-bg-3.jpg') }}); height:300px; background-repeat: no-repeat;
                                        background-size: cover;">
                                            <div class="tab fadeInUp animated" id="overview">
                                                <div class="course-details__overview">
                                                    <p class="course-details__overview__text">
                                                        <marquee width="100%" direction="up" height="150px"
                                                            scrolldelay="250" onMouseOver="this.stop()"
                                                            onMouseOut="this.start()" scrollamount="5">

                                                            <span style="font-size:18px;">
                                                                <li>Revision Batch starts from 15th Nov 2023 <span><img
                                                                            src="{{ asset('website/assets/images/img1.png')}}"></span></li><br>

                                                                <li> MHT-CET Test Series Start from 28th September, 2023
                                                                    <span><img src="{{ asset('website/assets/images/img1.png')}}"></span>
                                                                </li>
                                                                <br>
                                                                <li> NEET Test Series Start from 30th September, 2023
                                                                    <span><img src="{{ asset('website/assets/images/img1.png')}}"></span>
                                                                </li>
                                                                <br>
                                                                <li> USAT Test series will be commence for every Sunday
                                                                    <span><img src="{{ asset('website/assets/images/img1.png')}}"></span>
                                                                </li>
                                                                <br>



                                                                <span>
                                                                    <span style="font-size:18px;">
                                                                        <li> Revision Batch starts from 15th Nov 2023
                                                                            <span><img src="{{ asset('website/assets/images/img1.png')}}"></span>
                                                                        </li><br>

                                                                        <li>MHT-CET Test Series Start from 28th September,
                                                                            2023 <span><img
                                                                                    src="{{ asset('website/assets/images/img1.png')}}"></span>
                                                                        </li> <br>
                                                                        <li>NEET Test Series Start from 30th September, 2023
                                                                            <span><img src="{{ asset('website/assets/images/img1.png')}}"></span>
                                                                        </li> <br>
                                                                        <li> USAT Test series will be commence for every
                                                                            Sunday <span><img
                                                                                    src="{{ asset('website/assets/images/img1.png')}}"></span>
                                                                        </li> <br>



                                                                        <span>
                                                        </marquee>
                                                    </p>
                                                </div>
                                            </div><!-- tab-content-overview -->
                                            <div class="tab active-tab fadeInUp animated" id="curriculum">
                                                <div class="course-details__curriculum">
                                                    <p class="course-details__curriculum__text">
                                                        <marquee width="100%" direction="up" height="150px"
                                                            scrolldelay="250" onMouseOver="this.stop()"
                                                            onMouseOut="this.start()" scrollamount="5">

                                                            <span style="font-size:18px;">
                                                                <li> Crash course Batch Starting from 7th March 2024
                                                                    <span><img src="{{ asset('website/assets/images/img1.png')}}"></span></li>
                                                                <br>

                                                                <span>
                                                                    <span style="font-size:18px;">


                                                                        <span>

                                                        </marquee>
                                                    </p>



                                                </div>
                                            </div><!-- tab-content-curriculum -->
                                        </div><!-- tab-content -->
                                    </div><!-- tabs -->
                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- course-details-end -->
                </div>
            </div>

        </div>
    </section>
    <!-- Testimonial End -->
    <!-- Counter Start -->
    {{-- <section class="fact-one" style="background-image: url({{ asset('website/assets/images/shapes/fact-bg-1.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="fact-one__item text-center">
                    <svg viewBox="0 0 303 181" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.5" y="2.00049" width="300" height="177" rx="7" stroke="#4F5DE4" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="20 20" />
                    </svg>
                    <div class="fact-one__count">
                        <span class="count-box">
                            <span class="count-text" data-stop="30.3" data-speed="1500"></span>
                        </span>k
                    </div><!-- /.fact-one__count -->
                    <h3 class="fact-one__title">Student Enrolled</h3><!-- /.fact-one__title -->
                </div><!-- /.fact-item -->
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="fact-one__item text-center">
                    <svg viewBox="0 0 303 181" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.5" y="2.00049" width="300" height="177" rx="7" stroke="#4F5DE4" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="20 20" />
                    </svg>
                    <div class="fact-one__count">
                        <span class="count-box">
                            <span class="count-text" data-stop="40.5" data-speed="1500"></span>
                        </span>k
                    </div><!-- /.fact-one__count -->
                    <h3 class="fact-one__title">Class completed</h3><!-- /.fact-one__title -->
                </div><!-- /.fact-item -->
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="fact-one__item text-center">
                    <svg viewBox="0 0 303 181" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.5" y="2.00049" width="300" height="177" rx="7" stroke="#4F5DE4" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="20 20" />
                    </svg>
                    <div class="fact-one__count">
                        <span class="count-box">
                            <span class="count-text" data-stop="88.9" data-speed="1500"></span>
                        </span>%
                    </div><!-- /.fact-one__count -->
                    <h3 class="fact-one__title">satisfaction rate</h3><!-- /.fact-one__title -->
                </div><!-- /.fact-item -->
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="fact-one__item text-center">
                    <svg viewBox="0 0 303 181" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.5" y="2.00049" width="300" height="177" rx="7" stroke="#4F5DE4" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="20 20" />
                    </svg>
                    <div class="fact-one__count">
                        <span class="count-box">
                            <span class="count-text" data-stop="6.30" data-speed="1500"></span>
                        </span>+
                    </div><!-- /.fact-one__count -->
                    <h3 class="fact-one__title">Top instructors</h3><!-- /.fact-one__title -->
                </div><!-- /.fact-item -->
            </div>
        </div>
    </div>
</section> --}}
    <!-- Counter End -->
    <!-- Course Start -->
    {{-- <section class="course-two">
    <div class="course-two__shape-top wow fadeInRight" data-wow-delay="300ms"><img src="{{ asset('website/assets/images/shapes/course-shape-1.png')}}" alt="eduact"></div>
    <div class="container wow fadeInUp" data-wow-delay="200ms">
        <div class="section-title">
            <h5 class="section-title__tagline">
                Best Course
                <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 13">
                    <g clip-path="url(#clip0_324_36194)">
                        <path d="M10.5406 6.49995L0.700562 12.1799V8.56995L4.29056 6.49995L0.700562 4.42995V0.819946L10.5406 6.49995Z" />
                        <path d="M25.1706 6.49995L15.3306 12.1799V8.56995L18.9206 6.49995L15.3306 4.42995V0.819946L25.1706 6.49995Z" />
                        <path d="M39.7906 6.49995L29.9506 12.1799V8.56995L33.5406 6.49995L29.9506 4.42995V0.819946L39.7906 6.49995Z" />
                        <path d="M54.4206 6.49995L44.5806 12.1799V8.56995L48.1706 6.49995L44.5806 4.42995V0.819946L54.4206 6.49995Z" />
                    </g>
                </svg>
            </h5>
            <h2 class="section-title__title">Featured Course On This Month</h2>
        </div><!-- section-title -->
        <div class="course-two__slider eduact-owl__carousel owl-with-shadow owl-theme owl-carousel" data-owl-options='{
    "items": 3,
    "margin": 30,
    "smartSpeed": 700,
    "loop":true,
    "autoplay": true,
    "dots":false,
    "nav":true,
    "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow\"></span>"],
    "responsive":{
        "0":{
            "items":1
        },
        "768":{
            "items": 2
        },
        "1200":{
            "items": 3
        },
        "1400":{
            "margin": 36,
            "items": 3
        }
    }
    }'>
            <div class="item">
                <div class="course-two__item">
                    <div class="course-two__thumb">
                        <img src="{{ asset('website/assets/images/course/course-2-1.png')}}" alt="eduact">
                        <a class="course-two__like" href="javascript:void(0);"><span class="icon-like"></span></a>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 353 177">
                            <path d="M37 0C16.5655 0 0 16.5655 0 37V93.4816C0 103.547 4.00259 113.295 11.7361 119.737C54.2735 155.171 112.403 177 176.496 177C240.589 177 298.718 155.171 341.261 119.737C348.996 113.295 353 103.546 353 93.4795V37C353 16.5655 336.435 0 316 0H37Z" />
                        </svg>
                    </div><!-- /.course-thumb -->
                    <div class="course-two__content">
                        <div class="course-two__time">20 Hours</div>
                        <div class="course-two__ratings">
                            <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                            <div class="course-two__ratings__reviews">(25 Reviews)</div>
                        </div>
                        <h3 class="course-two__title">
                            <a href="management-consulting.html">Management Consultants in Competitive Markets</a>
                        </h3>
                        <div class="course-two__bottom">
                            <div class="course-two__author">
                                <img src="{{ asset('website/assets/images/course/author-1.png')}}" alt="eduact">
                                <h5 class="course-two__author__name">Guy Hawkins</h5>
                                <p class="course-two__author__designation">Project Manager</p>
                            </div>
                            <div class="course-two__meta">
                                <h4 class="course-two__meta__price">$473.00</h4>
                                <p class="course-two__meta__class">15 Lessons</p>
                            </div>
                        </div>
                    </div><!-- /.course-content -->
                </div><!-- /.course-card-two -->
            </div>
            <div class="item">
                <div class="course-two__item">
                    <div class="course-two__thumb">
                        <img src="{{ asset('website/assets/images/course/course-2-2.png')}}" alt="eduact">
                        <a class="course-two__like" href="javascript:void(0);"><span class="icon-like"></span></a>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 353 177">
                            <path d="M37 0C16.5655 0 0 16.5655 0 37V93.4816C0 103.547 4.00259 113.295 11.7361 119.737C54.2735 155.171 112.403 177 176.496 177C240.589 177 298.718 155.171 341.261 119.737C348.996 113.295 353 103.546 353 93.4795V37C353 16.5655 336.435 0 316 0H37Z" />
                        </svg>
                    </div><!-- /.course-thumb -->
                    <div class="course-two__content">
                        <div class="course-two__time">20 Hours</div>
                        <div class="course-two__ratings">
                            <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                            <div class="course-two__ratings__reviews">(25 Reviews)</div>
                        </div>
                        <h3 class="course-two__title">
                            <a href="web-development.html">The Ultimate Developer Course For Future Learner</a>
                        </h3>
                        <div class="course-two__bottom">
                            <div class="course-two__author">
                                <img src="{{ asset('website/assets/images/course/author-1.png')}}" alt="eduact">
                                <h5 class="course-two__author__name">Guy Hawkins</h5>
                                <p class="course-two__author__designation">Project Manager</p>
                            </div>
                            <div class="course-two__meta">
                                <h4 class="course-two__meta__price">$473.00</h4>
                                <p class="course-two__meta__class">15 Lessons</p>
                            </div>
                        </div>
                    </div><!-- /.course-content -->
                </div><!-- /.course-card-two -->
            </div>
            <div class="item">
                <div class="course-two__item">
                    <div class="course-two__thumb">
                        <img src="{{ asset('website/assets/images/course/course-2-3.png')}}" alt="eduact">
                        <a class="course-two__like" href="javascript:void(0);"><span class="icon-like"></span></a>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 353 177">
                            <path d="M37 0C16.5655 0 0 16.5655 0 37V93.4816C0 103.547 4.00259 113.295 11.7361 119.737C54.2735 155.171 112.403 177 176.496 177C240.589 177 298.718 155.171 341.261 119.737C348.996 113.295 353 103.546 353 93.4795V37C353 16.5655 336.435 0 316 0H37Z" />
                        </svg>
                    </div><!-- /.course-thumb -->
                    <div class="course-two__content">
                        <div class="course-two__time">20 Hours</div>
                        <div class="course-two__ratings">
                            <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                            <div class="course-two__ratings__reviews">(25 Reviews)</div>
                        </div>
                        <h3 class="course-two__title">
                            <a href="frontend-development.html">The Special HTML &amp; CSS Bootcamp Edition</a>
                        </h3>
                        <div class="course-two__bottom">
                            <div class="course-two__author">
                                <img src="{{ asset('website/assets/images/course/author-1.png')}}" alt="eduact">
                                <h5 class="course-two__author__name">Guy Hawkins</h5>
                                <p class="course-two__author__designation">Project Manager</p>
                            </div>
                            <div class="course-two__meta">
                                <h4 class="course-two__meta__price">$473.00</h4>
                                <p class="course-two__meta__class">15 Lessons</p>
                            </div>
                        </div>
                    </div><!-- /.course-content -->
                </div><!-- /.course-card-two -->
            </div>
            <div class="item">
                <div class="course-two__item">
                    <div class="course-two__thumb">
                        <img src="{{ asset('website/assets/images/course/course-2-4.png')}}" alt="eduact">
                        <a class="course-two__like" href="javascript:void(0);"><span class="icon-like"></span></a>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 353 177">
                            <path d="M37 0C16.5655 0 0 16.5655 0 37V93.4816C0 103.547 4.00259 113.295 11.7361 119.737C54.2735 155.171 112.403 177 176.496 177C240.589 177 298.718 155.171 341.261 119.737C348.996 113.295 353 103.546 353 93.4795V37C353 16.5655 336.435 0 316 0H37Z" />
                        </svg>
                    </div><!-- /.course-thumb -->
                    <div class="course-two__content">
                        <div class="course-two__time">20 Hours</div>
                        <div class="course-two__ratings">
                            <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                            <div class="course-two__ratings__reviews">(25 Reviews)</div>
                        </div>
                        <h3 class="course-two__title">
                            <a href="uiux-design.html">Building Responsive User Interfaces to Implementing</a>
                        </h3>
                        <div class="course-two__bottom">
                            <div class="course-two__author">
                                <img src="{{ asset('website/assets/images/course/author-1.png')}}" alt="eduact">
                                <h5 class="course-two__author__name">Guy Hawkins</h5>
                                <p class="course-two__author__designation">Project Manager</p>
                            </div>
                            <div class="course-two__meta">
                                <h4 class="course-two__meta__price">$473.00</h4>
                                <p class="course-two__meta__class">15 Lessons</p>
                            </div>
                        </div>
                    </div><!-- /.course-content -->
                </div><!-- /.course-card-two -->
            </div>
            <div class="item">
                <div class="course-two__item">
                    <div class="course-two__thumb">
                        <img src="assets/images/course/course-2-5.png" alt="eduact">
                        <a class="course-two__like" href="javascript:void(0);"><span class="icon-like"></span></a>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 353 177">
                            <path d="M37 0C16.5655 0 0 16.5655 0 37V93.4816C0 103.547 4.00259 113.295 11.7361 119.737C54.2735 155.171 112.403 177 176.496 177C240.589 177 298.718 155.171 341.261 119.737C348.996 113.295 353 103.546 353 93.4795V37C353 16.5655 336.435 0 316 0H37Z" />
                        </svg>
                    </div><!-- /.course-thumb -->
                    <div class="course-two__content">
                        <div class="course-two__time">20 Hours</div>
                        <div class="course-two__ratings">
                            <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                            <div class="course-two__ratings__reviews">(25 Reviews)</div>
                        </div>
                        <h3 class="course-two__title">
                            <a href="digital-photography.html">Photography Crash Course for Beginners</a>
                        </h3>
                        <div class="course-two__bottom">
                            <div class="course-two__author">
                                <img src="assets/images/course/author-1.png" alt="eduact">
                                <h5 class="course-two__author__name">Guy Hawkins</h5>
                                <p class="course-two__author__designation">Project Manager</p>
                            </div>
                            <div class="course-two__meta">
                                <h4 class="course-two__meta__price">$473.00</h4>
                                <p class="course-two__meta__class">15 Lessons</p>
                            </div>
                        </div>
                    </div><!-- /.course-content -->
                </div><!-- /.course-card-two -->
            </div>
            <div class="item">
                <div class="course-two__item">
                    <div class="course-two__thumb">
                        <img src="assets/images/course/course-2-6.png" alt="eduact">
                        <a class="course-two__like" href="javascript:void(0);"><span class="icon-like"></span></a>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 353 177">
                            <path d="M37 0C16.5655 0 0 16.5655 0 37V93.4816C0 103.547 4.00259 113.295 11.7361 119.737C54.2735 155.171 112.403 177 176.496 177C240.589 177 298.718 155.171 341.261 119.737C348.996 113.295 353 103.546 353 93.4795V37C353 16.5655 336.435 0 316 0H37Z" />
                        </svg>
                    </div><!-- /.course-thumb -->
                    <div class="course-two__content">
                        <div class="course-two__time">20 Hours</div>
                        <div class="course-two__ratings">
                            <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                            <div class="course-two__ratings__reviews">(25 Reviews)</div>
                        </div>
                        <h3 class="course-two__title">
                            <a href="online-business.html">Sales and Marketing For Online Businesses</a>
                        </h3>
                        <div class="course-two__bottom">
                            <div class="course-two__author">
                                <img src="assets/images/course/author-1.png" alt="eduact">
                                <h5 class="course-two__author__name">Guy Hawkins</h5>
                                <p class="course-two__author__designation">Project Manager</p>
                            </div>
                            <div class="course-two__meta">
                                <h4 class="course-two__meta__price">$473.00</h4>
                                <p class="course-two__meta__class">15 Lessons</p>
                            </div>
                        </div>
                    </div><!-- /.course-content -->
                </div><!-- /.course-card-two -->
            </div>
        </div>
    </div>
    <div class="course-two__shape-bottom wow fadeInLeft" data-wow-delay="400ms"><img src="assets/images/shapes/course-shape-2.png" alt="eduact"></div>
</section> --}}
    <!-- Course End -->
    <!-- Category Start -->
    <section class="category-two" style="background-image: url(assets/images/shapes/category-bg-2.png);">
        <div class="container wow fadeInUp" data-wow-delay="200ms">
            <div class="section-title text-center">
                <h5 class="section-title__tagline">
                    Our Courses
                    <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 13">
                        <g clip-path="url(#clip0_324_36194)">
                            <path
                                d="M10.5406 6.49995L0.700562 12.1799V8.56995L4.29056 6.49995L0.700562 4.42995V0.819946L10.5406 6.49995Z" />
                            <path
                                d="M25.1706 6.49995L15.3306 12.1799V8.56995L18.9206 6.49995L15.3306 4.42995V0.819946L25.1706 6.49995Z" />
                            <path
                                d="M39.7906 6.49995L29.9506 12.1799V8.56995L33.5406 6.49995L29.9506 4.42995V0.819946L39.7906 6.49995Z" />
                            <path
                                d="M54.4206 6.49995L44.5806 12.1799V8.56995L48.1706 6.49995L44.5806 4.42995V0.819946L54.4206 6.49995Z" />
                        </g>
                    </svg>
                </h5>
                <h2 class="section-title__title">Upcoming courses</h2>
            </div><!-- section-title -->
            <div class="category-two__slider eduact-owl__carousel owl-theme owl-carousel"
                data-owl-options='{
    "items": 4,
    "margin": 1,
    "smartSpeed": 700,
    "loop":true,
    "autoplay": true,
    "nav":false,
    "dots":false,
    "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow\"></span>"],
    "responsive":{
        "0":{
            "items":1
        },
        "670":{
            "items": 2
        },
        "992":{
            "items": 3
        },
        "1200":{
            "items": 4
        }
    }
    }'>
                <div class="item">
                    <div class="category-two__item">
                        <div class="category-two__icon">
                            <span class="icon-portfolio"></span>
                        </div><!-- /.category-icon -->
                        <h3 class="category-two__title"><a href="about.html">MHT-CET Test Series Start from 28th
                                September, 2023</a></h3><!-- /.category-title -->
                    </div><!-- /.category-card-one -->
                </div>
                <div class="item">
                    <div class="category-two__item">
                        <div class="category-two__icon">
                            <span class="icon-computer-science"></span>
                        </div><!-- /.category-icon -->
                        <h3 class="category-two__title"><a href="{{('neet')}}">NEET Test Series Start from 30th September,
                                2023</a></h3><!-- /.category-title -->
                    </div><!-- /.category-card-one -->
                </div>
                <div class="item">
                    <div class="category-two__item">
                        <div class="category-two__icon">
                            <span class="icon-chart-up"></span>
                        </div><!-- /.category-icon -->
                        <h3 class="category-two__title"><a href="about.html">JEE Mains Test Series Start from 16st
                                September, 2023</a></h3><!-- /.category-title -->
                    </div><!-- /.category-card-one -->
                </div>
                <div class="item">
                    <div class="category-two__item">
                        <div class="category-two__icon">
                            <span class="icon-art"></span>
                        </div><!-- /.category-icon -->
                        <h3 class="category-two__title"><a href="about.html">Revision Batch starts from 15th Nov 2023</a>
                        </h3><!-- /.category-title -->
                    </div><!-- /.category-card-one -->
                </div>
            </div>
        </div>
    </section>
    <!-- Category End -->
    <!-- Video Start -->
    <section class="video-one">
        <div class="container">
            <div class="video-one__bg"
                style="background-image: url({{ asset('website/assets/images/backgrounds/video-bg-1.jpg') }});">
                <div class="video-one__shape"
                    style="background-image: url({{ asset('website/assets/images/shapes/video-shape-1.png') }});"></div>
                <div class="video-one__shape2"
                    style="background-image: url({{ asset('website/assets/images/shapes/video-shape-2.png') }});"></div>
                <div class="row">
                    <div class="col-lg-6 col-md-7 wow fadeInLeft" data-wow-delay="200ms">
                        <h3 class="video-one__title">REASONS TO CHOOSE UPADHYE CLASSES</h3>
                        <a href="contact.html" class="eduact-btn eduact-btn-second"><span
                                class="eduact-btn__curve"></span>Discover More<i class="icon-arrow"></i></a>
                    </div>
                    <div class="col-lg-6 col-md-5 wow fadeInRight" data-wow-delay="200ms">
                        <div class="video-one__btn">
                            <img src="{{ asset('website/assets/images/backgrounds/video-btn-bg-1.png') }}"
                                alt="eduact" />
                              
                            <a href="https://www.youtube.com/embed/v=SR_ZaI1crIY" class="video-popup">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video End -->
    <!-- Team Start -->
    {{-- <section class="team-two" style="background-image: url({{ asset('website/assets/images/shapes/team-bg-2.png')}});">
    <div class="container">
        <div class="section-title text-center wow fadeInUp" data-wow-delay="100ms">
            <h5 class="section-title__tagline">
                Our Team
                <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 13">
                    <g clip-path="url(#clip0_324_36194)">
                        <path d="M10.5406 6.49995L0.700562 12.1799V8.56995L4.29056 6.49995L0.700562 4.42995V0.819946L10.5406 6.49995Z" />
                        <path d="M25.1706 6.49995L15.3306 12.1799V8.56995L18.9206 6.49995L15.3306 4.42995V0.819946L25.1706 6.49995Z" />
                        <path d="M39.7906 6.49995L29.9506 12.1799V8.56995L33.5406 6.49995L29.9506 4.42995V0.819946L39.7906 6.49995Z" />
                        <path d="M54.4206 6.49995L44.5806 12.1799V8.56995L48.1706 6.49995L44.5806 4.42995V0.819946L54.4206 6.49995Z" />
                    </g>
                </svg>
            </h5>
            <h2 class="section-title__title">Meet Our Professional Team<br> Members</h2>
        </div><!-- section-title -->
    </div>
</section> --}}
    <section class="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="blog-two__item">
                        <div class="blog-two__image">
                            <img src="{{ asset('website/assets/images/blog/blog-2-1.jpg') }}" alt="eduact">
                            <a href="blog-details-right.html"></a>
                        </div><!-- /.blog-image -->
                        <div class="blog-two__content">
                            {{-- <div class="blog-two__top-meta">
                            <div class="blog-two__cats"><a href="blog-list-right.html">Development</a></div><!-- /.blog-cats -->
                            <div class="blog-two__date">26 Mar, 2023</div><!-- /.blog-date -->
                        </div> --}}
                            <h3 class="blog-two__title">
                                <a href="blog-details-right.html">Experienced & Qualified Faculty Team</a>
                            </h3><!-- /.blog-title -->
                            <span class="service-two__text mb-3">
                                Upadhye Classes's faculty team has a vast experience of teaching Lakhs of students who
                                prepared for JEE-Advanced, JEE-Main, KVPY, NTSE etc.
                            </span>
                            {{-- <div class="blog-two__meta mt-3">
                            <div class="blog-two__meta__author">
                                <img src="{{ asset('website/assets/images/blog/author-1.png')}}" alt="eduact" />
                                <a href="blog-list-right.html">Darrell Steward</a>
                                Fronted Developer
                            </div>
                            <a class="blog-two__rm" href="blog-details-right.html"><span class="icon-arrow"></span></a><!-- /.read-more-btn -->
                        </div> --}}
                            <!-- /.blog-meta -->
                        </div><!-- /.blog-content -->
                    </div><!-- /.blog-card-one -->
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="blog-two__item">
                        <div class="blog-two__image">
                            <img src="{{ asset('website/assets/images/blog/blog-2-2.jpg') }}" alt="eduact">
                            <a href="blog-details.html"></a>
                        </div><!-- /.blog-image -->
                        <div class="blog-two__content">
                            {{-- <div class="blog-two__top-meta">
                            <div class="blog-two__cats"><a href="blog-list.html">Development</a></div><!-- /.blog-cats -->
                            <div class="blog-two__date">26 Mar, 2023</div><!-- /.blog-date -->
                        </div> --}}
                            <h3 class="blog-two__title">
                                <a href="blog-details.html">Academic Performance Analysis</a>
                            </h3><!-- /.blog-title -->
                            <span class="service-two__text mb-3">
                                Students performance analysis is done through their performance in the periodic tests.
                                Students are motivated to perform well in the upcoming tests.
                            </span>
                            {{-- <div class="blog-two__meta">
                            <div class="blog-two__meta__author">
                                <img src="{{ asset('website/assets/images/blog/author-1.png')}}" alt="eduact" />
                                <a href="blog-list.html">Darrell Steward</a>
                                Fronted Developer
                            </div>
                            <a class="blog-two__rm" href="blog-details.html"><span class="icon-arrow"></span></a><!-- /.read-more-btn -->
                        </div><!-- /.blog-meta --> --}}
                        </div><!-- /.blog-content -->
                    </div><!-- /.blog-card-one -->
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="blog-two__item">
                        <div class="blog-two__image">
                            <img src="{{ asset('website/assets/images/blog/blog-2-3.jpg') }}" alt="eduact">
                            <a href="blog-details-left.html"></a>
                        </div><!-- /.blog-image -->
                        <div class="blog-two__content">
                            {{-- <div class="blog-two__top-meta">
                            <div class="blog-two__cats"><a href="blog-list-left.html">Development</a></div><!-- /.blog-cats -->
                            <div class="blog-two__date">26 Mar, 2023</div><!-- /.blog-date -->
                        </div> --}}
                            <h3 class="blog-two__title">
                                <a href="blog-details-left.html">Structured Course Planning</a>
                            </h3><!-- /.blog-title -->
                            <span class="service-two__text mb-3">
                                Course planning is prepared well in advance for each & every course. The course Planner
                                prepared from this planning is provided to students after joining the courses.
                            </span>
                            {{-- <div class="blog-two__meta">
                            <div class="blog-two__meta__author">
                                <img src="{{ asset('website/assets/images/blog/author-1.png')}}" alt="eduact" />
                                <a href="blog-list-left.html">Darrell Steward</a>
                                Fronted Developer
                            </div>
                            <a class="blog-two__rm" href="blog-details-left.html"><span class="icon-arrow"></span></a><!-- /.read-more-btn -->
                        </div><!-- /.blog-meta --> --}}
                        </div><!-- /.blog-content -->
                    </div><!-- /.blog-card-one -->
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="blog-two__item">
                        <div class="blog-two__image">
                            <img src="{{ asset('website/assets/images/blog/blog-2-4.jpg') }}" alt="eduact">
                            <a href="blog-details-right.html"></a>
                        </div><!-- /.blog-image -->
                        <div class="blog-two__content">
                            {{-- <div class="blog-two__top-meta">
                            <div class="blog-two__cats"><a href="blog-list-right.html">Development</a></div><!-- /.blog-cats -->
                            <div class="blog-two__date">26 Mar, 2023</div><!-- /.blog-date -->
                        </div> --}}
                            <h3 class="blog-two__title">
                                <a href="blog-details-right.html">Periodic Testing</a>
                            </h3><!-- /.blog-title -->
                            <span class="service-two__text mb-3">
                                Periodic tests are organized to check the preparation of the student & provide it much
                                needed impetus. The tests are conducted on Part Syllabus, Cumulative Syllabus & Full
                                Syllabus basis.
                            </span>
                            {{-- <div class="blog-two__meta">
                            <div class="blog-two__meta__author">
                                <img src="{{ asset('website/assets/images/blog/author-1.png')}}" alt="eduact" />
                                <a href="blog-list-right.html">Darrell Steward</a>
                                Fronted Developer
                            </div>
                            <a class="blog-two__rm" href="blog-details-right.html"><span class="icon-arrow"></span></a><!-- /.read-more-btn -->
                        </div><!-- /.blog-meta --> --}}
                        </div><!-- /.blog-content -->
                    </div><!-- /.blog-card-one -->
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="blog-two__item">
                        <div class="blog-two__image">
                            <img src="{{ asset('website/assets/images/blog/blog-2-5.jpg') }}" alt="eduact">
                            <a href="blog-details.html"></a>
                        </div><!-- /.blog-image -->
                        <div class="blog-two__content">
                            {{-- <div class="blog-two__top-meta">
                            <div class="blog-two__cats"><a href="blog-list.html">Development</a></div><!-- /.blog-cats -->
                            <div class="blog-two__date">26 Mar, 2023</div><!-- /.blog-date -->
                        </div> --}}
                            <h3 class="blog-two__title">
                                <a href="blog-details.html">Study Material (Modules & DPPs)</a>
                            </h3><!-- /.blog-title -->
                            <span class="service-two__text mb-3">
                                Study Material is provided in terms of Sheets, Daily Practice Problems (DPPs) etc. Topics
                                wise Sheets has the theory content about the topic followed by solved, unsolved examples.
                            </span>
                            {{-- <div class="blog-two__meta">
                            <div class="blog-two__meta__author">
                                <img src="{{ asset('website/assets/images/blog/author-1.png')}}" alt="eduact" />
                                <a href="blog-list.html">Darrell Steward</a>
                                Fronted Developer
                            </div>
                            <a class="blog-two__rm" href="blog-details.html"><span class="icon-arrow"></span></a><!-- /.read-more-btn -->
                        </div><!-- /.blog-meta --> --}}
                        </div><!-- /.blog-content -->
                    </div><!-- /.blog-card-one -->
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                    <div class="blog-two__item">
                        <div class="blog-two__image">
                            <img src="{{ asset('website/assets/images/blog/blog-2-6.jpg') }}" alt="eduact">
                            <a href="blog-details-left.html"></a>
                        </div><!-- /.blog-image -->
                        <div class="blog-two__content">
                            {{-- <div class="blog-two__top-meta">
                            <div class="blog-two__cats"><a href="blog-list-left.html">Development</a></div><!-- /.blog-cats -->
                            <div class="blog-two__date">26 Mar, 2023</div><!-- /.blog-date -->
                        </div> --}}
                            <h3 class="blog-two__title">
                                <a href="blog-details-left.html">Regular Class & Doubt Class</a>
                            </h3><!-- /.blog-title -->
                            <span class="service-two__text mb-3">
                                Regular Classes are conducted as per Time Table which is provided to the students in
                                advance. Students need to take maximum benefit/learning from the regular classes.
                            </span>
                            {{-- <div class="blog-two__meta">
                            <div class="blog-two__meta__author">
                                <img src="{{ asset('website/assets/images/blog/author-1.png')}}" alt="eduact" />
                                <a href="blog-list-left.html">Darrell Steward</a>
                                Fronted Developer
                            </div>
                            <a class="blog-two__rm" href="blog-details-left.html"><span class="icon-arrow"></span></a><!-- /.read-more-btn -->
                        </div><!-- /.blog-meta --> --}}
                        </div><!-- /.blog-content -->
                    </div><!-- /.blog-card-one -->
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-12">
                    <ul class="blog-page__pagination clearfix">
                        <li><a href="blog-list-left.html" class="active">1</a></li>
                        <li><a href="blog-list-right.html">2</a></li>
                        <li class="next"><a href="blog-list.html"><span class="icon-caret-right"></span></a></li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- Testimonial Start -->
    <section class="testimonial-two"
        style="background-image: url({{ asset('website/assets/images/shapes/testimonial-bg-2.png') }});">
        <div class="container">
            <div class="section-title text-center">
                <h5 class="section-title__tagline">
                    Testimonial
                    <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 13">
                        <g clip-path="url(#clip0_324_36194)">
                            <path
                                d="M10.5406 6.49995L0.700562 12.1799V8.56995L4.29056 6.49995L0.700562 4.42995V0.819946L10.5406 6.49995Z" />
                            <path
                                d="M25.1706 6.49995L15.3306 12.1799V8.56995L18.9206 6.49995L15.3306 4.42995V0.819946L25.1706 6.49995Z" />
                            <path
                                d="M39.7906 6.49995L29.9506 12.1799V8.56995L33.5406 6.49995L29.9506 4.42995V0.819946L39.7906 6.49995Z" />
                            <path
                                d="M54.4206 6.49995L44.5806 12.1799V8.56995L48.1706 6.49995L44.5806 4.42995V0.819946L54.4206 6.49995Z" />
                        </g>
                    </svg>
                </h5>
                <h2 class="section-title__title">What Our Student Feedback</h2>
            </div><!-- section-title -->
            <div class="testimonial-two__carousel eduact-owl__carousel owl-with-shadow owl-theme owl-carousel"
                data-owl-options='{
    "items": 3,
    "margin": 30,
    "smartSpeed": 700,
    "loop":true,
    "autoplay": true,
    "center": true,
    "nav":true,
    "dots":false,
    "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow\"></span>"],
    "responsive":{
        "0":{
            "items":1,
            "margin": 0
        },
        "700":{
            "items": 1
        },
        "992":{
            "items": 3
        },
        "1200":{
            "margin": 36,
            "items": 3
        }
    }
    }'>
                <!-- Testimonial Item -->
                <div class="item">
                    <div class="testimonial-two__item">
                        <div class="testimonial-two__item-inner"
                            style="background-image: url({{ asset('website/assets/images/shapes/testimonial-shape-2.png') }});">
                            <div class="testimonial-two__ratings">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="testimonial-two__quote">
                                "I am very thankful to all the
                                teachers from Upadhye Classes,
                                who supported me academically
                                and otherwise. The technical
                                concept were cleared with the
                                help of various presentations &
                                models in the class."
                            </div><!-- testimonial-quote -->
                            <div class="testimonial-two__meta">
                                <img src="{{ asset('website/assets/images/resources/testimonial-2-author-1.png') }}"
                                    alt="eduact">
                                <h5 class="testimonial-two__title">Vaibhav Aher</h5>
                                <span class="testimonial-two__designation">IIT (Advanced)</span>
                            </div><!-- testimonial-meta -->
                            <svg viewBox="0 0 416 249" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_324_36064)">
                                    <path
                                        d="M296.443 526.351C291.626 517.219 286.22 508.4 280.351 499.907C274.064 490.803 267.257 482.07 260.072 473.662C252.166 464.412 243.802 455.551 235.132 447.015C225.525 437.563 215.537 428.493 205.305 419.728C193.907 409.977 182.21 400.591 170.293 391.477C157.025 381.325 143.506 371.508 129.809 361.934C114.574 351.278 99.1373 340.919 83.5681 330.773C66.2815 319.506 48.8344 308.493 31.2774 297.659C11.8453 285.67 -7.71089 273.899 -27.3627 262.269C-49.0253 249.452 -70.8004 236.801 -92.632 224.268C-112.751 212.719 -132.553 200.599 -151.773 187.605C-167.672 176.859 -183.186 165.529 -198.079 153.411C-210.223 143.528 -221.954 133.126 -233.015 122.043C-242.024 113.01 -250.588 103.518 -258.425 93.4561C-264.651 85.4701 -270.424 77.1028 -275.483 68.3262C-279.503 61.3457 -283.079 54.0865 -285.969 46.5676C-288.192 40.7857 -290.021 34.8356 -291.27 28.7606C-292.209 24.2029 -292.822 19.5763 -292.986 14.9289C-293.101 11.7908 -293.016 8.64358 -292.628 5.53246C-292.424 3.91736 -292.165 2.29171 -291.728 0.72597C-291.679 0.529505 -291.617 0.330416 -291.559 0.139576C-291.56 1.6512 -291.422 3.17245 -291.258 4.67452C-290.799 8.90587 -289.976 13.0825 -288.939 17.2111C-287.309 23.703 -285.103 30.0422 -282.479 36.194C-278.927 44.5375 -274.604 52.5471 -269.706 60.1738C-263.507 69.8349 -256.393 78.8972 -248.649 87.3719C-238.942 97.9926 -228.245 107.691 -216.918 116.571C-203.009 127.487 -188.159 137.18 -172.79 145.896C-153.752 156.686 -133.883 165.972 -113.594 174.141C-88.9088 184.08 -63.5671 192.361 -37.9282 199.441C-11.3405 206.779 15.589 212.887 42.7613 217.66C67.4471 221.999 92.326 225.272 117.29 227.514C141.053 229.653 164.9 230.869 188.764 231.226C211.313 231.559 233.873 231.113 256.392 229.925C277.174 228.838 297.929 227.116 318.614 224.801C337.536 222.679 356.4 220.056 375.184 216.945C391.68 214.211 408.11 211.094 424.452 207.59C438.374 204.605 452.242 201.341 466.025 197.777C476.913 194.966 487.745 191.97 498.512 188.749C506.072 186.491 513.591 184.133 521.068 181.624C524.972 180.313 528.87 178.974 532.737 177.541C533.207 177.365 533.677 177.189 534.148 177.014L296.443 526.351Z" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Item -->
                <!-- Testimonial Item -->
                <div class="item">
                    <div class="testimonial-two__item">
                        <div class="testimonial-two__item-inner"
                            style="background-image: url({{ asset('website/assets/images/shapes/testimonial-shape-2.png') }});">
                            <div class="testimonial-two__ratings">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="testimonial-two__quote">
                                "My Success is due to in depth teaching & concept clearity by teachers"
                            </div><!-- testimonial-quote -->
                            <div class="testimonial-two__meta">
                                <img src="{{ asset('website/assets/images/resources/testimonial-2-author-2.png') }}"
                                    alt="eduact">
                                <h5 class="testimonial-two__title">Manali Paranjape</h5>
                                <span class="testimonial-two__designation">COE, Pune</span>
                            </div><!-- testimonial-meta -->
                            <svg viewBox="0 0 416 249" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_324_36064)">
                                    <path
                                        d="M296.443 526.351C291.626 517.219 286.22 508.4 280.351 499.907C274.064 490.803 267.257 482.07 260.072 473.662C252.166 464.412 243.802 455.551 235.132 447.015C225.525 437.563 215.537 428.493 205.305 419.728C193.907 409.977 182.21 400.591 170.293 391.477C157.025 381.325 143.506 371.508 129.809 361.934C114.574 351.278 99.1373 340.919 83.5681 330.773C66.2815 319.506 48.8344 308.493 31.2774 297.659C11.8453 285.67 -7.71089 273.899 -27.3627 262.269C-49.0253 249.452 -70.8004 236.801 -92.632 224.268C-112.751 212.719 -132.553 200.599 -151.773 187.605C-167.672 176.859 -183.186 165.529 -198.079 153.411C-210.223 143.528 -221.954 133.126 -233.015 122.043C-242.024 113.01 -250.588 103.518 -258.425 93.4561C-264.651 85.4701 -270.424 77.1028 -275.483 68.3262C-279.503 61.3457 -283.079 54.0865 -285.969 46.5676C-288.192 40.7857 -290.021 34.8356 -291.27 28.7606C-292.209 24.2029 -292.822 19.5763 -292.986 14.9289C-293.101 11.7908 -293.016 8.64358 -292.628 5.53246C-292.424 3.91736 -292.165 2.29171 -291.728 0.72597C-291.679 0.529505 -291.617 0.330416 -291.559 0.139576C-291.56 1.6512 -291.422 3.17245 -291.258 4.67452C-290.799 8.90587 -289.976 13.0825 -288.939 17.2111C-287.309 23.703 -285.103 30.0422 -282.479 36.194C-278.927 44.5375 -274.604 52.5471 -269.706 60.1738C-263.507 69.8349 -256.393 78.8972 -248.649 87.3719C-238.942 97.9926 -228.245 107.691 -216.918 116.571C-203.009 127.487 -188.159 137.18 -172.79 145.896C-153.752 156.686 -133.883 165.972 -113.594 174.141C-88.9088 184.08 -63.5671 192.361 -37.9282 199.441C-11.3405 206.779 15.589 212.887 42.7613 217.66C67.4471 221.999 92.326 225.272 117.29 227.514C141.053 229.653 164.9 230.869 188.764 231.226C211.313 231.559 233.873 231.113 256.392 229.925C277.174 228.838 297.929 227.116 318.614 224.801C337.536 222.679 356.4 220.056 375.184 216.945C391.68 214.211 408.11 211.094 424.452 207.59C438.374 204.605 452.242 201.341 466.025 197.777C476.913 194.966 487.745 191.97 498.512 188.749C506.072 186.491 513.591 184.133 521.068 181.624C524.972 180.313 528.87 178.974 532.737 177.541C533.207 177.365 533.677 177.189 534.148 177.014L296.443 526.351Z" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Item -->
                <!-- Testimonial Item -->
                <div class="item">
                    <div class="testimonial-two__item">
                        <div class="testimonial-two__item-inner"
                            style="background-image: url({{ asset('website/assets/images/shapes/testimonial-shape-2.png') }});">
                            <div class="testimonial-two__ratings">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="testimonial-two__quote">
                                "Upadhye Classes taught me to
                                addict to success & maintain
                                Success."
                            </div><!-- testimonial-quote -->
                            <div class="testimonial-two__meta">
                                <img src="{{ asset('website/assets/images/resources/testimonial-2-author-3.png') }}"
                                    alt="eduact">
                                <h5 class="testimonial-two__title">Sanket Sonawane</h5>
                                <span class="testimonial-two__designation">COE, Pune</span>
                            </div><!-- testimonial-meta -->
                            <svg viewBox="0 0 416 249" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_324_36064)">
                                    <path
                                        d="M296.443 526.351C291.626 517.219 286.22 508.4 280.351 499.907C274.064 490.803 267.257 482.07 260.072 473.662C252.166 464.412 243.802 455.551 235.132 447.015C225.525 437.563 215.537 428.493 205.305 419.728C193.907 409.977 182.21 400.591 170.293 391.477C157.025 381.325 143.506 371.508 129.809 361.934C114.574 351.278 99.1373 340.919 83.5681 330.773C66.2815 319.506 48.8344 308.493 31.2774 297.659C11.8453 285.67 -7.71089 273.899 -27.3627 262.269C-49.0253 249.452 -70.8004 236.801 -92.632 224.268C-112.751 212.719 -132.553 200.599 -151.773 187.605C-167.672 176.859 -183.186 165.529 -198.079 153.411C-210.223 143.528 -221.954 133.126 -233.015 122.043C-242.024 113.01 -250.588 103.518 -258.425 93.4561C-264.651 85.4701 -270.424 77.1028 -275.483 68.3262C-279.503 61.3457 -283.079 54.0865 -285.969 46.5676C-288.192 40.7857 -290.021 34.8356 -291.27 28.7606C-292.209 24.2029 -292.822 19.5763 -292.986 14.9289C-293.101 11.7908 -293.016 8.64358 -292.628 5.53246C-292.424 3.91736 -292.165 2.29171 -291.728 0.72597C-291.679 0.529505 -291.617 0.330416 -291.559 0.139576C-291.56 1.6512 -291.422 3.17245 -291.258 4.67452C-290.799 8.90587 -289.976 13.0825 -288.939 17.2111C-287.309 23.703 -285.103 30.0422 -282.479 36.194C-278.927 44.5375 -274.604 52.5471 -269.706 60.1738C-263.507 69.8349 -256.393 78.8972 -248.649 87.3719C-238.942 97.9926 -228.245 107.691 -216.918 116.571C-203.009 127.487 -188.159 137.18 -172.79 145.896C-153.752 156.686 -133.883 165.972 -113.594 174.141C-88.9088 184.08 -63.5671 192.361 -37.9282 199.441C-11.3405 206.779 15.589 212.887 42.7613 217.66C67.4471 221.999 92.326 225.272 117.29 227.514C141.053 229.653 164.9 230.869 188.764 231.226C211.313 231.559 233.873 231.113 256.392 229.925C277.174 228.838 297.929 227.116 318.614 224.801C337.536 222.679 356.4 220.056 375.184 216.945C391.68 214.211 408.11 211.094 424.452 207.59C438.374 204.605 452.242 201.341 466.025 197.777C476.913 194.966 487.745 191.97 498.512 188.749C506.072 186.491 513.591 184.133 521.068 181.624C524.972 180.313 528.87 178.974 532.737 177.541C533.207 177.365 533.677 177.189 534.148 177.014L296.443 526.351Z" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Item -->
                <!-- Testimonial Item -->
                <div class="item">
                    <div class="testimonial-two__item">
                        <div class="testimonial-two__item-inner"
                            style="background-image: url({{ asset('website/assets/images/shapes/testimonial-shape-2.png') }});">
                            <div class="testimonial-two__ratings">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="testimonial-two__quote">
                                "It's a nice place to improve skills
                                and knowledge for people prepareing
                                for engineering entrance..
                                personal assistance is given to everyone"
                            </div><!-- testimonial-quote -->
                            <div class="testimonial-two__meta">
                                <img src="{{ asset('website/assets/images/resources/testimonial-2-author-3.png') }}"
                                    alt="eduact">
                                <h5 class="testimonial-two__title">Dhananjay Deore</h5>
                                <span class="testimonial-two__designation">NIT, Nagpur</span>
                            </div><!-- testimonial-meta -->
                            <svg viewBox="0 0 416 249" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_324_36064)">
                                    <path
                                        d="M296.443 526.351C291.626 517.219 286.22 508.4 280.351 499.907C274.064 490.803 267.257 482.07 260.072 473.662C252.166 464.412 243.802 455.551 235.132 447.015C225.525 437.563 215.537 428.493 205.305 419.728C193.907 409.977 182.21 400.591 170.293 391.477C157.025 381.325 143.506 371.508 129.809 361.934C114.574 351.278 99.1373 340.919 83.5681 330.773C66.2815 319.506 48.8344 308.493 31.2774 297.659C11.8453 285.67 -7.71089 273.899 -27.3627 262.269C-49.0253 249.452 -70.8004 236.801 -92.632 224.268C-112.751 212.719 -132.553 200.599 -151.773 187.605C-167.672 176.859 -183.186 165.529 -198.079 153.411C-210.223 143.528 -221.954 133.126 -233.015 122.043C-242.024 113.01 -250.588 103.518 -258.425 93.4561C-264.651 85.4701 -270.424 77.1028 -275.483 68.3262C-279.503 61.3457 -283.079 54.0865 -285.969 46.5676C-288.192 40.7857 -290.021 34.8356 -291.27 28.7606C-292.209 24.2029 -292.822 19.5763 -292.986 14.9289C-293.101 11.7908 -293.016 8.64358 -292.628 5.53246C-292.424 3.91736 -292.165 2.29171 -291.728 0.72597C-291.679 0.529505 -291.617 0.330416 -291.559 0.139576C-291.56 1.6512 -291.422 3.17245 -291.258 4.67452C-290.799 8.90587 -289.976 13.0825 -288.939 17.2111C-287.309 23.703 -285.103 30.0422 -282.479 36.194C-278.927 44.5375 -274.604 52.5471 -269.706 60.1738C-263.507 69.8349 -256.393 78.8972 -248.649 87.3719C-238.942 97.9926 -228.245 107.691 -216.918 116.571C-203.009 127.487 -188.159 137.18 -172.79 145.896C-153.752 156.686 -133.883 165.972 -113.594 174.141C-88.9088 184.08 -63.5671 192.361 -37.9282 199.441C-11.3405 206.779 15.589 212.887 42.7613 217.66C67.4471 221.999 92.326 225.272 117.29 227.514C141.053 229.653 164.9 230.869 188.764 231.226C211.313 231.559 233.873 231.113 256.392 229.925C277.174 228.838 297.929 227.116 318.614 224.801C337.536 222.679 356.4 220.056 375.184 216.945C391.68 214.211 408.11 211.094 424.452 207.59C438.374 204.605 452.242 201.341 466.025 197.777C476.913 194.966 487.745 191.97 498.512 188.749C506.072 186.491 513.591 184.133 521.068 181.624C524.972 180.313 528.87 178.974 532.737 177.541C533.207 177.365 533.677 177.189 534.148 177.014L296.443 526.351Z" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Item -->
            </div>
        </div>
    </section>
    <!-- Testimonial End -->

    <!-- Call To Action Start -->
    {{-- <section class="cta-two">
    <div class="container">
        <div class="cta-two__bg" style="background-image: url({{ asset('website/assets/images/shapes/cta-bg-2.jpg')}});">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="200ms">
                    <h3 class="cta-two__title">Subscribe to Our Newsletter<br> for Daily Updates</h3>
                </div>
                <div class="col-lg-6">
                    <div class="cta-two__mail wow fadeInRight" data-wow-delay="200ms">
                        <form class="cta-two__email-box mc-form" data-url="MC_FORM_URL" novalidate="novalidate">
                            <div class="cta-two__email-input-box">
                                <input type="email" placeholder="Email Address" name="EMAIL">
                            </div>
                            <button type="submit" class="eduact-btn"><span class="eduact-btn__curve"></span>Subscribe</button>
                        </form>
                        <div class="mc-form__response"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    <!-- Call To Action End -->
@endsection
