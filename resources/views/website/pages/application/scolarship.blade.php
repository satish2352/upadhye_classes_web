@extends('website.layout.master')

@section('content')
    <div class="stricky-header stricked-menu main-menu main-header-two">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->
    <section class="page-header page-header--bg-two" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
        <div class="page-header__bg jarallax-img"></div><!-- /.page-header-bg -->
        <div class="page-header__overlay"></div><!-- /.page-header-overlay -->
        <div class="container text-center">
            <h2 class="page-header__title">Apply for Scholarship - Course Information</h2><!-- /.page-title -->
            <ul class="page-header__breadcrumb list-unstyled">
                <li><a href="index-2.html">Home</a></li>
                <li><span>Apply for Scholarship - Course Information</span></li>
            </ul><!-- /.page-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <!-- Checkout Start -->
    <section class="checkout-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="checkout-page__billing-address">
                        <h2 class="checkout-page__billing-address__title">Apply for Scholarship - Course Information</h2>
                        <form class="checkout-page__form">
                            <div class="row bs-gutter-x-20">
                                <div class="col-xl-6">
                                    <div class="checkout-page__input-box">
                                        <select class="selectpicker" aria-label="Default select example">
                                            <option  value="">Select Course</option>
                                            <option  value="9th to 12th">9th to 12th</option>
                                            <option  value="AIIMS">AIIMS</option>
                                            <option  value="IIT-JEE (Adv)">IIT-JEE (Adv)</option>
                                            <option  value="JEE (Mains)">JEE (Mains)</option>
                                            <option  value="MHT-CET">MHT-CET</option>
                                            <option  value="NEET ">NEET </option>
                                            <option  value="8th to 10th ">8th to 10th </option>
                                            <option  value="XI /XII (Science All Subjects )">XI /XII (Science All Subjects )</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout-page__input-box">
                                        <select class="selectpicker" aria-label="Default select example">
                                            <option selected="">Select Mode</option>
                                            <option value="New"  >New Admission</option>
                                            <option value="Registered"  >Registered Student</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout-page__input-box">
                                        <input type="text" name="full_name" value=""
                                            placeholder="Please Enter  Student Name" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout-page__input-box">
                                        <input type="text" name="Address" value="" placeholder="Address">
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
                                        <select class="selectpicker" aria-label="Default select example">
                                            <option selected="">Select Branch</option>
                                            <option value='6'>Gangapur Road</option>
                                            <option value='7'>Ashok Stambha Road</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout-page__input-box">
                                        <input type="text" name="role_number" value=""
                                            placeholder="Please Enter Roll Number" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="checkout-page__check-box">
                                        <input type="checkbox" name="skipper4" id="skipper4" checked="">
                                        <label for="skipper4">I Agree to receive SMS/Call from Upadhye Classes<span></span></label>
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
