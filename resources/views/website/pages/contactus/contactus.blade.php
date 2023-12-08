@extends('website.layout.master')

@section('content')
<div class="stricky-header stricked-menu main-menu main-header-two">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
<section class="page-header page-header--bg-two" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
    <div class="page-header__bg jarallax-img"></div><!-- /.page-header-bg -->
    <div class="page-header__overlay"></div><!-- /.page-header-overlay -->
    <div class="container text-center">
        <h2 class="page-header__title">Contact</h2><!-- /.page-title -->
        <ul class="page-header__breadcrumb list-unstyled">
            <li><a href="index-2.html">Home</a></li>
            <li><span>Contact</span></li>
        </ul><!-- /.page-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<!-- Contact Start -->
<section class="contact-one">
    <div class="container wow fadeInUp" data-wow-delay="300ms">
        <div class="section-title  text-center">
            <h5 class="section-title__tagline">
                Contact with Us
                <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 13">
                    <g clip-path="url(#clip0_324_36194)">
                        <path d="M10.5406 6.49995L0.700562 12.1799V8.56995L4.29056 6.49995L0.700562 4.42995V0.819946L10.5406 6.49995Z" />
                        <path d="M25.1706 6.49995L15.3306 12.1799V8.56995L18.9206 6.49995L15.3306 4.42995V0.819946L25.1706 6.49995Z" />
                        <path d="M39.7906 6.49995L29.9506 12.1799V8.56995L33.5406 6.49995L29.9506 4.42995V0.819946L39.7906 6.49995Z" />
                        <path d="M54.4206 6.49995L44.5806 12.1799V8.56995L48.1706 6.49995L44.5806 4.42995V0.819946L54.4206 6.49995Z" />
                    </g>
                </svg>
            </h5>
            <h2 class="section-title__title">Keep in touch</h2>
        </div><!-- section-title -->
        <div class="contact-one__form-box  text-center">
            <form action="https://bracketweb.com/eduact-html/assets/inc/sendemail.php" class="contact-one__form contact-form-validated" novalidate="novalidate">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-one__input-box">
                            <input type="text" placeholder="Your Name" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-one__input-box">
                            <input type="email" placeholder="Email Address" name="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-one__input-box">
                            <input type="text" placeholder="Phone" name="phone">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-one__input-box">
                            <input type="text" placeholder="Subject" name="subject">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="contact-one__input-box text-message-box">
                            <textarea name="message" placeholder="Write a Message"></textarea>
                        </div>
                        <div class="contact-one__btn-box">
                            <button type="submit" class="eduact-btn eduact-btn-second"><span class="eduact-btn__curve"></span>Send a Message<i class="icon-arrow"></i></button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="result"></div>
        </div>
    </div>
</section>
<!-- Contact End -->
  <!-- Info Start -->
  <div class="row">
    <div class="container-fluid">
    <h5 class="section-title__tagline mb-4 pl-5">
        Gangapur Road Branch
        <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 13">
            <g clip-path="url(#clip0_324_36194)">
                <path d="M10.5406 6.49995L0.700562 12.1799V8.56995L4.29056 6.49995L0.700562 4.42995V0.819946L10.5406 6.49995Z" />
                <path d="M25.1706 6.49995L15.3306 12.1799V8.56995L18.9206 6.49995L15.3306 4.42995V0.819946L25.1706 6.49995Z" />
                <path d="M39.7906 6.49995L29.9506 12.1799V8.56995L33.5406 6.49995L29.9506 4.42995V0.819946L39.7906 6.49995Z" />
                <path d="M54.4206 6.49995L44.5806 12.1799V8.56995L48.1706 6.49995L44.5806 4.42995V0.819946L54.4206 6.49995Z" />
            </g>
        </svg>
    </h5>
    </div>
    <div class="col-md-5">
  <section class="contact-info">
    <div class="container">
        <ul class="contact-info__wrapper">
            <li class="active">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="contact-info__icon"><span class="icon-Call"></span></div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <p class="contact-info__title">1 and 2 nd Floor Phoenix Tower, New Pandit Colony Near Jyoti Store, Gangapur Rd, opposite KTHM College, Nashik, Maharashtra 422002</p>
                    </div>
                </div>
            </li>
            <li >
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="contact-info__icon"><span class="icon-Location"></span></div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <h4 class="contact-info__text"><a href="tel:+91 9822056000">+91 9822056000</a></h4>
                        <h4 class="contact-info__text"><a href="tel:+91 9850511000">+91 9850511000</a></h4>
                    </div>
                </div>
            </li>
            <li>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="contact-info__icon"><span class="icon-Email"></span></div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <h4 class="contact-info__text"><a href="mailto:upadhyeoffice@gmail.com">upadhyeoffice@gmail.com</a></h4>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
    </div>
<!-- Info End -->
<!--Google Map Start-->
<div class="col-md-7">
<section class="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.097414944681!2d73.77351471474529!3d20.004425786562145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddebdc3fa72841%3A0x1b567c479d5596a6!2sUpadhye%20Classes!5e0!3m2!1sen!2sin!4v1680260496216!5m2!1sen!2sin" class="google-map__one" allowfullscreen></iframe>
</section>
</div>
  </div>
<!--Google Map End-->
{{-- =================== --}}
  <!-- Info Start -->
  <div class="row">
    <div class="container-fluid">
    <h5 class="section-title__tagline mb-4 pl-5">
        Ashok Stambh Branch
        <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 13">
            <g clip-path="url(#clip0_324_36194)">
                <path d="M10.5406 6.49995L0.700562 12.1799V8.56995L4.29056 6.49995L0.700562 4.42995V0.819946L10.5406 6.49995Z" />
                <path d="M25.1706 6.49995L15.3306 12.1799V8.56995L18.9206 6.49995L15.3306 4.42995V0.819946L25.1706 6.49995Z" />
                <path d="M39.7906 6.49995L29.9506 12.1799V8.56995L33.5406 6.49995L29.9506 4.42995V0.819946L39.7906 6.49995Z" />
                <path d="M54.4206 6.49995L44.5806 12.1799V8.56995L48.1706 6.49995L44.5806 4.42995V0.819946L54.4206 6.49995Z" />
            </g>
        </svg>
    </h5>
    </div>
    <div class="col-md-5">
  <section class="contact-info">
    <div class="container">
        <ul class="contact-info__wrapper">
            <li>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="contact-info__icon"><span class="icon-Call"></span></div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <p class="contact-info__title">Upadhye Chamber 431, Vakilwadi, Ashok Stambh, Vakil Wadi, Nashik, Maharashtra 422002</p>
                    </div>
                </div>
            </li>
            <li >
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="contact-info__icon"><span class="icon-Location"></span></div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <h4 class="contact-info__text"><a href="tel:+91 9822056000">+91 9822056000</a></h4>
                        <h4 class="contact-info__text"><a href="tel:+91 9850511000">+91 9850511000</a></h4>
                    </div>
                </div>
            </li>
            <li>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="contact-info__icon"><span class="icon-Email"></span></div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <h4 class="contact-info__text"><a href="mailto:upadhyeoffice@gmail.com">upadhyeoffice@gmail.com</a></h4>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
    </div>
<!-- Info End -->
<!--Google Map Start-->
<div class="col-md-7">
<section class="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.0355411486794!2d73.78311061474533!3d20.007022986560628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddebaf3613402f%3A0xbcdcce17186c25d2!2sUpadhye%20Classes!5e0!3m2!1sen!2sin!4v1680260609632!5m2!1sen!2sin" class="google-map__one" allowfullscreen></iframe>
</section>
</div>
  </div>
<!--Google Map End-->
@endsection

