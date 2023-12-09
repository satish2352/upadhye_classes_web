@extends('admin.layout.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper mt-6">

        <div class="row justify-content-center">
            <div class="col-7 grid-margin ">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 d-flex justify-content-start align-items-center">
                        <h3 class="page-title">
                            Emergency Contact
                        </h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 d-flex justify-content-end align-items-center">
                        <div>
                            <a href="{{ route('list-emergency-contact') }}" class="btn btn-sm btn-primary ml-3">Back</a>
                        </div>
                    </div>

                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="row ">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label>English Title :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <label>{{ strip_tags($emergency_contacts->english_title) }}</label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label>Marathi Title :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <label>{{ strip_tags($emergency_contacts->marathi_title) }}</label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label>English Name :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <label>{{ strip_tags($emergency_contacts->english_name) }}</label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label>Marathi Name :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <label>{{ strip_tags($emergency_contacts->marathi_name) }}</label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label>English Address :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <label>{{ strip_tags($emergency_contacts->english_address) }}</label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label>Marathi Address :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <label>{{ strip_tags($emergency_contacts->marathi_address) }}</label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label> Email :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <label>{{ strip_tags($emergency_contacts->email) }}</label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label>English No :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <label>{{ strip_tags($emergency_contacts->english_number) }}</label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label>Marathi No :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <label>{{ strip_tags($emergency_contacts->marathi_number) }}</label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label>English Landline No :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <label>{{ strip_tags($emergency_contacts->english_landline_no) }}</label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label>Marathi Landline No :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <label>{{ strip_tags($emergency_contacts->marathi_landline_no) }}</label>
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