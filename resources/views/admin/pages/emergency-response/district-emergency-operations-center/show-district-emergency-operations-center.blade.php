@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-7">

            <div class="row justify-content-center">
                <div class="col-7 grid-margin ">

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 d-flex justify-content-start align-items-center">
                            <h3 class="page-title">
                                District Emergency Operations Center
                            </h3>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 d-flex justify-content-end align-items-center">
                            <div>
                                <a href="{{ route('list-district-emergency-operations-center') }}"
                                    class="btn btn-sm btn-primary ml-3">Back</a>
                            </div>
                        </div>

                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row ">
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            <label>Title :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label>{{ strip_tags($districtemergencyoperationscenter->english_title) }}</label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            <label>शीर्षक :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label>{{ strip_tags($districtemergencyoperationscenter->marathi_title) }}</label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            <label>Description :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label>{{ strip_tags($districtemergencyoperationscenter->english_description) }}</label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            <label>वर्णन :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label>{{ strip_tags($districtemergencyoperationscenter->marathi_description) }}</label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            <label>Image :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <img src="{{ Config::get('DocumentConstant.DISTRICT_OPERATION_CENTER_VIEW') }}{{ $districtemergencyoperationscenter->english_image }}"
                                                style="width:300px; height:150px;" alt=" {{ strip_tags($districtemergencyoperationscenter['english_title']) }} Image"/>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            <label>प्रतिमा :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 pt-2">
                                            <img src="{{ Config::get('DocumentConstant.DISTRICT_OPERATION_CENTER_VIEW') }}{{ $districtemergencyoperationscenter->marathi_image }}"
                                                style="width:300px; height:150px;" alt=" {{ strip_tags($districtemergencyoperationscenter['marathi_title']) }} प्रतिमा"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- content-wrapper ends -->
    @endsection
