@extends('website.layout.master')

@section('content')
    <div class="stricky-header stricked-menu main-menu main-header-two">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->
    <section class="page-header page-header--bg-two" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
        <div class="page-header__bg jarallax-img"></div><!-- /.page-header-bg -->
        <div class="page-header__overlay"></div><!-- /.page-header-overlay -->
        <div class="container text-center">
            <h2 class="page-header__title">Gallery</h2><!-- /.page-title -->
            <ul class="page-header__breadcrumb list-unstyled">
                <li><a href="index-2.html">Home</a></li>
                <li><span>Gallery</span></li>
            </ul><!-- /.page-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <!-- gallery-start -->
    <section class="gallery-page">
        <div class="container">
            <div class="row">
                <!-- gallery-item-start -->
                <div class="col-lg-3 col-md-6">
                    <div class="gallery-page__single">
                        <img src="{{ asset('website/assets/images/gallery/gallery-1.jpg')}}" alt="eduact">
                        <div class="gallery-page__icon">
                            <a class="img-popup" href="{{ asset('website/assets/images/gallery/gallery-1.jpg')}}"></a>
                        </div>
                    </div>
                </div>
                <!-- gallery-item-end -->
                <!-- gallery-item-start -->
                <div class="col-lg-3 col-md-6">
                    <div class="gallery-page__single">
                        <img src="{{ asset('website/assets/images/gallery/gallery-2.jpg')}}" alt="eduact">
                        <div class="gallery-page__icon">
                            <a class="img-popup" href="{{ asset('website/assets/images/gallery/gallery-2.jpg')}}"></a>
                        </div>
                    </div>
                </div>
                <!-- gallery-item-end -->
                <!-- gallery-item-start -->
                <div class="col-lg-3 col-md-6">
                    <div class="gallery-page__single">
                        <img src="{{ asset('website/assets/images/gallery/gallery-3.jpg')}}" alt="eduact">
                        <div class="gallery-page__icon">
                            <a class="img-popup" href="{{ asset('website/assets/images/gallery/gallery-3.jpg')}}"></a>
                        </div>
                    </div>
                </div>
                <!-- gallery-item-end -->
                <!-- gallery-item-start -->
                <div class="col-lg-3 col-md-6">
                    <div class="gallery-page__single">
                        <img src="{{ asset('website/assets/images/gallery/gallery-4.jpg')}}" alt="eduact">
                        <div class="gallery-page__icon">
                            <a class="img-popup" href="{{ asset('website/assets/images/gallery/gallery-4.jpg')}}"></a>
                        </div>
                    </div>
                </div>
                <!-- gallery-item-end -->
                <!-- gallery-item-start -->
                <div class="col-lg-3 col-md-6">
                    <div class="gallery-page__single">
                        <img src="{{ asset('website/assets/images/gallery/gallery-5.jpg')}}" alt="eduact">
                        <div class="gallery-page__icon">
                            <a class="img-popup" href="{{ asset('website/assets/images/gallery/gallery-5.jpg')}}"></a>
                        </div>
                    </div>
                </div>
                <!-- gallery-item-end -->
                <!-- gallery-item-start -->
                <div class="col-lg-3 col-md-6">
                    <div class="gallery-page__single">
                        <img src="{{ asset('website/assets/images/gallery/gallery-6.jpg')}}" alt="eduact">
                        <div class="gallery-page__icon">
                            <a class="img-popup" href="{{ asset('website/assets/images/gallery/gallery-6.jpg')}}"></a>
                        </div>
                    </div>
                </div>
                <!-- gallery-item-end -->
                <!-- gallery-item-start -->
                <div class="col-lg-3 col-md-6">
                    <div class="gallery-page__single">
                        <img src="{{ asset('website/assets/images/gallery/gallery-7.jpg')}}" alt="eduact">
                        <div class="gallery-page__icon">
                            <a class="img-popup" href="{{ asset('website/assets/images/gallery/gallery-7.jpg')}}"></a>
                        </div>
                    </div>
                </div>
                <!-- gallery-item-end -->
                <!-- gallery-item-start -->
                <div class="col-lg-3 col-md-6">
                    <div class="gallery-page__single">
                        <img src="{{ asset('website/assets/images/gallery/gallery-8.jpg')}}" alt="eduact">
                        <div class="gallery-page__icon">
                            <a class="img-popup" href="{{ asset('website/assets/images/gallery/gallery-8.jpg')}}"></a>
                        </div>
                    </div>
                </div>
                <!-- gallery-item-end -->
            </div>
        </div>
    </section>
    <!-- gallery-end-->
@endsection
