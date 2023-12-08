@extends('website.layout.master')

@section('content')
    <div class="stricky-header stricked-menu main-menu main-header-two">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->
    <section class="page-header page-header--bg-two" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
        <div class="page-header__bg jarallax-img"></div><!-- /.page-header-bg -->
        <div class="page-header__overlay"></div><!-- /.page-header-overlay -->
        <div class="container text-center">
            <h2 class="page-header__title">Enquiry Form</h2><!-- /.page-title -->
            <ul class="page-header__breadcrumb list-unstyled">
                <li><a href="index-2.html">Home</a></li>
                <li><span>Enquiry Form</span></li>
            </ul><!-- /.page-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <!-- Checkout Start -->
    <section class="checkout-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="checkout-page__billing-address">
                        <h2 class="checkout-page__billing-address__title">Enquiry Form</h2>
                        <form class="checkout-page__form">
                            <div class="row bs-gutter-x-20">
                                <div class="col-xl-6">
                                    <div class="checkout-page__input-box">
                                        <select class="selectpicker" aria-label="Default select example">
                                            <option selected="">Select Branch</option>
                                            <option value="aandit Colony">Pandit Colony</option>
                                            <option value="Ashok Stambh">Ashok Stambh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout-page__input-box">
                                        <select class="selectpicker" aria-label="Default select example">
                                            <option selected="">Select Board</option>
                                            <option value="HSC">HSC</option>
                                            <option value="CBSC">CBSC</option>
                                            <option value="CBSC">ICSE</option>
                                            <option value="CBSC">other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout-page__input-box">
                                        <select class="selectpicker" aria-label="Default select example">
                                            <option selected="">Select Class</option>
                                            <option value="Foundation">Foundation</option>
                                            <option value="Aarambh">Aarambh</option>
                                            <option value="Pratigya">Pratigya</option>
                                            <option value="Sanjivani">Sanjivani</option>
                                            <option value="Crash Course">Crash Course</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="checkout-page__input-box">
                                        <input type="text" name="full_name" value=""
                                            placeholder="Please Enter Your Full Name" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout-page__input-box">
                                        <input type="email" name="email" value=""
                                            placeholder="Please Enter Your Email" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout-page__input-box">
                                        <input type="text" name="phone" value=""
                                            placeholder="Please Enter Your Phone" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout-page__input-box">
                                        <input type="text" name="phone" value=""
                                            placeholder="Please Enter alternative Phone Number" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout-page__input-box">
                                        <input type="text" name="Address" value="" placeholder="Address">
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

                <div class="d-flex">
                    <a href="checkout.html" class="eduact-btn eduact-btn-second"><span
                            class="eduact-btn__curve"></span>Submit<i class="icon-arrow"></i></a>
                </div><!-- /.text-right -->
            </div>

        </div>
    </section>
    <!-- Checkout End -->
@endsection
